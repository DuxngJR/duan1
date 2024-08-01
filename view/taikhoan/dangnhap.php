<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto bg-[#003F62] p-2" src="./view/img/logo 1.png" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Đăng nhập tài khoản</h2>
    </div>
    <?php
    if (!isset($_SESSION['user'])) {
    ?>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="index.php?act=dangnhap" method="POST">
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Tên đăng nhập</label>
                    <div class="mt-2">
                        <input name="user" type="text" autocomplete="user" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mật khẩu</label>
                        <div class="text-sm">
                            <a href="index.php?act=quenmk" class="font-semibold text-indigo-600 hover:text-indigo-500">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input name="pass" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <input type="checkbox"> <span class="font-semibold text-indigo-600 text-[14px]">Ghi nhớ tài khoản</span>
                </div>

                <div>
                    <input type="submit" name="dangnhap" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" value="Đăng ký"></input>
                    <div class="text-center m-2">
                        <a href="index.php?act=dangky" class="font-semibold text-indigo-600 hover:text-indigo-500 underline ">Đăng ký tài khoản</a>
                    </div>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <p>Hello <?php echo $_SESSION['user']; ?></p>
        <p class="font-semibold text-indigo-600 hover:text-indigo-500">
            <?php
            if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
                echo '<a href="admin/index.php">Đăng nhập admin</a>';
            }
            ?>
        </p>

        <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
    <?php } ?>
</div>