<main class="catalog  mb ">
    <div class="boxleft">
    <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <br>
        <h2 style="text-align: center; color:#367fa9;margin-bottom: 20px;">Tất cả sản phẩm</h2>
        <div class="items">
            <?php
            $i=0;
            foreach ($dssp as $sp){
                extract($sp);
                $hinh =  $img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '<div class="box_items '.$mr.'">
                    <div class="box_items_img">
                    <img src="'.$hinh.'" alt="">
                    
                </div>
                <a class="item_name" href="'. $linksp .'">'.$name.'</a>
                <p class="price">$'.$price.'</p>
                <div class="add" href="">ADD TO CART</div>
                
            </div>';
                    $i+=1;
                }
            ?>
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->