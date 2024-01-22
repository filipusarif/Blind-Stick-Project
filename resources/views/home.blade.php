<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    <link rel="icon" href="/asset/image/titleLogo.ico">
    <!-- @include('tailwind/config') -->
    @vite('resources/css/app.css')
    @include('component/scrollbar')
</head>

<body class=" bg-slate-900 font-poppins">

    <!-- Navbar -->
    <nav class=" border-gray-200 dark:bg-[#215695] dark:md:bg-transparent bg-[#215695] dark:bg-opacity-60    fixed w-full z-50" id="navBar">
        <div class="container">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="asset\image\logoBS.png" class="h-8" alt="Blind StickLogo" />
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-[#122F58] dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border  rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-[#122F58] md:dark:bg-transparent dark:border-[#1364c0]">
                        <li>
                            <a href="/" class="block py-2 px-3 text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300" aria-current="page">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#00d9ff] text-white"></a>
                        </li>
                        <li>
                            <a href="/layanan" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ">Layanan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white text-white"></a>
                        </li>
                        <li>
                            <a href="/bantuan" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ">Bantuan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white text-white"></a>
                        </li>
                        <li>
                            <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ">Kontak<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white text-white"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <section class=" bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden h-screen w-full px-5 lg:px-0">
        <div class="relative">
            <img src="asset\image\kubus.svg" alt="" class="absolute opacity-50">
        </div>
        <section class="container flex items-center justify-center flex-col min-h-screen  mx-auto relative">
            <div class="flex items-center justify-center lg:flex-row flex-col-reverse">
                <div class="text-slate-200 basis-[55%] ">
                    <h3 class="lg:text-[200%] text-[100%] ">Hai, Selamat datang</h3>
                    <h1 class="lg:text-[280%]  text-[150%] font-extrabold lg:leading-[60px] leading-[30px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Solusi Inovatif untuk <br> Navigasi Aman Tunanetra.</h1>
                    <p class="lg:text-[140%] text-[90%]">Berikan Kemandirian, Bukan Penderitaan</p>
                    <div class="flex gap-10 lg:mt-10 mt-7">
                        <a href="/daftar" class="lg:py-3 lg:px-14 py-3 px-9 bg-[#3DCBB4] rounded-[10px] font-medium">Daftar</a>
                        <a href="/masuk" class="lg:py-3 lg:px-14 py-3 px-9 bg-transparent border-[#3DCBB4] outline-none border-[1px] rounded-[10px] font-medium">Masuk</a>
                    </div>
                </div>
                <div class="basis-[45%] relative">
                    <img src="/asset/image/main_image.svg" alt="" class="h-full w-full z-10 drop-shadow-2xl	">
                    <img src="/asset/image/homeItem1.svg" alt="" class="w-[12%] absolute top-[20%] left-[10%] animate-[comments_15s_ease-in-out_infinite]">
                    <img src="/asset/image/homeItem2.svg" alt="" class="w-[12%] absolute top-[25%] right-[20%] animate-[maps_4s_ease-in-out_infinite]">
                    <img src="/asset/image/homeItem3.svg" alt="" class="w-[12%] absolute bottom-[20%] left-[32%] animate-[guard_10s_ease-in-out_infinite]">

                </div>
            </div>
            <div class="flex justify-between items-center w-full mt-20 lg:mt-0">
                <div class="flex gap-3">
                    <a href="https://github.com/filipusarif/Blind-Stick-Project" target="_blank"><img width="25px" src="asset\image\github.svg" alt="github"></a>
                    <a href="https://wa.me/qr/HTPPCZOWYBQVL1" target="_blank"><img width="25px" src="asset\image\wa.svg" alt="whatsApp"></a>
                    <a href="https://www.instagram.com/blindstick10?igsh=cG0yamo2OWZmNTU2" target="_blank"><img width="25px" src="asset\image\instagram.svg" alt="instagram"></a>
                </div>
                <div class="flex gap-1">
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                </div>
            </div>
        </section>
    </section>
    <section class="bg-[#0A2647] min-h-[50vh] w-full z-20 text-[#EEEEEE]">
        <div class="container flex items-center justify-center flex-col  mx-auto">
            <h1 class="text-[280%] font-bold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Layanan</h1>
            <p class="text-medium ">Blind Stick dapat melayani pengguna dengan</p>
            <div class="flex justify-center gap-16 lg:flex-row flex-col items-center w-full mt-8 pb-5">
                <div class="flex flex-col gap-5">
                    <img src="asset/image/navigasi.svg" alt="" width="100%">
                    <p class="text-center text-[120%] -translate-y-1">Navigasi</p>
                </div>
                <div class="flex flex-col gap-3">
                    <img src="asset/image/Monitoring.svg" alt="" width="80%">
                    <p class="text-center text-[120%]">Monitoring Object</p>
                </div>
                <div class="flex flex-col gap-3">
                    <img src="asset/image/bantuan.svg" alt="" width="80%">
                    <p class="text-center text-[120%]">Signal Bantuan</p>
                </div>
            </div>
            <div class="flex justify-between items-center w-full pb-8">
                <div class="flex gap-1">
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                    <div class="w-[25px] h-[25px] bg-[#2AA7D6] rounded-[50%]"></div>
                </div>
                <a href="/layanan" class="flex items-center text-[110%] gap-1 py-2 px-5 border-[#2AA7D6] border-1 border rounded-[50px]">Layanan <img src="asset/image/arrow.svg" width="25px" alt=""></a>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-[150vh] w-full text-[#EEE]">
        <div class="container">
            <h1 class="text-[280%] text-center font-bold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#00fff2]">Tentang Kami</h1>
            <p class="text-medium text-center">Mengenal lebih dekat Blind Stick</p>
            <div class="flex flex-center flex-col lg:flex-row items-center w-[80%] mx-auto gap-5">
                <div class="basis-[40%]">
                    <img src="asset/image/tentang1.svg" alt="">
                </div>
                <div class="basis-[60%]">
                    <p>Selamat datang di Blind Stick, sebuah inovasi revolusioner yang menggabungkan teknologi Internet of Things (IoT) dengan misi sosial untuk memberikan bantuan kepada tunanetra dalam menjaga kesehatan dan keamanan mereka. Kami percaya bahwa mobilitas adalah aspek penting dalam menjaga kesehatan mental dan fisik seseorang, dan Blind Stick hadir sebagai solusi modern untuk meningkatkan kemandirian dan keamanan tunanetra.</p>
                </div>
            </div>
            <div class="flex flex-center lg:flex-row-reverse flex-col lg:mt-1 mt-4 items-center w-[80%] mx-auto gap-5">
                <div class="basis-[40%]">
                    <img src="asset/image/tentang22.svg" alt="">
                </div>
                <div class="basis-[60%]">
                    <p>Selamat datang di Blind Stick, sebuah inovasi revolusioner yang menggabungkan teknologi Internet of Things (IoT) dengan misi sosial untuk memberikan bantuan kepada tunanetra dalam menjaga kesehatan dan keamanan mereka. Kami percaya bahwa mobilitas adalah aspek penting dalam menjaga kesehatan mental dan fisik seseorang, dan Blind Stick hadir sebagai solusi modern untuk meningkatkan kemandirian dan keamanan tunanetra.</p>
                </div>
            </div>
            <h1 class="text-[280%] text-center font-bold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#00fff2] lg:mt-0 mt-5">Kritik & Saran</h1>
            <p class="text-medium text-center">Kritik anda adalah semangat kami</p>
            <form action="" class="w-full grid place-items-center pb-10">
                <div class="w-full">
                    <div class="flex flex-col w-[70%] mx-auto">
                        <label for="email" class="ml-4 mt-5">Email</label>
                        <input type="email" name="inputEmail" id="email" class="bg-[#1C4B83] py-2 px-3 rounded-[37px] border-1 border-[#2AA7D6] border outline-none ">
                        <label for="kritik" class="ml-4 mt-5">Kritik</label>
                        <input type="text" name="inputKritik" id="kritik" class="bg-[#1C4B83] py-2 px-3 rounded-[37px] border-1 border-[#2AA7D6] border outline-none ">
                    </div>
                    <div class="flex justify-end w-[70%] mx-auto mt-5">
                        <button type="submit" class="text-right py-3 px-14 bg-[#3DCBB4] rounded-[30px] font-medium">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navBar');
            if (this.scrollY <= 10) {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] dark:md:bg-transparent bg-[#215695] dark:bg-opacity-60    fixed w-full z-50';
            } else {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] bg-[#215695] dark:bg-opacity-60 backdrop-blur-md   fixed w-full z-50';
            }
        };
        
    </script>
</body>

</html>