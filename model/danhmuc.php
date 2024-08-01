<?php
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO `categorypro`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = 'DELETE FROM `categorypro` WHERE id=' . $id;
    pdo_execute($sql);
}
function list_danhmuc()
{
    $sql = "select * from categorypro order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function load_danhmuc($id)
{
    $sql = 'SELECT * FROM `categorypro` WHERE id=' . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE `categorypro` SET `name`= '$tenloai' WHERE id = $id";
    pdo_execute($sql);
}
