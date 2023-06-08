<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="<?php echo e(asset('resources/Image/Logo.png')); ?>" class="w-7 h-7 object-center object-cover" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-dark">INBOX</span>
        </a>
        <div class="flex items-center md:order-2">
            <?php if(auth()->guard()->guest()): ?>
                <button type="button"
                    class="invisible lg:visible   text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 "><a
                        href="<?php echo e(route('login')); ?>">Masuk</a></button>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <a class="mr-4 text-neutral-500  md:flex relative hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                    href="<?php echo e(route('cart.index')); ?>">
                    <div class="text-sm absolute -right-2 -top-3 bg-rose-500 rounded-full px-2">
                        <?php echo e(Auth::user()->carts()->count()); ?>

                    </div>
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="grey"
                            style="height: 25px; width: 25px">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img src="<?php echo e(Auth::user()->avatar); ?>" loading="lazy" style="height: 25px; width: 25px"
                        class="avatar rounded-full" />
                </button>

                <!-- Dropdown menu -->

                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900"><?php echo e(Auth::user()->name); ?></span>
                        <span class="block text-sm  text-gray-500 truncate"><?php echo e(Auth::user()->email); ?></span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="<?php echo e(route('backoffice.dashboard')); ?>"
                                class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-400 hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>"
                                class="block px-4 py-2 text-sm text-red-700 hover:bg-red-500 hover:text-white"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>

            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg md:hidden hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-200 dark:text-blue-400 dark:hover:bg-blue-700 dark:focus:ring-blue-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-blue-800 md:dark:hover:text-blue-500 dark:border-blue-700">
                <li>
                    <a href="<?php echo e(route('home')); ?>"
                        class="block py-2 pl-3 pr-4 text-white md:text-gray-600 rounded hover:bg-gray-100  md:hover:text-blue-700 md:p-0 dark:text-gray md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                </li>
                <li>
                    <a href="<?php echo e(route('about-us')); ?>"
                        class="block py-2 pl-3 pr-4 text-white md:text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                </li>
                <li>
                    <a href="<?php echo e(route('product.index')); ?>"
                        class="block py-2 pl-3 pr-4 text-white md:text-gray-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 gray:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                    <li>
                        <button type="button"
                            class="md:hidden  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 "><a
                                href="<?php echo e(route('login')); ?>">Masuk</a></button>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/layouts/landing/partials/navbar.blade.php ENDPATH**/ ?>