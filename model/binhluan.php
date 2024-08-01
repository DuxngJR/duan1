<?php
function loadall_binhluan($idsp)
{
    if ($idsp > 0) {
        $sql = "
            SELECT comment.id, comment.description, users.name, comment.ngaybl FROM `comment` 
            LEFT JOIN users ON comment.user_id = users.id
            LEFT JOIN products ON comment.product_id = products.id
            WHERE products.id = $idsp;
        ";
    } else {
        $sql = "SELECT * FROM `comment` WHERE 1";
    }
    $result =  pdo_query($sql);
    return $result;
}
function insert_binhluan($product_id, $description)
{
    $date = date('Y-m-d');
    $sql = "
            INSERT INTO `comment`(`description`, `user_id`, `product_id`, `ngaybl`) 
            VALUES ('$description',1,'$product_id','$date');
        ";
    pdo_execute($sql);
}

function delete_bl($id)
{
    $sql = "DELETE FROM `comment` WHERE id=" . $id;
    pdo_execute($sql);
}
