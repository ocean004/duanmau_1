<?php
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT ĐƠN HÀNG</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatebill" method="POST">
           <div class="row2 mb10 form_content_container">
            <label> KH </label> <br>
            <input type="text" name="iduser" disabled>
            <label> số lượng hàng </label> <br>
            <input type="text" name="soluonghang" disabled>
            <label> gia tri don hang </label> <br>
            <input type="text" name="total" disabled>
            <label> ngay dat hang </label> <br>
            <input type="text" name="ngaydathang" disabled>
           </div>
           <div class="row2 mb10">
            <label>Trạng thái </label><br>
            <select name="bill_status">
                <option value="0" >Đơn hàng mới</option>
                <option value="1" >Đang xử lý</option>
                <option value="2" >Đang giao</option>
                <option value="3" >Đã giao</option>
            </select>
            <!-- <input type="checkbox" name="bill_status"  > -->
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
         <a href="index.php?act=listbill"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;           
           ?>
          </form>
    </div>
</div>