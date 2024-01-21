<?php 
    // function loadall_binhluan($idsp){
    //     $sql = "
    //         SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
    //         LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
    //         LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
    //         WHERE sanpham.id = $idsp;
    //     ";
    //     $result =  pdo_query($sql);
    //     return $result;
    // }
    function insert_binhluan($noidung, $iduser,$idpro,$ngaybinhluan){
            $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) 
            VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan');";    
        
            pdo_execute($sql);
        }
    function loadall_binhluan($idpro){
        $sql = "SELECT * FROM binhluan WHERE idpro='".$idpro."' ORDER BY id desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }

?>