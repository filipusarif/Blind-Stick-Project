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
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Layanan</h1>
            <p class="text-center -mt-2 mb-4">Monitoring object di sekitar anda</p>
            <div class="flex lg:flex-row flex-col-reverse items-center justify-center min-h-[80vh]  gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full lg:h-[80vh] ">
                    <div class="lg:basis-[70%] h-[200px] lg:h-auto bg-[#173865] flex justify-center items-center rounded-[20px]">
                        <div class="w-[50%] h-full text-center border-r-[4px] border-[#122F58]">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tl-[10px] grid place-items-center text-[200%] font-bold">Halangan</h1>
                            <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%]" id="obj">Ada</p>
                        </div>
                        <div class="w-[50%] h-full text-center">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tr-[10px] grid place-items-center text-[200%] font-bold">Jarak</h1>
                            <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%]" id="jarak" >95cm</p>
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
    <script>
        window.onscroll = () => {
        	const nav = document.querySelector('#navBar');
        	if(this.scrollY <= 10){
        		nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] dark:md:bg-transparent bg-[#215695] dark:bg-opacity-60   fixed w-full z-50';
        	}else{
        		nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] bg-[#215695] dark:bg-opacity-60 backdrop-blur-md   fixed w-full z-50';
        	} 
        };
    </script>
</body>

</html>