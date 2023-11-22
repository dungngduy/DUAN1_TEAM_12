<?php
        function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
            $sql = "INSERT INTO `binhluan` (`noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
            pdo_execute($sql);
        }
        function loadall_binhluan($idpro){
            $sql = "SELECT * FROM binh_luan WHERE 1";
            if ($idpro>0) $sql.=" AND idpro ='".$idpro."'";
            $sql.=" ORDER BY ID DESC";
            $listbinhluan = pdo_query($sql);
            return $listbinhluan;
        }
        function delete_binhluan($id){
            $sql = " DELETE FROM binh_luan WHERE id=".$_GET['id'];
            pdo_execute($sql);
        }

?>