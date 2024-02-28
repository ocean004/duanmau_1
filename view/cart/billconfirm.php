<main class="catalog mb ">
    <div class="boxleft">
        <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
                $pttt = get_pttt($bill['bill_pttt']);
            }
        ?> 
        <div class="mb">
            <div class="box_title">CẢM ƠN</div>
                <div class="box_content">
                    <center><h2>Cảm ơn quý khách đã đặt hàng!</h2></center>
                </div>
        </div>   
                <div class="mb">
                    <div class="box_title">THÔNG TIN ĐƠN HÀNG</div>
                        <div class="box_content" style="text-align: center;">
                            <p>Mã Đơn Hàng:DVT-<?=$bill['id'];?></p>
                            <p>Ngày đặt hàng: <?=$bill['ngaydathang'];?></p> 
                            <p>Tổng đơn hàng: <?=$bill['total'];?>đ</p> 
                            <p>PTTT: <?=$pttt;?></p>
                        </div>
                </div>
                <div class="mb">
                    <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
                        <div class="box_content">
                            <table>
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td><?=$bill['bill_user'];?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><?=$bill['bill_address'];?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?=$bill['bill_email'];?></td>
                                </tr>
                                <tr>
                                    <td>Số điện thọai</td>
                                    <td><?=$bill['bill_tel'];?></td>
                                </tr>
                            </table>
                        </div>
                </div>
        <div class="mb">
            <div class="box_title">CHI TIẾT GIỎ HÀNG</div>
                <div class="box_content">
                    <table border="1">
                        <?php
                            bill_chi_tiet($billct);
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


