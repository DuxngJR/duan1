<div class="border grid grid-cols-1 gap-4">
    <h3 class="p-5 bg-[#E2F4FF] font-bold text-[25px]">Thông tin đặt hàng</h3>
    <div class="m-auto">
        <table class="w-[400px] m-auto">
            <?php
            if (isset($_SESSION['users'])) {
                $name = $_SESSION['users']['name'];
                $address = $_SESSION['users']['address'];
                $email = $_SESSION['users']['email'];
                $number = $_SESSION['users']['number'];
            } else {
                $name = "";
                $address = "";
                $email = "";
                $number = "";
            }
            ?>
            <tr>
                <td class="pr-2">Người đặt hàng:</td>
                <td><input type="text" name="name" placeholder="nhập họ và tên" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="arrdess" placeholder="nhập địa chỉ" value="<?php echo $address ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="nhập Email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="text" name="number" placeholder="nhập số điện thoại" value="<?php echo $number ?>"></td>
            </tr>

        </table>
    </div>
</div>
</div>
<div class="border grid grid-cols-1 gap-4">
    <h3 class="p-5 bg-[#E2F4FF] font-bold text-[25px]">Thông tin giỏ hàng</h3>
    <div class="flex justify-center mx-10">
        <table>
            <?php
             $tong = 0;
             if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                foreach ($_SESSION['mycart'] as $cart) {
                    $thanhtien = $cart[3] * $cart[4];
                    $tong += $thanhtien;
                    echo '
                        <tbody>
                            <tr>
                                <td class="p-2">' . $cart[0] . '</td>
                                <td class="p-2">' . $cart[1] . '</td>
                                <td class="p-2">' . $cart[4] . '</td>
                                <td class="p-2">' . $cart[3] . '</td>
                            </tr>
                        </tbody>
                        ';
                }
            }
            ?>
        </table>
    </div>
    <hr class="w-[333px] m-auto my-3">
    <div class="border px-5 py-3 flex justify-between rounded-[20px] w-[333px] m-auto">
        <input type="text" placeholder="Nhập mã phiếu giảm giá">
        <div class="font-semibold bg-[#003F62] p-1 px-2 rounded-[20px] hover:text-[#EDA415] text-white">
            <p>Áp dụng</p>
        </div>
    </div>
    <hr class="w-[333px] m-auto my-3">
    <div class="font-bold flex justify-between mx-10">

    <?php
                echo '<p>Tổng thu</p>
                <p>$ ' . $tong . '</p>';
                ?>
    </div>
    <a href="#" class="p-2 px-20 bg-[#EDA415] text-center m-auto font-bold text-white rounded-[20px] my-5 hover:bg-[#003F62]">Tiến hành kiểm tra</a>
</div>
</div>