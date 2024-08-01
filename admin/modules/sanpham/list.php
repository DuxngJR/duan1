<div class="container-fluid ">
    <h3>Danh sách sản phẩm</h3>
</div>
<div class="widget-box">
    <div class="widget-title">
        <a href="index.php?quanly=addsp" class="btn btn-default">
            <i class="icon-plus"></i> Thêm mới hàng hóa
        </a>
    </div>
    <div class="widget-content nopadding">
        <form action="index.php?quanly=listsp" method="post">
            <input type="text" name="keyw">
            <select name="iddm" id="">
                <option value="0">Tất Cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value=' . $id . '>' . $name . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="LỌC">
        </form>
        <table class="table table-bordered table-striped">
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Tên hàng hóa</strong></td>
                <td><strong>Hình ảnh</strong></td>
                <td><strong>Giá</strong></td>
                <td><strong>Mô tả</strong></td>
            </tr>
            <?php
            foreach ($listsanpham as $products) {
                extract($products);
                if (is_file('../upload/' . $image)) {
                    $filename = "<img src='" . ('../upload/' . $image) . "' width='150'>";
                } else {
                    $filename = "no photo";
                }
                echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $filename . '</td>
                    <td>' . $price . '</td>
                    <td>' . $description . '</td>
                    <td><td><a href="index.php?quanly=suasp&id=' . $id . '"><input type="button" value="Sửa"></a> | 
                     <a href="index.php?quanly=xoasp&id=' . $id . '"><input type="button" value="Xóa"></a>
                </tr>';
            }
            ?>
        </table>
    </div>
</div>