<main>
    <div class="flex p-5 border bg-[#FDFDFD] px-10">
        <div class="flex items-center">
            <a href="#">Home</a>
            <img src="./view/img/arrow2-down.png" alt="">
        </div>
        <div class="flex items-center">
            <a href="#">All category</a>
            <img src="./view/img/arrow2-down.png" alt="">
        </div>
    </div>
    <div class="m-10 flex justify-center gap-10">
        <div>
            <table class="table-auto w-[872px] ">
                <thead class="bg-[#E2F4FF] text-left">
                    <tr class="h-[56px]">
                        <th>ID</th>
                        <th class="px-5">Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $filename = $img_path . $cart[2];
                            $thanhtien = $cart[4] * $cart[3];
                            $tong += $cart[5];
                            $xoadh = '<a href="index.php?act=delcart&idcart=' . $i . '"><input tybe="submit" value="xóa" class="w-[30px]"></a>';
                            echo '
                                <tr>
                                    <td>' . $cart[0] . '</td>
                                    <td class="flex items-center w-[100px]">
                                        <img src="' . $filename . '" alt="">
                                    </td>
                                    <td>' . $cart[1] . '</td>
                                    <td>' . $cart[3] . '</td>
                                    <td>' . $cart[4] . '</td>
                                    <td>' . $cart[5] . '</td>
                                    <td>' . $xoadh . '</td>
                                </tr>';
                            $i += 1;
                        }
                    } else {
                        echo 'Giỏ hàng trống.';
                    }
                    ?>
                    <!-- <tr>
                        <td class="flex items-center">
                            <img src="./view/img/6456332_sd 12.png" alt="">
                            <div>
                                <p>Play game</p>
                                <p>Color: Green</p>
                                <p>Size: 30</p>
                            </div>
                        </td>
                        <td>$ 11,70</td>
                        <td>
                            <div class="border w-[100px] flex text-center">

                                <input type="text" class="w-[60px] text-center border" value="1" />

                            </div>
                        </td>
                        <td>
                            <div class="flex justify-between">$ 11,70 <a href="#" class="border-[1px] border-black px-2 rounded-full text-[13px]">x</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="flex items-center">
                            <img src="./view/img/Frame 143.png" alt="">
                            <div>
                                <p>Play game</p>
                                <p>Color: Black</p>
                                <p>Size: 30</p>
                            </div>
                        </td>
                        <td>$ 11,70</td>
                        <td>
                            <div class="border w-[100px] flex text-center">
                                <span class="w-[20px]">-</span>
                                <input type="text" class="w-[60px] text-center border" value="1" />
                                <span class="">+</span>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-between">$ 11,70 <a href="#" class="border-[1px] border-black px-2 rounded-full text-[13px]">x</a></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
            <div class="flex justify-center my-10">
                <a href="index.php" class="border bg-[#EDA415] mx-5 p-5 px-8 rounded-[20px] font-bold text-white text-[22px] hover:bg-[#003F62]">Tiếp tục mua sắm</a>
                <a href="index.php?act=delcart" class="border border-[#C33131] mx-10 p-5 px-8 rounded-[20px] font-bold text-[#C33131] text-[22px] hover:bg-[#003F62]">Xóa giỏ hàng</a>
            </div>
        </div>
        <div class="w-[424px] border grid grid-cols-1 gap-4">
            <h3 class="p-5 bg-[#E2F4FF] text-center font-bold">Thông tin giỏ hàng</h3>
            <div class="flex justify-center mx-10">
                <table>
                    <?php
                    foreach ($_SESSION['mycart'] as $cart) {
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
            <div class="border px-10 p-2 flex justify-between rounded-[20px] w-[333px] m-auto">
                <p>Dịa chỉ</p>
                <p><img src="./view/img/arrow-1-down.png" alt=""></p>
            </div>
            <div class="font-bold flex justify-between mx-10">

                <?php
                echo '<p>Tổng thu</p>
                <p>$ ' . $tong . '</p>';
                ?>

            </div>
            <a href="index.php?act=dathang" class="p-2 px-20 bg-[#EDA415] text-center m-auto font-bold text-white rounded-[20px] my-5 hover:bg-[#003F62]">Tiến hành kiểm tra</a>
        </div>
    </div>
</main>