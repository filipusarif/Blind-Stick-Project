<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    <!-- <script type="text/javascript">
        var nilaiSensor;
        var audioElement = new Audio('audio/audioObj.mp3');
        var tempSensor;
        var audioStatus= true;
        var countSensor = 0;
        
        function activeSound(){
            audioStatus = true;
            
        }

        function nonActiveSound(){
            audioStatus = false;
        }
        
        function speak(){
            // Menggunakan API pengenalan suara untuk mendengarkan perintah
            if (window.SpeechRecognition || window.webkitSpeechRecognition) {
                var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    
                recognition.onresult = function(event) {
                    var perintah = event.results[0][0].transcript.toLowerCase();
                    console.log("Perintah Suara: " + perintah);
    
                    // Jika perintah adalah "matikan suara", panggil fungsi matikanSuaraDenganPerintah
                    if (perintah.includes("matikan suara")) {
                        nonActiveSound();
                    }
                };
    
                recognition.start();
            }
        }

        $(document).ready(function(){
            setInterval(function(){
                $("#obj").load("{{ url('bacaSensor') }}", function(response, status, xhr) {
                    if (status == "success") {
                        nilaiSensor = response; // Nilai dari hasil bacaSensor
                        // Lakukan sesuatu dengan nilaiSensor
                        if (nilaiSensor === "ada" && (tempSensor !== nilaiSensor || countSensor >= 3 ) && audioStatus === true) {
                            // Memainkan suara
                            audioElement.play();
                            countSensor = 0;
                        }else if(nilaiSensor === "ada" && audioStatus === true){
                            countSensor++;
                        }
                        tempSensor = nilaiSensor;
                        console.log("Nilai Sensor: " + nilaiSensor);
                        }
                });

                $("#jarak").load("{{ url('bacaJarak') }}", function(response, status, xhr) {
                    if (status == "success") {
                        var nilaiJarak = response; // Nilai dari hasil bacaJarak
                        // Lakukan sesuatu dengan nilaiJarak
                        console.log("Nilai Jarak: " + nilaiJarak);
                    }
                });
            }, 2000);
        });
        

        window.onscroll = () => {
            const nav = document.querySelector('#navBar');
            if(this.scrollY <= 10){
                nav.className = 'text-slate-400 bg-transparent transition ease-in-out delay-200  h-[50px] w-full flex items-center fixed text-slate-200 bg-transparent z-50';
            }else{
                nav.className = 'text-slate-400 bg-[#215695] bg-opacity-80 backdrop-blur-md transition ease-in-out delay-200 h-[50px] w-full flex items-center fixed text-slate-200 bg-transparent z-50';
            } 
        };
    </script> -->
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
                                class="block py-2 pl-3 pr-4 text-gray-400 border-b border-gray-100 hover:bg-transparent lg:hover:bg-transparent lg:border-0 lg:hover:text-slate-40 lg:p-0 dark:text-gray-300 lg:dark:hover:ext-slate-200 dark:hover:bg-[#287de6]  dark:hover:ext-slate-200 lg:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                        </li>
                        <li>
                            <a href="/bantuan"
                                class="block py-2 pl-3 pr-4 ext-slate-200 bg-[#00d9ff] rounded lg:bg-transparent  text-slate-100 lg:p-0 dark:ext-slate-200"
                                aria-current="page">Bantuan</a>
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

    <section class=" text-slate-200 bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="">
            <img src="asset/image/kubus.svg" alt="" class="-left-56 -top-20 absolute opacity-50">
        </div>
        
        <div class="container min-h-[80vh] mx-auto pt-[3%] pb-5 relative">
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Bantuan</h1>
            <p class="text-center -mt-2 mb-4">Sedia Setiap Saat, dalam keadaan darurat</p>
            <div class="flex lg:flex-row flex-col-reverse items-center justify-center min-h-[80vh]  gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full lg:h-[80vh] ">
                    <div class="lg:basis-[70%]  h-[700px] lg:h-auto bg-[#173865] flex flex-col lg:flex-row justify-center items-center rounded-[20px]">
                        <div class="lg:w-[50%] w-full h-[400px] lg:h-full text-center lg:border-r-[4px] border-[#122F58]">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tl-[10px] grid place-items-center text-[200%] font-bold">Status</h1>
                            <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%]" id="obj">Aman</p>
                        </div>
                        <div class="lg:w-[50%] w-full h-auto  lg:h-full text-center">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tr-[10px] grid place-items-center text-[200%] font-bold">Kirim Signal</h1>
                            <form action="" class=" h-[250px] flex items-center flex-col gap-5 justify-center pb-5">
                                <select name="signalName" id="signal" class="bg-[#1C4B83] py-2 px-3 rounded-[37px] border-1 border-[#2AA7D6] border outline-none text-[120%]">
                                    <option value="1">Segera Datang</option>
                                    <option value="2">Nanti Kesana</option>
                                    <option value="3">Tidak Bisa Sekarang</option>
                                    <option value="4">Maaf, Tidak Bisa</option>
                                </select>
                                <!-- <input type="text" name="signalName" id="signal" class="bg-[#1C4B83] py-2 px-3 rounded-[37px] border-1 border-[#2AA7D6] border outline-none"> -->
                                <button type="submit" class="text-right py-3 px-14 bg-[#3DCBB4] rounded-[30px] font-medium">Kirim</button>
                                <!-- <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%]" id="jarak" >loading</p> -->
                            </form>
                        </div>
                    </div>
                    <div class="bg-[#173865] w-full h-fit flex py-4 rounded-[18px] items-center justify-center gap-5 flex-wrap">
                        <button    class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   " onclick="speak()" ><img src="/asset/image/volumeSuara.svg" alt="" width="100px"> Bicara</button>
                        <a href="/pengguna" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/user.svg" alt="" width="100px"> Pengguna</a>
                        <a href="/navigasi" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/maps.svg" alt="" width="100px"> Navigasi</a>
                        <a href="/riwayat" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/history.svg" alt="" width="100px"> Riwayat</a>
                        <a href="/bantuan" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/bantuanMenu.svg" alt="" width="100px"> Bantuan</a>
                    </div>
                </div>
                <div class="lg:basis-[30%] w-full lg:h-[80vh] bg-[#173865] flex gap-5 p-5 items-center justify-center lg:flex-col flex-row rounded-[20px] h-full">
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolAktif" onclick="activeSound()" ><img src="/asset/image/volumeUP.svg" alt="" width="150px"></button>
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()" ><img src="/asset/image/volumeDown.svg" alt="" width="150px"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</body>

</html>