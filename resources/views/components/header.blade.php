<header class="w-full">

    <div class="w-full max-w-screen-2xl mx-auto bg-white shadow-sm border-b border-gray-300">

        <div class="w-full flex justify-between items-center px-4">

            <div class="py-1 flex-shrink-0 border">
                <a href="{{ route('home') }}"><img class="h-14" src="{{ asset('images/logo.png') }}" alt="logo"></a>
            </div>

            <form class="hidden border border-gray-500 shrink items-center h-7" action="">
                <input class="h-full w-80 pl-1 focus:outline-none" type="text" name="search" id="search-input">
                <div class="h-full cursor-pointer px-1 grid place-items-center hover:bg-slate-200">
                    <span class="!text-xl material-symbols-outlined">
                        search
                    </span>
                </div>
            </form>

            <ul class="flex items-center text-sm text-gray-500 border">
                <li>
                    <a class="flex items-center px-2 hover:text-blue-900" href="">
                        <span class="material-symbols-outlined !text-xl">
                            login
                        </span>
                        <span>
                            Sign In
                        </span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center px-2 hover:text-blue-900" href="">
                        <span class="material-symbols-outlined !text-xl">
                            call
                        </span>
                        <span>
                            Contact Us
                        </span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center px-2 hover:text-blue-900" href="">
                        <span class="material-symbols-outlined !text-xl">
                            shopping_cart
                        </span>
                        <span>
                            Cart
                        </span>
                    </a>
                </li>
                <li id="mobile-menu-button" class="sm:hidden">
                    <a href="javascript:void(0)">
                        <span class="material-symbols-outlined !text-xl">
                            menu
                        </span>
                        <span class="material-symbols-outlined !text-xl">
                            close
                        </span>
                    </a>
                </li>
            </ul>

        </div>

        <div class="hidden sm:block">
            <ul class="flex text-sm text-slate-900">
                <li><a class="px-4 py-2 border-b-2 border-blue-900 inline-block hover:border-blue-900"
                        href="">Home</a></li>
                <li><a class="px-4 py-2 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">About Us</a></li>
                <li class="relative group">
                    <a class="flex items-center px-4 py-2 border-b-2 border-transparent hover:border-blue-900"
                        href="">
                        <span>Products</span>
                        <span
                            class="!leading-3 material-symbols-outlined transition duration-300 group-hover:rotate-180">
                            keyboard_arrow_down
                        </span>
                    </a>

                    <ul class="absolute left-0 bg-white flex flex-col min-w-40 shadow-sm invisible group-hover:visible">
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Repeaters</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps splitters</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Rackmount Splitters</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Amplifiers</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Antennas</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Attenuators</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Filters</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Coaxial Cables</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a class="flex items-center px-4 py-2 border-b-2 border-transparent hover:border-blue-900"
                        href="">
                        <span>Applications</span>
                        <span
                            class="!leading-3 material-symbols-outlined transition duration-300 group-hover:rotate-180">
                            keyboard_arrow_down
                        </span>
                    </a>

                    <ul class="absolute left-0 bg-white flex flex-col min-w-40 shadow-sm invisible group-hover:visible">
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Antennas</a></li>
                        <li class="w-full"><a
                                class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-slate-100"
                                href="">Gps Repeaters</a></li>
                    </ul>
                </li>
                <li><a class="px-4 py-2 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">Contact Us</a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="hidden sm:hidden py-2">
            <ul class="flex flex-col items-center text-sm text-slate-900">
                <li><a class="px-4 py-1 border-b-2 border-blue-900 inline-block hover:border-blue-900"
                        href="">Home</a></li>
                <li><a class="px-4 py-1 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">About Us</a></li>
                <li><a class="px-4 py-1 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">Products</a></li>
                <li><a class="px-4 py-1 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">Applications</a></li>
                <li><a class="px-4 py-1 border-b-2 border-transparent inline-block hover:border-blue-900"
                        href="">Contact Us</a></li>
                <li class="w-full px-4">
                    <form class="border border-gray-500 flex items-center h-7" action="">
                        <input class="h-full w-full pl-1 focus:outline-none" type="text" name="search"
                            id="search-input">
                        <div class="h-full cursor-pointer px-1 grid place-items-center hover:bg-slate-200">
                            <span class="!text-xl material-symbols-outlined">
                                search
                            </span>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>

</header>
