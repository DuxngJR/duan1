<div class="container-fluid ">
    <h3>Sửa tài khoản</h3>
</div>
<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="index.php?quanly=updatetk" method="POST" enctype="multipart/form-data">
            <div class="control-group" style="width: 250px;">
                <label class="control-label">Tên tài khoản: </label>
                <div class="controls">
                    <input type="text" name="tentk" value="<?= $name ?>">
                </div>
                <label class="control-label">Mật khẩu: </label>
                <div class="controls">
                    <input type="text" name="matkhau" value="<?= $password ?>">
                </div>
                <label class="control-label">Email: </label>
                <div class="controls">
                    <input type="text" name="email" value="<?= $email ?>">
                </div>
                <label class="control-label">Address: </label>
                <div class="controls">
                    <input type="text" name="address" value="<?= $address ?>">
                </div>
                <label class="control-label">Số Điện Thoại: </label>
                <div class="controls">
                    <input type="text" name="sdt" value="<?= $number ?>">
                </div>
                <label class="control-label">Vai trò: </label>
                <div class="controls">
                    <input type="text" name="role" value="<?= $role ?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-default">
                    <a href="index.php?quanly=dskh"><input type="button" value="Danh sách"></a>
                </div>
            </div>
            <?php
            if (isset($thongBao) && ($thongBao != "")) {
                echo $thongBao;
            }
            ?>
        </form>
    </div>
</div>