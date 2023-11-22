<?php
    function insert_taikhoan($email, $user, $pass){
        $insert = "INSERT INTO tai_khoan(email, user, pass) VALUES ('$email', '$user', '$pass');";
        pdo_execute($insert);
    }

    function checkuser($user, $pass){
        $sql = "SELECT * FROM tai_khoan WHERE user = '$user' AND pass = '$pass'";
        $check = pdo_query($sql);
        return $check[0]['role'];
    }

    function get_user($user, $pass){
        $sql = "SELECT * FROM tai_khoan WHERE user = '$user' AND pass = '$pass'";
        $check = pdo_query($sql);
        return $check;
    }
?>