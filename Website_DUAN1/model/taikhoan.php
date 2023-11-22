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
    // $sql = "UPDATE danh_muc SET trang_thai = '1' WHERE id_dm=".$id_dm;
    $sql = "DELETE FROM tai_khoan WHERE id_tk=" . $id_tk;
    pdo_execute($sql);
}
