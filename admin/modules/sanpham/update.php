<div class="container-fluid ">
    <h3>Cập nhật loại hàng hóa</h3>
</div>
<?php
if (is_array($sp)) {
    extract($sp);
}
if (is_file('../upload/' . $image)) {
    $filename = "<img src='" . ('../upload/' . $image) . "' width='150'>";
} else {
    $filename = "no photo";
}
?>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="index.php?quanly=updatesp" method="POST" enctype="multipart/form-data">
            <div class="control-group" style="width: 250px;">
                <label class="control-label"> Mã sản phẩm </label>
                <div>
                    <select name="iddm" id="" class="controls">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if ($iddm == $id)  echo '<option value="' . $id . '"' . (($sp['iddm'] == $id) ? "selected" : "") . '>' . $name . '</option>';
                            else echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                        echo $iddm;
                        ?>
                    </select>
                </div>
                <label class="control-label">Tên sản phẩm: </label>
                <div class="controls">
                    <input name="tensp" type="text" value="<?= $sp['name'] ?>" />
                </div>
                <label class="control-label">Giá sản phẩm: </label>
                <div class="controls">
                    <input name="giasp" type="text" value="<?= $sp['price'] ?>" />
                </div>
                <label class="control-label">Hình ảnh: </label>
                <div class="controls">
                    <input type="file" name="image" id=""><?= $filename ?>
                </div>
                <label class="control-label">Mô tả: </label>
                <div class="controls">
                    <input name="mota" type="text" value="<?= $sp['description'] ?>" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-default">
                    <a href="index.php?quanly=listsp"><input type="button" value="Danh sách"></a>
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