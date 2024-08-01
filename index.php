
<?php
session_start();
include "./view/header.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/pdo.php";
include "./model/taikhoan.php";
include "./model/binhluan.php";
include "global.php";

if (!isset($_SESSION['mycart']) || !is_array($_SESSION['mycart'])) {
    $_SESSION['mycart'] = array();
}

// if (isset($_SESSION['mycath'])) $_SESSION['mycath'] = [];

$spnew = loadall_sanpham_home();
$dsdm = list_danhmuc();
$dsyeuthich = loadall_sanpham_view();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = 'Dang ky thanh cong!';
            }
            include "./view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $loginMess = dangnhap($user, $pass);
            }
            include "./view/taikhoan/dangnhap.php";
            break;
        case "dangxuat":
            dangxuat();
            include 'view/home.php';
            break;
        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $checkmail = checkmail($email);
                if (is_array($checkmail)) {
                    $thongbao = "Gửi email thành công <br>
                    Mật khẩu của bạn là:" . $checkmail['password'];
                } else {
                    $thongbao = "Email của bạn không tồn tại";
                }
            }
            include "./view/taikhoan/quenmk.php";
            break;
        case 'sanpham':
            if (isset($_POST['keyword']) &&  $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = list_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "./view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_POST['guibinhluan'])) {
                insert_binhluan($_POST['product_id'], $_POST['description']);
            }
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $id = $_GET['idsp'];
                $onesp = load_sanpham($id);
                $binhluan = loadall_binhluan($_GET['idsp']);
                include "./view/chitietsanpham.php";
            } else {
                include "./view/home.php";
            }
            break;
        case 'gioithieu':
            include "./view/gioithieu.php";
            break;
        case 'tintuc':
            include "./view/tintuc.php";
            break;
        case 'dathang':
            if (isset($_POST['dongydathang'])&&($_POST['dongydathang'])) {
                $name=$_POST['name'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $number=$_POST['number'];
                $pttt=0;
                $tong=0;
            }
            include "./view/cart/dathang.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=giohang');
            break;
        case 'giohang':
            if (isset($_POST['giohang']) && $_POST['giohang']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id, $name, $image, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "./view/cart/giohang.php";
            break;
        default:
            # code...
            break;
    }
} else {
    include "./view/home.php";
}

include "./view/footer.php";
?>
