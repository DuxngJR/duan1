<?php
function loadall_sanpham_home()
{
    $sql = "select * from products where 1 order by id desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_view()
{
    $sql = "select * from products where 1 order by view desc limit 0,3";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function insert_sanpham($tensp, $giasp, $filename, $mota, $iddm)
{
    $sql = "INSERT INTO `products`(`name`, `price`, `image`, `description`, `categoryId`)  VALUES ('$tensp', '$giasp', '$filename', '$mota', '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = 'DELETE FROM `products` WHERE id=' . $id;
    pdo_execute($sql);
}
function list_sanpham($keyw = "", $iddm = 0)
{
    $sql = "select * from products where 1";
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and categoryId ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_sanpham($id)
{
    $sql = 'SELECT * FROM `products` WHERE id=' . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function update_sanpham($id, $tensp, $giasp, $mota, $filename, $iddm)
{
    if ($filename != "") {
        $sql = "UPDATE `products` SET `name`='$tensp', `price`='$giasp', `image`='$filename', `description`='$mota', `categoryId`='$iddm' WHERE `id`= $id";
    } else {
        $sql = "UPDATE `products` SET `name`='$tensp', `price`='$giasp', `description`='$mota', `categoryId`='$iddm' WHERE `id`= $id";
    }
    pdo_execute($sql);
}
