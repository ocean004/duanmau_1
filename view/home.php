<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpeg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <br>
            <h2 class="center">Tất cả sản phẩm</h2>
            <br>
        <div class="items">
            <?php
              $i=0;
                foreach ($spnew as $sp){
                    extract($sp);
                    $hinh =  $img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else{
                        $mr="mr";
                    }
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    
                    echo '<div class="box_items '.$mr.'">
                            <div class="box_items_img">
                                <a class="item_name" href="'. $linksp .'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                                <a class="item_name" href="'. $linksp .'">'.$name.'</a>  <br>
                                <a class="price">'.$price.' đ</a>  
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>                                               
                                
                                                              
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