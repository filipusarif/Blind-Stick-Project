<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    @include('component/scrollbar')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

</head>

<body class="bg-slate-900">
    <!-- navbar -->
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
                            <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-white text-white"></a>
                        </li>
                        <li>
                            <a href="/layanan" class="block py-2 px-3 text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300" aria-current="page">Layanan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-[#00d9ff] text-white"></a>
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

    <section class=" text-slate-200 bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="">
            <img src="asset/image/kubus.svg" alt="" class="-left-56 -top-20 absolute opacity-50">
        </div>

        <div class="container min-h-[80vh] mx-auto pt-[3%] pb-5 relative">
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Riwayat</h1>
            <p class="text-center -mt-2 mb-4">Sedia Setiap Saat, dalam keadaan darurat</p>
            <div class="flex lg:flex-row flex-col-reverse items-center justify-center min-h-[80vh]  gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full lg:h-[80vh] ">
                    <div class="lg:basis-[70%]  h-[700px] lg:h-auto bg-[#173865] flex lg:flex-row justify-center rounded-[20px] overflow-y-auto ">
                        <table class=" w-full h-fit ">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Tempat</td>
                                    <td>Waktu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($riwayat as $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td id="nama{{ $loop->index }}">{{ $data-> nama}}</td>
                                    <td id="tanggal{{ $loop->index }}">{{ $data -> created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-[#173865] w-full h-fit flex py-4 rounded-[18px] items-center justify-center gap-5 flex-wrap">
                        <button class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   " onclick="speak()"><img src="/asset/image/volumeSuara.svg" alt="" width="100px"> Bicara</button>
                        <a href="/pengguna" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/user.svg" alt="" width="100px"> Pengguna</a>
                        <a href="/navigasi" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/maps.svg" alt="" width="100px"> Navigasi</a>
                        <a href="/riwayat" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/history.svg" alt="" width="100px"> Riwayat</a>
                        <a href="/bantuan" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/bantuanMenu.svg" alt="" width="100px"> Bantuan</a>
                    </div>
                </div>
                <div class="lg:basis-[30%] w-full lg:h-[80vh] bg-[#173865] flex gap-5 p-5 items-center justify-center lg:flex-col flex-row rounded-[20px] h-full">
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolAktif" onclick="activeSound()"><img src="/asset/image/volumeUP.svg" alt="" width="150px"></button>
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()"><img src="/asset/image/volumeDown.svg" alt="" width="150px"></button>
                </div>
            </div>
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

        var index = 0,
            audioStatus = false;



        function speak(voice) {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = voice;
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }


        function activeSound() {
            audioStatus = true
            var index =0;
            speak("riwayat perjalanan anda ");
            while (audioStatus) {
                if (!document.querySelector("#nama" + index)) {
                    audioStatus = false
                    return;
                }
                console
                let nama = document.querySelector("#nama" + index).innerText;
                let tanggal = document.querySelector("#tanggal" + index).innerText;
                let text = "no " + (index + 1) + " di " + nama + " pada tanggal " + tanggal;
                speak(text);
                index++;
            }
        }

        function nonActiveSound() {
            audioStatus = false;
            speechSynthesis.cancel();
        }
    </script>
</body>

</html>