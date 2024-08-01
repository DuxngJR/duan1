<div class="container-fluid ">
    <h3>Thêm loại hàng hóa</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <form class="form-horizontal" action="index.php?quanly=adddm" method="post">
            <div class="control-group">
                <label class="control-label">Tên loại hàng hóa: </label>
                <div class="controls">
                    <input name="tenloai" type="text" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="them" value="Thêm mới" class="btn btn-default">
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