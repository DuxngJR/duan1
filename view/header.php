<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="max-w-[1440px] mx-auto">
    <header>
        <div class="flex justify-between m-5 px-5">
            <div>
                <p>Need help? Call us: (+98) 0234 456 789</p>
            </div>
            <div class="flex gap-5">
                <div class=" flex gap-3">
                    <a href="#" class="flex gap-3"><img src="./view/img/location.png" alt="">
                        Bắc Từ Niêm, Hà Nội</a>
                </div>
            </div>
        </div>
        <div class="bg-[#003F62] h-[100px] flex items-center gap-10 px-10 relative">
            <div>
                <img src="./view/img/logo 1.png" alt="">
            </div>
            <form class="relative" action="index.php?act=sanpham" method="POST">
                <input type="text" name="keyword" class="w-[438px] h-[56px] px-5 rounded-lg text-black" placeholder="Tìm kiếm ở đây">
                <!-- <input type="submit" name="timkiem" class="absolute top-0 right-0 bg-[#EDA415] h-[56px] px-10 rounded-lg text-white" value="Tìm kiếm"></input> -->
            </form>
            <div class="absolute right-10 flex gap-4 text-white">
                <a href="index.php?act=dangnhap" class="flex gap-3">
                    <img src="./view/img/user.png" alt="">
                    <p>Đăng nhập</p>
                </a>
                <a href="index.php?act=dangky" class="flex gap-3">
                    <img src="./view/img/heart.png" alt="">
                    <p>Đăng ký</p>
                </a>
                <a href="index.php?act=giohang" class="flex gap-3">
                    <img src="./view/img/shopping-cart.png" alt="">
                    <p>Giỏ Hàng</p>
                </a>
            </div>
        </div>
        <div class="h-[71px] bg-[#F4F4F4] px-10 flex gap-10 items-center relative">
            <div class="bg-[#EDA415] p-6 mr-10 text-white">
                <a href="#" class="flex">Danh mục sản phẩm <img src="./view/img/arrow-down.png" alt=""></a>
            </div>
            <nav>
                <ul class="flex gap-4">
                    <li><a href="index.php" class="flex gap-2 hover:text-[#EDA415]">Trang chủ</a></li>
                    <li><a href="index.php?act=gioithieu" class="flex gap-2 hover:text-[#EDA415]">Giới thiệu</a></li>
                    <li><a href="index.php?act=tintuc" class="flex gap-2 hover:text-[#EDA415]">Tin tức</a></li>
                    <li><a href="index.php?act=sanpham" class="flex gap-2 hover:text-[#EDA415]">Sản phẩm</a></li>
                    <li><a href="index.php?act=lienhe" class="flex gap-2 hover:text-[#EDA415]">Liên hệ</a></li>
                </ul>
            </nav>
            <div class="absolute right-10 text-[#003F62] font-bold">
            </div>
        </div>
    </header>