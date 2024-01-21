<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="box_title">
                ĐĂNG KÝ THÀNH VIÊN
            </div>
            <div class="box_content">
                <form action="index.php?act=dangky" method="post">
                    <label for="">Email:</label>
                    <input type="email" name="email" >
                    <label for="">Username:</label>
                    <input type="text" name="user" >
                    <label for="">Password:</label>
                    <input type="password" name="pass" ><br>
                    <input type="submit" value="Đăng ký" name="dangky">
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