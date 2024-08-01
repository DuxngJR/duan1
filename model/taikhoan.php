<?php
function update_tk($id, $user, $pass, $email, $address, $tel, $role)
{
    $sql = "UPDATE `users` SET `name`='$user',`password`='$pass',`email`='$email',`address`='$address',`number`='$tel',`role`='$role' WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_tk($id)
{
    $sql = 'DELETE FROM `users` WHERE id=' . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM `users` WHERE id =" . $id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM `users` WHERE 1 ORDER BY `id` DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO `users`(`email`, `name`, `password`) VALUES ('$email','$user','$pass')";
    pdo_query($sql);
}
function dangnhap($user, $pass)
{
    $sql = "SELECT * FROM users WHERE name='$user' and password='$pass'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        $_SESSION['user'] = $user;
        $_SESSION['role'] = $taikhoan['role'];
    } else {
        return "Thông tin tài khoản sai";
    }
}
function dangxuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
function checkmail($email)
{
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
