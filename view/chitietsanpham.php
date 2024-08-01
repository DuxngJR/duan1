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
    <div class="grid grid-cols-2 gap-5">
        <?php
        extract($onesp);
        $filename = $img_path . $image;
        echo '<div>
            <img src="' . $filename . '" alt="" class="mx-10 my-5">
        </div>
        <div>
            <div class="py-2 my-5">
                <div class="text-[30px]">
                    <h3 class="font-bold text-[#003F62] py-1">' . $name . '</h3>
                    <p>' . $price . 'đ</p>
                </div>
                <div class="flex gap-1 items-center py-1">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                </div>
                <p class="py-1">' . $description . '</p>
            </div>
            <hr>
            <div class="p-2">
                <div class="flex items-center gap-2">
                    <h5>Dạng :</h5>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">Gói</a>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">Hộp</a>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">Thùng</a>
                </div>
                <div class="flex items-center my-3 gap-3">
                    <span>Số lượng :</span>
                    <div class="flex border border-[1px] border-[#828282] bg-[#EEEEEE]">
                        <span class="flex justify-center items-center px-2">-</span>
                        <input type="text" class="text-center bg-[#EEEEEE] w-[100px] border-[1px] border-[#828282]" value="1" />
                        <span class="flex justify-center items-center px-2">+</span>
                    </div>
                </div>
                <div class="flex items-center gap-5 my-5">
                <form action="index.php?act=giohang" method="post">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="image" value="' . $image . '">
                    <input type="hidden" name="price" value="' . $price . '">
                    <input type="submit" name="giohang" value="Thêm vào giỏ hàng" class="bg-[#EDA415] px-10 py-4
                            rounded-[20px] text-white">
                </form>
                    <a href="#" class="bg-[#EDA415] px-10 py-4
                            rounded-[20px] text-white">MUA NGAY</a>
                    <img src="./view/img/heart-1.png" alt="" class="border p-4 rounded-full border-[1px] bg-[#EEEEEE] border-black">
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-1 gap-5 my-5">
                <p>Mã hàng: ' . $id . '</p>
                Loại: Bánh quy
                <div class="flex gap-5">
                    <p>Share:</p>
                    <a href="#" class=""><img src="./view/img/google.png" alt="" class="mr-5"></a>
                    <a href="#" class=""><img src="./view/img/facebook.png" alt="" class="mr-5"></a>
                    <a href="#" class=""><img src="./view/img/whatsapp.png" alt="" class="mr-5"></a>
                </div>
            </div>
        </div>';
        ?>
        <!-- <div>
            <img src="./view/img/6456332_sd 1.png" alt="" class="mx-10 my-5">
        </div>
        <div>
            <div class="py-2 my-5">
                <div class="text-[30px]">
                    <h3 class="font-bold text-[#003F62]">Play game</h3>
                    <p>$11,70</p>
                </div>
                <div class="flex gap-1 items-center">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <img src="./view/img/star.png" alt="">
                    <p>No reviews</p>
                </div>
                <div class="flex py-2">
                    <h5>Availability:</h5>
                    <img src="./view/img/Vector.png" alt="" class="px-2">
                    <p class="text-[#30BD57]">In stock</p>
                </div>
                <p>Hurry up! only 34 product left in stock!</p>
            </div>
            <hr>
            <div class="p-2">
                <div class="flex gap-3 my-2">
                    <h5>Color :</h5>
                    <img src="./view/img/Frame 132.png" alt="">
                </div>
                <div class="flex items-center gap-2">
                    <h5>Size :</h5>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">30</a>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">32</a>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">34</a>
                    <a href="#" class="border px-3 rounded-lg hover:border-slate-500">36</a>
                </div>
                <div class="flex items-center my-3 gap-3">
                    <span>Quantity :</span>
                    <div class="flex border border-[1px] border-[#828282] bg-[#EEEEEE]">
                        <span class="flex justify-center items-center px-2">-</span>
                        <input type="text" class="text-center bg-[#EEEEEE] w-[100px] border-[1px] border-[#828282]" value="1" />
                        <span class="flex justify-center items-center px-2">+</span>
                    </div>
                </div>
                <div class="flex items-center gap-5 my-5">
                    <a href="#" class="bg-[#EDA415] px-10 py-4
                            rounded-[20px] text-white">Add to cart</a>
                    <a href="#" class="bg-[#EDA415] px-10 py-4
                            rounded-[20px] text-white">Buy it now</a>
                    <img src="./view/img/heart-1.png" alt="" class="border p-4 rounded-full border-[1px] bg-[#EEEEEE] border-black">
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-1 gap-5 my-5">
                <p>Sku: 01133-9-9</p>
                Category:
                20% off,
                49% off
                Alex remote
                <div class="flex gap-5">
                    <p>Share:</p>
                    <img src="./view/img/google.png" alt="" class="mr-5">
                    <img src="./view/img/facebook.png" alt="" class="mr-5">
                    <img src="./view/img/whatsapp.png" alt="" class="mr-5">
                </div>
            </div>
        </div> -->
    </div>
    <div class="flex justify-center gap-5 my-10">
        <a href="#" class="border-black border p-5 w-[187px] text-center
                rounded-[20px] text-[#373737]">Miêu tả</a>
        <a href="#" class="bg-[#373737]  border-[#373737] border p-5 w-[187px] text-center
                rounded-[20px] text-white">Đánh giá</a>
    </div>
    <div class="flex justify-center">
        <div class="border-[#373737] border w-[1314px] p-10 rounded-[20px]">
            <h3 class="font-bold text-[#003F62]">Phản hồi khách hàng</h3>
            <table class="table">
                <?php foreach ($binhluan as $value) { ?>
                    <tr>
                        <td class="px-5"><?php echo $value['description'] ?></td>
                        <td class="px-5"><?php echo $value['name'] ?></td>
                        <td class="px-5"><?php echo date("d/m/Y") ?></td>
                    </tr>
                <?php }; ?>
            </table>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?= $id ?>" method="POST">
                    <input type="hidden" name="product_id" value="<?= $id ?>">
                    <textarea name="description" rows="4" cols="50" class="bg-[#EEEEEE] border-[1px] border-[#828282]">.</textarea>
                    <input type="submit" name="guibinhluan" value="Gửi bình luận" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                </form>
            </div>
            <!-- <p class="my-5">Chưa có bình luận nào</p> -->
            <!-- <a href="#" class="px-5 py-2 border bg-[#003F62] text-white underline">Viết đánh giá</a> -->
        </div>
    </div>
    <h1 class="text-[#003F62] text-[28px] font-bold my-10">Sản phẩm liên quan</h1>
    <div class="grid grid-cols-4 gap-4 ">
        chưa có sản phẩm nào
        <!-- <div class="1 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <div class="flex my-5">
                <div class="flex items-center bg-[#87BCD9] p-2 rounded-[20px]">
                    <a class="font-bold px-5" href="#">Add to cart</a>
                    <img src="./view/img/shopping-cart.png" alt="" class="bg-[#EDA415] p-1 rounded-full">
                </div>
                <div class="bg-[#87BCD9] p-2 mx-5 rounded-[20px]">
                    <img src="./view/img/eye.png" alt="">
                </div>
            </div>
        </div>
        <div class="2 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="#" class="font-bold text-[#1B5A7D]">Camera</a>
            <p>$11,70</p>
            <img src="./view/img/Frame 26.png" alt="">
        </div>
        <div class="3 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="#" class="font-bold text-[#1B5A7D]">Camera</a>
            <p>$11,70</p>
            <img src="./view/img/Frame 26.png" alt="">
        </div>
        <div class="4 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="#" class="font-bold text-[#1B5A7D]">Camera</a>
            <p>$11,70</p>
            <img src="./view/img/Frame 26.png" alt="">
        </div> -->
    </div>
</main>