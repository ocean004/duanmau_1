<main class="catalog mb ">
    <div class="boxleft"> 
        <div class="mb">
            <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
                <div class="box_content">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                        ?>
                        <tr>
                            <td>Tên khách hàng</td>
                            <td><input type="text" name="user" ></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" ></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" ></td>
                        </tr>
                        <tr>
                            <td>Số điện thọai</td>
                            <td><input type="text" name="tel" ></td>
                        </tr>
                    </table>
                </div>
        </div>
        <div class="mb">
            <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="box_content">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
        </div>
        <div class="mb">
            <div class="box_title">THÔNG TIN GIỎ HÀNG</div>
                <div class="box_content">
                    <table border="1">
                        <?php
                            viewcart(0);
                        ?>
                    </table>
                </div>
        </div>
        <div class="row mb center mb2">
            <a href="index.php"><input type="button" value="Về trang chủ"></a>
            <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a>
            
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>

