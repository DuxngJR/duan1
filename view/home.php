<main>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./view/img/banner2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./view/img/banner3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="flex gap-10 text-[#1B5A7D] m-10">
        <?php
        foreach ($dsyeuthich as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $filename = $img_path . $image;
            echo '<div class="border flex items-center rounded-[20px] px-10">
            <div>
                <img src="' . $filename . '" alt="">
            </div>
            <div class="px-10">
                <a href="' . $linksp . '" class="font-bold ">' . $name . '</a>
                <p>sản phẩm yêu thích</p>
            </div>
        </div>';
        }
        ?>
        <!-- <div class="border flex items-center w-[381.63px] h-[147px] rounded-[20px] px-10">
            <div>
                <img src="./view/img/2 1.png" alt="">
            </div>
            <div class="px-10">
                <h3 class="font-bold">Speaker</h3>
                <p>(6 items)</p>
            </div>
        </div>
        <div class="border flex items-center  w-[381.63px] h-[147px] rounded-[20px] px-10">
            <div>
                <img src="./view/img/5 1.png" alt="">
            </div>
            <div class="px-10">
                <h3 class="font-bold">Desktop & laptop</h3>
                <p>(6 items)</p>
            </div>
        </div>
        <div class="border flex items-center  w-[381.63px] h-[147px] rounded-[20px] px-10">
            <div>
                <img src="./view/img/8 1-1.png" alt="">
            </div>
            <div class="px-10">
                <h3 class="font-bold">DSLR camera</h3>
                <p>(6 items)</p>
            </div>
        </div> -->
    </div>
    <div class="flex justify-between text-[#1B5A7D] m-10">
        <div class="font-bold text-[28px]">
            <h1>Sản phẩm phổ biến</h1>
        </div>
        <div>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<a href="' . $linkdm . '" class="p-2 border rounded-[20px] hover:border-[#1B5A7D] ">' . $name . '</a>';
            }
            ?>
            <!-- <a href="#" class="p-2 border rounded-[20px] hover:border-[#1B5A7D] ">Cameras</a>
            <a href="#" class="p-2 border rounded-[20px] hover:border-[#1B5A7D] ">Laptops</a>
            <a href="#" class="p-2 border rounded-[20px] hover:border-[#1B5A7D] ">Tablets</a>
            <a href="#" class="p-2 border rounded-[20px] hover:border-[#1B5A7D] ">Mouse</a> -->
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 ">
        <?php
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $filename = $img_path . $image;
            echo '<div class="border rounded-[20px] relative p-10">
            <img src="' . $filename . '" alt="">
            <img class="absolute top-5 right-5 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="' . $linksp . '" class="font-bold text-[#1B5A7D]">' . $name . '</a>
            <p>' . $price . '</p>
            <img src="./view/img/Frame 26.png" alt="">
            <form action="index.php?act=giohang" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="image" value="' . $image . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="giohang" value="Thêm vào giỏ hàng" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 my-1">
            </form>
        </div>';
        }
        ?>
        <!-- 
        <div class="2 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="#" class="font-bold text-[#1B5A7D]">Camera</a>
            <p>$11,70</p>
            <img src="./view/img/Frame 26.png" alt="">
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
        </div>
        <div class="3 border rounded-[20px] relative p-10">
            <img src="./view/img/camera 1.png" alt="">
            <img class="absolute top-5 right-10 bg-[#B3D4E5] p-2 rounded-full" src="./view/img/heart-1.png" alt="">
            <a href="#" class="font-bold text-[#1B5A7D]">Camera</a>
            <p>$11,70</p>
            <img src="./view/img/Frame 26.png" alt="">
        </div> -->
    </div>
    <div class="flex justify-center p-10">
        <img src="./view/img/Frame 14.png" alt="">
    </div>
    <div class="flex justify-center relative ">
        <img src="./view/img/banner5.jpg" alt="" class="w-[1315px] h-[417px]">
        <div class="absolute bottom-10 right-[200px] text-white m-10 text-center">
            <div>
                <a class="px-5 bg-[#EDA415] p-2 rounded-[20px]" href="#">Hàng mới</a>
            </div>
            <div class="m-10">
                <p class="font-bold text-[41px]">Giảm giá tới 10%</p>
                <p>Các loại bánh Quy</p>
            </div>
            <div>
                <a class="px-5 bg-[#EDA415] p-2 rounded-[20px]" href="#">Mua sắm ngay bây giờ</a>
            </div>
        </div>
    </div>
    <div class="flex justify-between m-10 text-[#1B5A7D]">
        <h3 class="font-bold text-[26px]">Tin mới nhất</h3>
        <p class="text[20px]">Xem tất cả</p>
    </div>
    <div class="flex justify-center gap-3">
        <div class="flex items-center border rounded-[20px] p-10">
            <img src="./view/img/Blog-1_540x490_crop_center 1.png" alt="">
            <div class="m-10 text-[#1B5A7D]">
                <div>
                    <a class="border rounded-[20px] p-1 px-3" href="#">22,oct,2021</a>
                </div>
                <div>
                    <a href="#" class="font-bold text-[22px]">Who avoids a <br>
                        pain that produces?</a>
                    <p class="my-5">Lorem ipsum dolor sit amet consectetur. Nec sit enim tell
                        us faucibus bibendum ullamcorper.
                        Phasellus tristique aenean at lorem sed scelerisque.</p>
                </div>
                <div><span>By spacing tech</span></div>
            </div>
        </div>
        <div class="flex items-center border rounded-[20px] p-10">
            <img src="./view/img/Blog-2_540x490_crop_center 1.png" alt="">
            <div class="m-10 text-[#1B5A7D]">
                <div>
                    <a class="border rounded-[20px] p-1 px-3" href="#">22,oct,2021</a>
                </div>
                <div>
                    <a href="#" class="font-bold text-[22px]">Who avoids a <br>
                        pain that produces?</a>
                    <p class="my-5">Lorem ipsum dolor sit amet consectetur. Nec sit enim tell
                        us faucibus bibendum ullamcorper.
                        Phasellus tristique aenean at lorem sed scelerisque.</p>
                </div>
                <div><span>By spacing tech</span></div>
            </div>
        </div>
    </div>
    <div class="flex justify-center m-10">
        <img src="./view/img/Frame 76.png" alt="">
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</main>