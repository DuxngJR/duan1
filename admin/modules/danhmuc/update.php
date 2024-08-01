<div class="container-fluid ">
    <h3>Cập nhật loại hàng hóa</h3>
</div>
<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="index.php?quanly=updatedm" method="post">
            <div class="control-group">
                <label class="control-label">Tên loại hàng hóa: </label>
                <div class="controls">
                    <input name="tenloai" type="text" value="<?= (isset($name) && ($name != "")) ? $name : "" ?>" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="id" value="<?= (isset($id) && ($id > 0)) ? $id : "" ?>">
                    <input type="submit" name="capnhat" value="cập nhật">
                    <a href="index.php?quanly=listdm"><input type="button" value="Danh sách"></a>
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