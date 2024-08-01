<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto bg-[#003F62] p-2" src="./view/img/logo 1.png" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Quên mật khẩu</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="index.php?act=quenmk" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <input type="submit" name="quenmk" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 my-1" value="Gửi"></input>
                <div class="text-center m-2">
                    <a href="index.php?act=dangnhap" class="font-semibold text-indigo-600 hover:text-indigo-500 underline ">Quay lại đăng nhập</a>
                </div>
            </div>
        </form>
        <h2 class="mt-10 text-center text-2xl leading-9 tracking-tight text-gray-900">
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </h2>
    </div>
</div>