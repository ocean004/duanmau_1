<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">ĐƠN HÀNG CỦA BẠN</div>
                <div class="box_content">
                    <table border="1">
                        <tr>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>SỐ LƯỢNG HÀNG</th>
                            <th>TỔNG GIÁ TRỊ</th>
                            <th>TRẠNG THÁI ĐƠN HÀNG</th>
                        </tr>
                        <?php
                            if(is_array($listbill)){
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $ttdh = get_ttdh($bill['bill_status']);
                                    $countsp = loadall_cart_count($bill['id']);
                                    echo '<tr>
                                            <th>DVT-'.$bill['id'].'</th>
                                            <th>'.$bill['ngaydathang'].'</th>
                                            <th>'.$countsp.'</th>
                                            <th>'.$bill['total'].' đ</th>
                                            <th>'.$ttdh.'</th>
                                        </tr>';
                                }
                            }
                        ?>
                        
                    </table>
                </div>
        </div>
        <div class="row mb center mb2">
            <a href="index.php"><input type="button" value="Về trang chủ"></a>         
        </div>
    </div>
    <?php
        include "view/boxright.php";
    ?>
</main>


