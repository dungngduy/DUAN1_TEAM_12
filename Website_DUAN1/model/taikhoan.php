<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM tai_khoan ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO tai_khoan(user,email,pass) VALUES ('$user','$email','$pass')";
    pdo_execute($sql);
}
function delete_taikhoan($id_tk)
{
    $sql = "DELETE FROM tai_khoan WHERE id=" . $id_tk;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM tai_khoan WHERE id= $id ";
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id, $user, $pass, $email){
    $sql = "UPDATE tai_khoan SET `user` = '$user', `pass` = '$pass', `email` = '$email' WHERE tai_khoan.id = $id";
    pdo_execute($sql);
}
?>