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
?>