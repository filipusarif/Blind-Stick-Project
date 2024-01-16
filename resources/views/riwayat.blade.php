<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    
</head>

<body class="bg-slate-900">
    <!-- navbar -->
    <nav class="bg-[#215695] bg-opacity-70 backdrop-blur-md fixed w-full z-50 h-[50px] grid place-items-center" id="" >
        <div class="container bg-[#215695] bg-opacity-70 lg:bg-transparent">
            <div class="bg-transparent w-full flex flex-wrap  items-center justify-between px-4 mx-auto">
                <a href="/" class="flex items-center">
                    <img src="asset\image\logoBS.png" class="h-6 mr-3 sm:h-9" alt="Blind Stick Logo">
                </a>
                <div class="flex items-center lg:hidden lg:order-2 ">
                    <div class="hidden mt-2 mr-4 sm:inline-block">
                        <span></span>
                    </div>
    
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1 " id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 text-gray-400 border-b border-gray-100 hover:bg-transparent lg:hover:bg-transparent lg:border-0 lg:hover:text-slate-40 lg:p-0 dark:text-gray-300 lg:dark:hover:ext-slate-200 dark:hover:bg-[#287de6]  dark:hover:ext-slate-200 lg:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                        </li>
                        <li>
                            <a href="/layanan"
                                class="block py-2 pl-3 pr-4 ext-slate-200 bg-[#00d9ff] rounded lg:bg-transparent  text-slate-100 lg:p-0 dark:ext-slate-200"
                                aria-current="page">Layanan</a>
                        </li>
                        <li>
                            <a href="/bantuan"
                                class="block py-2 pl-3 pr-4 text-gray-400 border-b border-gray-100 hover:bg-transparent lg:hover:bg-transparent lg:border-0 lg:hover:text-slate-40 lg:p-0 dark:text-gray-300 lg:dark:hover:ext-slate-200 dark:hover:bg-[#287de6]  dark:hover:ext-slate-200 lg:dark:hover:bg-transparent dark:border-gray-700">Bantuan</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 text-gray-400 border-b border-gray-100 hover:bg-transparent lg:hover:bg-transparent lg:border-0 lg:hover:text-slate-40 lg:p-0 dark:text-gray-300 lg:dark:hover:ext-slate-200 dark:hover:bg-[#287de6]  dark:hover:ext-slate-200 lg:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class=" text-slate-200 bg-gradient-to-tr grid place-items-center  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <h1 class="font-bold text-[200%]">Halaman dalam proses pengembangan❤️</h1>
    </section>

    <!-- Footer -->
    @include('component.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</body>

</html>