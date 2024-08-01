<div class="container-fluid ">
    <h3>Thêm sản phẩm</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="index.php?quanly=addsp" method="post" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label">Danh mục</label>
                <div class="controls">
                    <select name="iddm" id="">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value=' . $id . '>' . $name . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <label class="control-label">Tên sản phẩm: </label>
                <div class="controls">
                    <input name="tensp" type="text" />
                </div>
                <label class="control-label">Giá sản phẩm: </label>
                <div class="controls">
                    <input name="giasp" type="text" />
                </div>
                <label class="control-label">Hình ảnh: </label>
                <div class="controls">
                    <input type="file" name="image" id="">
                </div>
                <label class="control-label">Mô tả: </label>
                <div class="controls">
                    <input name="mota" type="text" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
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