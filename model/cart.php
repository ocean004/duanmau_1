<?php
    function viewcart($del){
        global $img_path;
        $tong = 0;
        $i=0;
        if($del==1){
            $xoasp_th = '<th>Tùy chọn</th>';
            $xoasp_td2= '<td></td>';
        }else{
            $xoasp_th='';
            $xoasp_td2='';
        }
        echo '<tr>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                '.$xoasp_th.'
            </tr>';
        foreach($_SESSION['mycart'] as $cart){
            $hinh = $img_path.$cart[2];
            $thanhtien = $cart[3] * $cart[4];
            $tong+=$thanhtien;
            if($del==1){
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
            }else{
                $xoasp_td='';
            }
            echo '
                <tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart[1].'</td>
                    <td>'.$cart[3].' đ</td>
                    <td>'.$cart[4].'</td>
                    <td>'.$thanhtien.'</td>
                    '.$xoasp_td.'
                </tr>';
            $i+=1;
        } 
        echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.' đ</td>
                '.$xoasp_td2.'
            </tr>';
        }
?>