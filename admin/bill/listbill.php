<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Tìm mã đơn hàng">
        <input type="submit" name="listok" value="Tìm kiếm">
    </form>
        <div class="row2 form_content ">
            <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table border="1">
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>TRẠNG THÁI</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        foreach($listbill as $bill){
                            extract($bill);
                            $kh = $bill["bill_user"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_address"].'
                            <br> '.$bill["bill_tel"];
                            $countsp = loadall_cart_count($bill['id']);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $suabill="index.php?act=suabill&id=".$id;
                            $xoabill="index.php?act=xoabill&id=".$id;
                            echo '<tr>
                                <td>DVT-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].' đ</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$ttdh.'</td>
                                <td><a href="'.$suabill.'"><input type="button" value="Sửa"></a>   
                                    <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>                   
                </table>
            </div>
            </form>
        </div>
</div>