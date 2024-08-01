<div id="content">
    <div class="container-fluid">
        <h1>Trang chủ</h1>
        <?php
        include "../model/pdo.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/taikhoan.php";
        include "../model/binhluan.php";

        if (isset($_GET['quanly'])) {
            $quanly = $_GET['quanly'];
            switch ($quanly) {
                case 'adddm':
                    if (isset($_POST['them']) && ($_POST['them'])) {
                        $tenloai = $_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbao = "them thanh cong";
                    }
                    include "modules/danhmuc/add.php";
                    break;
                case 'listdm':
                    $listdanhmuc = list_danhmuc();
                    include "modules/danhmuc/list.php";
                    break;
                case 'xoadm':
                    if (isset($_GET['id']) && ($_GET['id'])) {
                        delete_danhmuc($_GET['id']);
                    }
                    $listdanhmuc = list_danhmuc();
                    include "modules/danhmuc/list.php";
                    break;
                case 'suadm':
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        $dm = load_danhmuc($_GET['id']);
                    }
                    include "modules/danhmuc/update.php";
                    break;
                case 'updatedm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        update_danhmuc($id, $tenloai);
                        $thongbao = "cap nhat thanh cong";
                    }
                    $listdanhmuc = list_danhmuc();
                    include "modules/danhmuc/list.php";
                    break;

                    // sản phẩm 

                case 'addsp':
                    if (isset($_POST['them']) && ($_POST['them'])) {
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $filename = basename($_FILES['image']['name']);
                        $target_file = '../upload/' . $filename;
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "Thành công!";
                        } else {
                            // echo "Lỗi!";
                        }

                        insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                        $thongbao = "them thanh cong";
                    }
                    $listdanhmuc = list_danhmuc();
                    include "modules/sanpham/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['listok']) && ($_POST['listok'])) {
                        $keyw = $_POST['keyw'];
                        $iddm = $_POST['iddm'];
                    } else {
                        $keyw = "";
                        $iddm = 0;
                    }
                    $listdanhmuc = list_danhmuc();
                    $listsanpham = list_sanpham($keyw, $iddm);
                    include "modules/sanpham/list.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id'])) {
                        $sql = 'DELETE FROM `products` WHERE id=' . $_GET['id'];
                        pdo_execute($sql);
                    }
                    $listsanpham = list_sanpham();
                    include "modules/sanpham/list.php";
                    break;
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        $sp = load_sanpham($_GET['id']);
                    }
                    $listdanhmuc = list_danhmuc();
                    include "modules/sanpham/update.php";
                    break;
                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $filename = basename($_FILES['image']['name']);
                        $target_file = '../upload/' . $filename;
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            // echo "Thành công!";
                        } else {
                            // echo "Lỗi!";
                        }
                        update_sanpham($id, $tensp, $giasp, $mota, $filename, $iddm);
                        $thongbao = "cap nhat thanh cong";
                    }
                    $listdanhmuc = list_danhmuc();
                    $listsanpham = list_sanpham();
                    include "modules/sanpham/list.php";
                    break;
                    // controller tai khoan
                case 'dskh':
                    $listtaikhoan = loadall_taikhoan();
                    include "modules/taikhoan/list.php";
                    break;
                case "suatk":
                    if (isset($_GET['id']) && ($_GET['id'])) {
                        $tk = loadone_taikhoan($_GET['id']);
                    }
                    include "modules/taikhoan/update.php";
                    break;
                case "updatetk":
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $user = $_POST['tentk'];
                        $pass = $_POST['matkhau'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['sdt'];
                        $role = $_POST['role'];
                        update_tk($id, $user, $pass, $email, $address, $tel, $role);
                        $thongBao = 'Cap nhat thanh cong!';
                    }
                    $listTaiKhoan = loadall_taikhoan();
                    include "modules/taikhoan/list.php";
                    break;
                case "xoatk":
                    if (isset($_GET['id']) && ($_GET['id'])) {
                        delete_tk($_GET['id']);
                    }
                    $listTaiKhoan = loadall_taikhoan();
                    include "modules/taikhoan/list.php";
                    break;
                    // controller binh luan
                case 'dsbl':
                    $listbinhluan = loadall_binhluan(0);
                    include "modules/binhluan/list.php";
                    break;
                case "xoabl":
                    if (isset($_GET['id']) && ($_GET['id'])) {
                        delete_bl($_GET['id']);
                    }
                    $listBinhLuan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                default:
                    include "modules/notfound.php";
                    break;
            }
        }
        ?>
    </div>
</div>