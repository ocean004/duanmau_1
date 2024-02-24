<main class="catalog mb ">
    <div class="boxleft"> 
        <div class=" mb">
            <div class="box_title">GIỎ HÀNG</div>
                <div class="box_content">
                    <table border="1">
                        
                        <?php 
                            viewcart(1);
                        ?>
                    </table>
                </div>
        </div>
        <div class="row mb center mb2">
            <a href="index.php"><input type="button" value="Về trang chủ"></a>
            <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a>
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>

