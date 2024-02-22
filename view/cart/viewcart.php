<main class="catalog mb ">
    <div class="boxleft"> 
        <div class=" mb">
            <div class="box_title">GIO HANG</div>
                <div class="box_content">
                    <table>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php 
                            $tong = 0;
                            foreach($_SESSION['mycart'] as $cart){
                            $hinh = $img_path.$cart[2];
                            $thanhtien = $cart[3] * $cart[4];
                            $tong+=$thanhtien;
                            echo '<tr>
                                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$thanhtien.'</td>
                                    <td><input type="button" value="Xóa"</td>
                                </tr>';
                        } 
                        echo '<tr>
                                <td colspan="4">Tổng đơn hàng</td>
                                <td>'.$tong.'</td>
                                <td></td>
                            </tr>'
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="/img/anh1.jpg" alt="" height="80px"></td>
                            <td>Dong ho</td>
                            <td>100000</td>
                            <td>2</td>
                            <td>200000</td>
                            <td><input type="button" value="Xoa"</td>
                        </tr> -->
                    </table>
                </div>
        </div>
        <div class="row mb center">
            <input type="submit" value="Xác nhận đặt hàng">
            <a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>

        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>

