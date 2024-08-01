<div class="container-fluid ">
    <h3>Danh sách tài khoản</h3>
</div>
<div class="widget-box">
    <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
            <tr>
                <th>MÃ TÀI KHOẢN</th>
                <th>TÊN TÀI KHOẢN</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>SDT</th>
                <th>vai trò</th>
                <td colspan="2"><strong>Quản lý</strong></td>
            </tr>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $password . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $address . '</td>
                                    <td>' . $number . '</td>
                                    <td>' . $role . '</td>
                    <td><a href="index.php?quanly=suatk&id=' . $id . '"><input type="button" value="Sửa"></a> | 
                     <a href="index.php?quanly=xoatk&id=' . $id . '"><input type="button" value="Xóa"></a></td>
                </tr>';
            }
            ?>
        </table>
    </div>
</div>