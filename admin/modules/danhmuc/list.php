<div class="container-fluid ">
    <h3>Danh sách hang hóa</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=adddm" class="btn btn-default">
            <i class="icon-plus"></i> Thêm mới hàng hóa
        </a>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Tên hàng hóa</strong></td>
                <td><strong>Quản lý</strong></td>
            </tr>
            <?php
            foreach ($listdanhmuc as $categorypro) {
                extract($categorypro);
                echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td><a href="index.php?quanly=suadm&id=' . $id . '"><input type="button" value="Sửa"></a> | 
                     <a href="index.php?quanly=xoadm&id=' . $id . '"><input type="button" value="Xóa"></a><td>
                </tr>';
            }
            ?>
        </table>
    </div>
</div>