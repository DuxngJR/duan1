<div class="container-fluid ">
    <h3>Danh sách bình luận</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>NỘI DUNG</th>
                <th>ID USER</th>
                <th>ID PRO</th>
                <th>NGÀY BÌNH LUẬN</th>
            </tr>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $description . '</td>
                                    <td>' . $user_id . '</td>
                                    <td>' . $product_id . '</td>
                                    <td>' . $ngaybl . '</td>
                    <td><a href="index.php?quanly=suabl&id=' . $id . '"><input type="button" value="Sửa"></a> | 
                     <a href="index.php?quanly=xoabl&id=' . $id . '"><input type="button" value="Xóa"></a></td>
                </tr>';
            }
            ?>
        </table>
    </div>
</div>