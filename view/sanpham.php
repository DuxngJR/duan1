<main>
    <div class="flex p-5 border bg-[#FDFDFD] px-10">
        <div class="flex items-center">
            <a href="#">Trang chủ</a>
            <img src="./view/img/arrow2-down.png" alt="">
        </div>
        <div class="flex items-center">
            <a href="#">Danh mục sản phẩm</a>
            <img src="./view/img/arrow2-down.png" alt="">
        </div>
    </div>
    <div class="flex justify-center my-20">
        <div class="w-[312px]">
            <table class="w-[312px]">
                <thead>
                    <tr>
                        <th class="text-[#003F62] text-left ">Thể loại</th>
                        <th class="text-[#595959] text-right font-medium lowercase"><a href="#" class="normal-case">Reset</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<tr class="">
                        <td class="text-left"><a href="' . $linkdm . '">' . $name . '</a></td>
                        <td class="text-right">' . $id . '</td>
                    </tr>';
                    }
                    ?>
                    <!-- <tr class="">
                        <td class="text-left">All categories</td>
                        <td class="text-right">10</td>
                    </tr> -->

                </tbody>
            </table>
        </div>
        <div class="grid grid-cols-3 gap-4 px-10">
            <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $filename = $img_path . $image;
                echo '<div class="border rounded-[20px] relative p-10">
            <img src="' . $filename . '" alt="">
            <img class="absolute top-5 right-5 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="' . $linksp . '" class="font-bold text-[#1B5A7D]">' . $name . '</a>
            <p>' . $price . '</p>
            <img src="./view/img/Frame 26.png" alt="">
        </div>';
            }
            ?>
            <!-- <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
            <div>
                <div>
                    <img src="./view/img/Frame 29.png" alt="">
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="#" class="text-[#003F62] font-bold">Wireless headphones</a>
                    <span>$11,70</span>
                    <img src="./view/img/Frame 26.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center relative">
        <img src="./view/img/pexels-nao-triponez-129208 1.png" alt="">
        <div class="absolute bottom-10 right-[200px] text-white m-10 text-center">
            <div>
                <a class="px-5 bg-[#EDA415] p-2 rounded-[20px]" href="#">New laptop</a>
            </div>
            <div class="m-10">
                <p class="font-bold text-[41px]">Sale up to 50% off</p>
                <p>12 inch hd display</p>
            </div>
            <div>
                <a class="px-5 bg-[#EDA415] p-2 rounded-[20px]" href="#">Shop now</a>
            </div>
        </div> -->
        </div>
</main>