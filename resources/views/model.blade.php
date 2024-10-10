<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="bg-slate-100">
    
    <header class="w-full">

        <div class="w-full bg-white shadow-sm border-b border-gray-500">

            <div class="w-full flex justify-between items-center px-4">

                {{-- Header Left Logo --}}
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img class="h-14"
                            src="https://gpssource.co.in/wp-content/uploads/GPS_Repeater_Tech_Logo-1.jpg"
                            alt="logo">
                    </a>
                </div>

                {{-- Desktop Search Bar --}}
                <div class="px-2">
                    <form
                        class="hidden sm:flex h-7 max-w-64 lg:max-w-96 items-center border border-gray-700 shrink placeholder:text-gray-500"
                        action="">
                        <input class="h-full w-80 pl-1 focus:outline-none" placeholder="Search 'repeater kits'"
                            type="text" name="search" id="search-input">
                        <button class="h-full px-1 grid place-items-center hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#000000">
                                <path
                                    d="M779.38-153.85 528.92-404.31q-30 25.54-69 39.54t-78.38 14q-96.1 0-162.67-66.53-66.56-66.53-66.56-162.57 0-96.05 66.53-162.71 66.53-66.65 162.57-66.65 96.05 0 162.71 66.56Q610.77-676.1 610.77-580q0 41.69-14.77 80.69t-38.77 66.69l250.46 250.47-28.31 28.3ZM381.54-390.77q79.61 0 134.42-54.81 54.81-54.8 54.81-134.42 0-79.62-54.81-134.42-54.81-54.81-134.42-54.81-79.62 0-134.42 54.81-54.81 54.8-54.81 134.42 0 79.62 54.81 134.42 54.8 54.81 134.42 54.81Z" />
                            </svg>
                        </button>
                    </form>
                </div>

                {{-- Header Right Links --}}
                <ul class="flex items-center text-sm font-medium text-blue-800">
                    <li>
                        <a class="flex items-center p-2 border-b-2 border-transparent hover:bg-gray-50 hover:border-blue-900"
                            href="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#236 ">
                                <path
                                    d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z" />
                            </svg>
                            <span class="hidden md:block whitespace-nowrap">
                                Sign In
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 border-b-2 border-transparent hover:bg-gray-50 hover:border-blue-900"
                            href="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#236 ">
                                <path
                                    d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                            </svg>
                            <span class="hidden md:block whitespace-nowrap">
                                Contact Us
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 border-b-2 border-transparent hover:bg-gray-50 hover:border-blue-900"
                            href="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#236 ">
                                <path
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                            </svg>
                            <span class="hidden md:block whitespace-nowrap">
                                Cart
                            </span>
                        </a>
                    </li>
                    <li id="mobile-menu-button" class="sm:hidden">
                        <a class="flex items-center p-2 border-b-2 border-transparent hover:bg-gray-50 hover:border-blue-900"
                            href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#236">
                                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                            </svg>
                            <svg class="!hidden" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#236">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="hidden sm:block w-full font-medium text-blue-800">
                <ul class="flex text-sm">

                    <li>
                        <a class="px-4 py-2 border-b-2 border-blue-900 inline-block hover:border-blue-900 hover:bg-gray-50"
                            href="">
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="px-4 py-2 border-b-2 border-transparent inline-block hover:border-blue-900 hover:bg-gray-50"
                            href="">
                            About Us
                        </a>
                    </li>

                    <li class="relative group">
                        <button
                            class="px-4 py-2 flex items-center border-b-2 border-transparent hover:border-blue-900 hover:bg-gray-50">
                            <span>Products</span>
                            <span
                                class="!leading-3 transition duration-300 group-hover:rotate-180 material-symbols-outlined">
                                keyboard_arrow_down
                            </span>
                        </button>

                        <ul
                            class="grid grid-cols-2 absolute z-10 min-w-[500px] bg-white shadow-sm border-b border-gray-300 invisible group-hover:visible">
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    APNT Products
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Repeater Kits
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Repeater Assemblies
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Military Qualified Splitters
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Splitters
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Rack Mount Splitters
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Amplifiers
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Antennas
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Military Ruggedized Antenna
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Antenna Hoods
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS/GNSS Attenuators
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    GPS Filters
                                </a>
                            </li>
                            <li class="w-full border-r border-gray-300">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Coax Cables
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    RF GPS Components
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative group">
                        <button
                            class="px-4 py-2 flex items-center border-b-2 border-transparent hover:border-blue-900 hover:bg-gray-50">
                            <span>Applications</span>
                            <span
                                class="!leading-3 transition duration-300 group-hover:rotate-180 material-symbols-outlined">
                                keyboard_arrow_down
                            </span>
                        </button>

                        <ul
                            class="grid grid-cols-1 absolute z-10 min-w-[300px] bg-white shadow-sm border-b border-gray-300 invisible group-hover:visible">
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Assured PNT Solutions
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Wireless & Telecomm GPS Solutions
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Special Operations GPS Solutions
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Timing & Synchronization Solutions
                                </a>
                            </li>
                            <li class="w-full">
                                <a class="w-full px-4 py-2 border-b-2 border-transparent inline-block hover:bg-gray-50"
                                    href="">
                                    Aviation GPS Solutions
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="px-4 py-2 border-b-2 border-transparent inline-block hover:border-blue-900 hover:bg-gray-50"
                            href="">
                            Careers
                        </a>
                    </li>

                    <li>
                        <a class="px-4 py-2 border-b-2 border-transparent inline-block hover:border-blue-900 hover:bg-gray-50"
                            href="">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>

        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu"
            class="sm:hidden absolute z-10 h-lvh -translate-x-full bg-white w-full max-w-sm transition duration-300 text-sm">

            {{-- Mobile Search Bar --}}
            <div class="w-full px-4 py-2">
                <form class="h-7 w-full flex items-center border border-gray-700 shrink placeholder:text-gray-500"
                    action="">
                    <input class="h-full w-full pl-1 focus:outline-none" placeholder="Search 'APNT Products'"
                        type="text" name="search" id="search-input">
                    <button class="h-full px-1 grid place-items-center hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                            width="24px" fill="#000000">
                            <path
                                d="M779.38-153.85 528.92-404.31q-30 25.54-69 39.54t-78.38 14q-96.1 0-162.67-66.53-66.56-66.53-66.56-162.57 0-96.05 66.53-162.71 66.53-66.65 162.57-66.65 96.05 0 162.71 66.56Q610.77-676.1 610.77-580q0 41.69-14.77 80.69t-38.77 66.69l250.46 250.47-28.31 28.3ZM381.54-390.77q79.61 0 134.42-54.81 54.81-54.8 54.81-134.42 0-79.62-54.81-134.42-54.81-54.81-134.42-54.81-79.62 0-134.42 54.81-54.81 54.8-54.81 134.42 0 79.62 54.81 134.42 54.8 54.81 134.42 54.81Z" />
                        </svg>
                    </button>
                </form>
            </div>

            {{-- Mobile Menu Links --}}
            <ul class="w-full font-medium">
                <li class="w-full">
                    <a class="w-full px-4 py-1 inline-block hover:bg-gray-100" href="">
                        Home
                    </a>
                </li>
                <li class="w-full">
                    <a class="w-full px-4 py-1 inline-block hover:bg-gray-100" href="">
                        About Us
                    </a>
                </li>
                <li class="w-full">
                    <button id="mobile-products-button"
                        class="w-full flex items-center justify-between px-4 py-1 hover:bg-gray-100">
                        <span>Products</span>
                        <span
                            class="-rotate-90 transition-all duration-300 !text-xl !leading-3 material-symbols-outlined">
                            keyboard_arrow_down
                        </span>
                    </button>
                    <ul id="mobile-products-menu" class="hidden">
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                APNT Products
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Repeater Kits
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Repeater Assemblies
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Military Qualified Splitters
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                GPS/GNSS Splitters
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                GPS/GNSS Rack Mount Splitters
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                GPS/GNSS Amplifiers
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                GPS/GNSS Antennas
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="w-full">
                    <button id="mobile-applications-button"
                        class="w-full flex items-center justify-between px-4 py-1 hover:bg-gray-100">
                        <span>Applications</span>
                        <span
                            class="-rotate-90 transition-all duration-300 !leading-3 !text-xl material-symbols-outlined">
                            keyboard_arrow_down
                        </span>
                    </button>
                    <ul id="mobile-applications-menu" class="hidden">
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Applications-1
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Applications-2
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="w-full px-5 py-1 inline-block hover:bg-gray-100" href="">
                                Applications-3
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="w-full">
                    <a class="w-full px-4 py-1 inline-block hover:bg-gray-100" href="">
                        Contact Us
                    </a>
                </li>
            </ul>

        </div>

    </header>

    <div id="carousel-slides" class="carousel-slide relative w-full h-64">
        <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/slide1.png') }}')">
            <div class="absolute inset-0 bg-black bg-opacity-40 p-2 md:p-8 grid md:grid-cols-2">
                <div class="text-white px-4 py-2 grid place-content-center bg-black bg-opacity-60">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-3xl text-center md:text-4xl font-medium select-none">Assured PNT Solutions</h1>
                        <p class="text-lg text-center leading-relaxed select-none">
                            Global Positioning System (GPS) technology has become an integral part of Mission Command
                            systems and military ground vehicle architectures.
                        </p>
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-medium py-2 px-4">
                            <a href="">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/slide2.png') }}')">
            <div class="absolute inset-0 bg-black bg-opacity-40 p-2 md:p-8 grid md:grid-cols-2">
                <div class="text-white px-4 py-2 grid place-content-center bg-black bg-opacity-60">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-3xl text-center md:text-4xl font-medium select-none">Special Operations GPS
                            Solutions</h1>
                        <p class="text-lg text-center leading-relaxed select-none">
                            GLI-Cobra and GLI-Viper are portable GPS repeater kits designed to maintain GPS signal
                            availability inside of an aircraft or ground vehicles.
                        </p>
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-medium py-2 px-4">
                            <a href="">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide absolute top-0 left-0 w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/slide3.jpg') }}')">
            <div class="absolute inset-0 bg-black bg-opacity-40 p-2 md:p-8 grid md:grid-cols-2">
                <div class="text-white px-4 py-2 grid place-content-center bg-black bg-opacity-60">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-3xl text-center md:text-4xl font-medium select-none">Aviation GPS Solutions
                        </h1>
                        <p class="text-lg text-center leading-relaxed select-none">
                            Experience wireless GPS coverage within any military aircraft utilizing a GPS Retransmission
                            Kit.
                        </p>
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-medium py-2 px-4">
                            <a href="">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-4 flex flex-col gap-4 lg:flex-row">
        {{-- sidebar --}}
        <div id="sidebar" class="lg:w-64 lg:flex-shrink-0 w-full lg:h-screen">
            <div class="flex-1 lg:col-span-full bg-white shadow-lg">
                <h2 class="text-xl font-normal px-4 py-1 bg-blue-900 text-white">All Products</h2>
                <ul class="grid grid-cols-1 text-sm text-blue-800 sm:grid-cols-2 lg:grid-cols-1">
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            APNT Products
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            Repeater Kits
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">Gps
                            Repeater Assemblies
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            RF GPS Components
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            Coax Cables
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS Filters
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Attenuators
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Military Ruggedized Antennas
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Antennas
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Military Ruggedized Antennas
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Antenna Hoods
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Rack Mount Splitters
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Amplifiers
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            GPS/GNSS Splitters
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 py-1 w-full inline-block border-l-2 border-transparent hover:bg-gray-50 hover:border-blue-900">
                            Military Qualified Splitters
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        {{-- content --}}
        <div id="content" class="flex-1 bg-white px-4 text-blue-800 text-sm">
            <div class="py-4">
                <h1 class="text-3xl font-medium mb-2">Enhanced D3 M-Code PNT Distribution Hub (ED3M)</h1>
                <p>
                </p>
            </div>

            <div class="md:grid grid-cols-7 gap-4">
                <div class="col-span-3 order-2 md:order-1">
                    <div class="overflow-hidden">

                        <div class="slideshow-container p-2 w-full border shadow-sm">

                            <div class="relative slideshow flex overflow-hidden p-16">
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        src="https://www.gpssource.com/cdn/shop/products/ED3_front_9bb4f8a7-9e30-4db6-825c-f898758383f4_medium.jpg?v=1556740880"
                                        alt="Product 1">
                                </div>
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        src="https://www.gpssource.com/cdn/shop/products/SENTRySCOUT2_16b40245-4b86-43d1-aaec-14de701e093a_medium.jpg?v=1556740789"
                                        alt="Product 2">
                                </div>
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        src="https://www.gpssource.com/cdn/shop/products/vcam_clr_2_medium.jpg?v=1556741787"
                                        alt="Product 3">
                                </div>
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img src="https://www.gpssource.com/cdn/shop/files/MRPA-3A-Horizon-Nulling-Active-Antenna-Bottom-Mount_medium.jpg?v=1697636661"
                                        alt="Product 4" class="w-full h-full object-cover">
                                </div>
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        src="https://www.gpssource.com/cdn/shop/products/SENTRySCOUT2_16b40245-4b86-43d1-aaec-14de701e093a_medium.jpg?v=1556740789"
                                        alt="Product 2">
                                </div>
                                <div class="slideshow-item w-full flex-shrink-0">
                                    <img class="w-full h-full object-cover"
                                        src="https://www.gpssource.com/cdn/shop/products/vcam_clr_2_medium.jpg?v=1556741787"
                                        alt="Product 3">
                                </div>
                                <!-- Next and previous buttons -->
                                <a
                                    class="prev absolute top-1/2 left-0 cursor-pointer select-none transform -translate-y-1/2 p-2 bg-gray-50 hover:bg-gray-100">&#10094;</a>
                                <a
                                    class="next absolute top-1/2 right-0 cursor-pointer select-none transform -translate-y-1/2 p-2 bg-gray-50 hover:bg-gray-100">&#10095;</a>
                            </div>

                            <div class="thumbnail-container flex justify-start flex-wrap">
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/products/ED3_front_9bb4f8a7-9e30-4db6-825c-f898758383f4_medium.jpg?v=1556740880"
                                        alt="Product 1">
                                </div>
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/products/SENTRySCOUT2_16b40245-4b86-43d1-aaec-14de701e093a_medium.jpg?v=1556740789"
                                        alt="Product 2">
                                </div>
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/products/vcam_clr_2_medium.jpg?v=1556741787"
                                        alt="Product 3">
                                </div>
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/files/MRPA-3A-Horizon-Nulling-Active-Antenna-Bottom-Mount_medium.jpg?v=1697636661"
                                        alt="Product 4">
                                </div>
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/products/SENTRySCOUT2_16b40245-4b86-43d1-aaec-14de701e093a_medium.jpg?v=1556740789"
                                        alt="Product 2">
                                </div>
                                <div class="thumbnail-item w-1/5 p-1 cursor-pointer hover:!opacity-100">
                                    <img class="w-full h-16 object-contain"
                                        src="https://www.gpssource.com/cdn/shop/products/vcam_clr_2_medium.jpg?v=1556741787"
                                        alt="Product 3">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-span-4 order-1 md:order-2 py-2">
                    <p>
                        The Enhanced D3 (ED3M) distributes centralized IS-GPS-153 and MSID messages to up to 8
                        independent,
                        unique interfaces. It is designed and qualified for the mounted environment. Supported
                        clients
                        include tactical radios, FBCB2/BFT, Laptop/Falconview, MRT's and others.
                        <br>
                        <br>
                        The newest addition to the family of D3 Devices can provide SAASM or M-code protected
                        GPS.
                        <br>
                        <br>
                        <b>
                            For Quotes or Ordering, call +1 719-421-7300 or email GPSS-Sales@gd-ms.com today for
                            product
                            pricing, available options, questions, or technical support
                        </b>
                    </p>
                    <br>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white font-medium py-2 px-4">
                        <a href="">Contact Us To Purchase</a>
                    </button>
                </div>
            </div>

            <div class="w-full overflow-hidden mt-2">
                <ul class="flex gap-2 py-2 border-b-2 border-gray-500">
                    <li class="">
                        <a class="tab px-4 py-1 border inline-block bg-gray-300 text-white bg-gray-700"
                            href="#overview">
                            Overview
                        </a>
                    </li>
                    <li class="">
                        <a class="tab px-4 py-1 border inline-block bg-gray-300" href="#specifications">
                            Specifications
                        </a>
                    </li>
                    <li class="">
                        <a class="tab px-4 py-1 border inline-block bg-gray-300" href="#downloads">
                            Downloads
                        </a>
                    </li>
                    <li class="">
                        <a class="tab px-4 py-1 border inline-block bg-gray-300" href="#faq">
                            FAQ
                        </a>
                    </li>
                </ul>
                <div class="py-2">
                    <div id="overview" class="tab-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At soluta laudantium omnis dolorem
                            consequatur labore excepturi iure ea consectetur, earum possimus optio id laborum nulla
                            rerum dolor! Eos odit fugiat, error ullam veniam cumque architecto voluptatibus deleniti
                            quibusdam, accusamus autem at rerum facilis alias eius explicabo ipsum mollitia aut.
                            Maiores?
                        </p>
                    </div>
                    <div id="specifications" class="hidden tab-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quo sed quaerat ipsum
                            aperiam provident fugit cupiditate, soluta harum non? Unde sed, similique corporis ad
                            laudantium voluptate suscipit voluptates nulla eius, quae illo quia delectus minima incidunt
                            nostrum, doloremque veritatis.
                        </p>
                    </div>
                    <div id="downloads" class="hidden tab-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quod ipsa
                            necessitatibus dolores repellendus dignissimos odio impedit dolore earum velit!
                        </p>
                    </div>
                    <div id="faq" class="hidden tab-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, tempora aspernatur quo at
                            magni qui rerum laboriosam? Quibusdam aspernatur, cumque dolor, consectetur, omnis ipsam
                            temporibus eaque debitis quam quasi suscipit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-blue-900 text-slate-50">
        <div class="md:grid grid-cols-3 gap-4 p-4">
            <div>
                <div><b>GPS SOURCE TECHNOLOGIES INC.</b></div>
                <div><b>Tel: </b><a class="hover:underline" href="">+91 80 7696 7694</a></div>
                <div><b>Email: </b><a class="hover:underline" href="">sales@gps-repeater.co.in4</a>
                </div>
            </div>
            <div class="col-span-2 flex gap-2">
                <a class="hover:underline" href="">Terms & Conditions</a>
                <a class="hover:underline" href="">Website Feedback</a>
                <a class="hover:underline" href="">Job at gps-repeater.co.in</a>
            </div>
        </div>
        <div class="bg-[#084b7a] py-2 text-center text-xs">
            Copyright © 2024 All rights reserved - Powered by NeuvinIT.
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>
