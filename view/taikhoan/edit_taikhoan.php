<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="box_title">
                CẬP NHẬT TÀI KHOẢN
            </div>
            <div class="box_content">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }    
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <label for="">Email:</label>
                    <input type="email" name="email" value="<?=$email?>">
                    <label for="">Username:</label>
                    <input type="text" name="user" value="<?=$user?>">
                    <label for="">Password:</label>
                    <input type="password" name="pass" value="<?=$pass?>"><br>
                    <label for="">Address:</label>
                    <input type="text" name="address" value="<?=$address?>"><br>
                    <label for="">Tel:</label>
                    <input type="text" name="tel" value="<?=$tel?>"><br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value=" Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao)!=""){
                        echo $thongbao;
                    }
                ?>
                </h2>
                
            </div>
        </div>

        
    </div>
    <?php
    include "view/boxright.php";
?>

</main>