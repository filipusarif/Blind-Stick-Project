<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class=" bg-slate-900 ">
    <header class=" h-[50px] w-full flex items-center fixed text-slate-200 bg-transparent z-50 transition ease-in-out delay-150" id="navBar">
        <nav class="container mx-auto flex justify-between items-center ">
            <a href="/" class="font-extrabold text-[180%]"><img src="asset\image\logoBS.png" alt="" width="50%"></a>
            <nav class="flex gap-8">
                <a href="/">Beranda</a>
                <a href="/service">Layanan</a>
                <a href="">Bantuan</a>
                <a href="">Kontak</a>
            </nav>
        </nav>
    </header>
    <section class=" bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden h-screen w-full">
        <div class="relative">
            <img src="asset\image\kubus.svg" alt="" class="absolute opacity-50">
        </div>
        <section class="container flex items-center justify-center flex-col min-h-screen  mx-auto relative">
            <div class="flex items-center justify-center ">
                <div class="text-slate-200 w-[55%]  ">
                    <h3 class="text-[200%]">Hai, Selamat datang</h3>
                    <h1 class="text-[280%] font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Solusi Inovatif untuk <br> Navigasi Aman Tunanetra.</h1>
                    <p class="text-[140%]">Berikan Kemandirian, Bukan Penderitaan</p>
                    <div class="flex gap-10 mt-10">
                        <a href="/signin" class="py-3 px-14 bg-[#3DCBB4] rounded-[10px] font-medium">Daftar</a>
                        <a href="/login" class="py-3 px-14 bg-transparent border-[#3DCBB4] outline-none border-[1px] rounded-[10px] font-medium">Masuk</a>
                    </div>
                </div>
                <div class="w-[45%] relative">
                    <img src="/asset/image/main_image.svg" alt="" class="h-full w-full z-10 drop-shadow-2xl	">
                    <img src="/asset/image/homeItem1.svg" alt="" class="w-[12%] absolute top-[20%] left-[10%]">
                    <img src="/asset/image/homeItem2.svg" alt="" class="w-[12%] absolute top-[25%] right-[20%]">
                    <img src="/asset/image/homeItem3.svg" alt="" class="w-[12%] absolute bottom-[20%] left-[30%]">
                    
                </div>
            </div>
            <div class="flex justify-between items-center w-full">
                <div class="flex gap-3">
                    <a href=""><img width="25px" src="asset\image\github.svg" alt="github"></a>
                    <a href=""><img width="25px" src="asset\image\wa.svg" alt="whatsup"></a>
                    <a href=""><img width="25px" src="asset\image\instagram.svg" alt="instagram"></a>
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
            <div class="flex justify-center gap-16 items-center w-full mt-8 pb-5">
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
                <a href="/service" class="flex items-center text-[110%] gap-1 py-2 px-5 border-[#2AA7D6] border-1 border rounded-[50px]">Tentang Kami <img src="asset/image/arrow.svg" width="25px" alt=""></a>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-[150vh] w-full text-[#EEE]">
        <div class="container">
            <h1 class="text-[280%] text-center font-bold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#00fff2]">Layanan</h1>
            <p class="text-medium text-center">Mengenal lebih dekat Blind Stick</p>
            <div class="flex flex-center items-center w-[80%] mx-auto gap-5">
                <div class="basis-[40%]">
                    <img src="asset/image/tentang1.svg" alt="">
                </div>
                <div class="basis-[60%]">
                    <p>Selamat datang di Blind Stick, sebuah inovasi revolusioner yang menggabungkan teknologi Internet of Things (IoT) dengan misi sosial untuk memberikan bantuan kepada tunanetra dalam menjaga kesehatan dan keamanan mereka. Kami percaya bahwa mobilitas adalah aspek penting dalam menjaga kesehatan mental dan fisik seseorang, dan Blind Stick hadir sebagai solusi modern untuk meningkatkan kemandirian dan keamanan tunanetra.</p>
                </div>
            </div>
            <div class="flex flex-center flex-row-reverse items-center w-[80%] mx-auto gap-5">
                <div class="basis-[40%]">
                    <img src="asset/image/tentang22.svg" alt="">
                </div>
                <div class="basis-[60%]">
                    <p>Selamat datang di Blind Stick, sebuah inovasi revolusioner yang menggabungkan teknologi Internet of Things (IoT) dengan misi sosial untuk memberikan bantuan kepada tunanetra dalam menjaga kesehatan dan keamanan mereka. Kami percaya bahwa mobilitas adalah aspek penting dalam menjaga kesehatan mental dan fisik seseorang, dan Blind Stick hadir sebagai solusi modern untuk meningkatkan kemandirian dan keamanan tunanetra.</p>
                </div>
            </div>
            <h1 class="text-[280%] text-center font-bold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#00fff2]">Kritik & Saran</h1>
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
    <footer class="lg:h-[335px] w-full bg-[#0A2647] font-poppins font-light text-white rounded-[15px] relative" id="footer">
            <div class="container p-6 m-auto grid place-items-center h-[90%]">
                <div class="flex flex-col lg:flex-row items-start h-fit  w-full gap-[15px] text-[14.5px]">
                    <div class=" basis-[55%] lg:text-center">
                        <h1 class="text-[24px] font-bold">Blind Stick</h1>
                        <p class="">
                        "Tetap terhubung dengan kami, Blind Stick 2024 . Temukan lebih banyak tentang komitmen kami dalam 'Mengembangkan Teknologi Inklusif dan Meningkatkan Aksesibilitas.' Jangan ragu untuk berkontribusi dan bersama-sama kita wujudkan visi 'Inklusivitas melalui Teknologi'."
                        </p>
                    </div>
                    <div class=" basis-[23%] lg:ml-[10%] lg:pl-12">
                        <h1 class="text-[24px] font-bold">Kontak</h1>
                        <p>blindStickOfficial@gmail.com</p>
                        <p>telegram.me/ydhrizqi</p>
                    </div>
                    <div class=" basis-[13%] ">
                        <h1 class="text-[24px] font-bold">Terhubung</h1>
                        <p>blindStick</p>
                        <p>@blindStick</p>
                        <p>blindStick</p>
                    </div>
                </div>
            </div>
            <div class="container m-auto lg:h-[10%] flex lg:items-center">
                <div class="h-[5%] lg:h-[10%] bg-[#0d233d] w-full absolute left-0 bottom-0"></div>
                <p class=" lg:pl-28 font-roboto font-light text-[11.25px] text-opacity-[80%]  z-10">Made with ❤️ by Human on Earth</p>
            </div>
        </footer>
        <script>
            window.onscroll = () => {
				const nav = document.querySelector('#navBar');
				if(this.scrollY <= 10){
					nav.className = 'text-slate-400 bg-transparent transition ease-in-out delay-200  h-[50px] w-full flex items-center fixed text-slate-200 bg-transparent z-50';
				}else{
					nav.className = 'text-slate-400 bg-[#215695] bg-opacity-80 backdrop-blur-md transition ease-in-out delay-200 h-[50px] w-full flex items-center fixed text-slate-200 bg-transparent z-50';
				} 
			};
        </script>
</body>

</html>