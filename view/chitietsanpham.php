<style>
td {
    padding: 0 20px;
}
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php 
                    $hinh = $img_path . $img;
                    echo "<img src='$hinh' width='300'>";                 
                    echo "<p>$mota</p>";
                    echo "<hr><br>";
                    echo "<h4>$price đ</h4>";
                    echo '<form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>'
                ?>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            
            });
        </script>
        <div class="bl" id="binhluan">

        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach($sanphamcl as $value): ?>
                <li>
                    <a href="index.php?act=sanphamct&idsp=<?=$value['id']?>">
                        <?=$value['name']?>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>