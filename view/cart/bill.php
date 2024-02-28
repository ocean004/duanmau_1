<main class="catalog mb ">
    <div class="boxleft"> 
    <form action="index.php?act=billconfirm" method="post">
                <div class=" mb">
                        <div class="box_title">THÔNG TIN KHÁCH HÀNG</div>
                            <div class="box_content">
                                <table>
                                    <?php
                                        if(isset($_SESSION['user'])){
                                            $user = $_SESSION['user']['user'];
                                            $address = $_SESSION['user']['address'];
                                            $email = $_SESSION['user']['email'];
                                            $tel = $_SESSION['user']['tel'];
                                        }else{
                                            $user = "";
                                            $address = "";
                                            $email = "";
                                            $tel = "";
                                        }
                                    ?>
                                    <tr>
                                        <td>Tên khách hàng</td>
                                        <td><input type="text" name="user" value="<?=$user?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><input type="text" name="address" value="<?=$address?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" name="email" value="<?=$email?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thọai</td>
                                        <td><input type="text" name="tel" value="<?=$tel?>"></td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                    <div class="mb">
                        <div class="box_title">PHƯƠNG THỨC THANH TOÁN</div>
                            <div class="box_content">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="Trả tiền khi nhận hàng" name="pttt" checked>Trả tiền khi nhận hàng</td>
                                        <td><input type="radio" value="Thanh toán online" name="pttt">Thanh toán online</td>
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
                        <a href=""><input type="submit" value="Đồng ý đặt hàng" name="dongydathang"></a>
                    </div>

    </form>

    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>

