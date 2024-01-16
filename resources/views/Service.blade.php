<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
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
    </script>
</head>

<body class="bg-slate-900   ">
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
    <section class=" text-slate-200 bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden h-[100vh] w-full relative">
        <div class="">
            <img src="asset/image/kubus.svg" alt="" class="-left-56 -top-20 absolute opacity-50">
        </div>
        
        <div class="container h-screen mx-auto pt-[3%] relative">
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Layanan</h1>
            <p class="text-center">Monitoring object di sekitar anda</p>
            <div class="flex flex-row items-center justify-center h-[80vh] gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full">
                    <div class=" basis-[70%] bg-[#173865] flex justify-center items-center rounded-[20px]">
                        <div class="w-[50%] h-full text-center">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tl-[10px] grid place-items-center text-[200%] font-bold">Halangan</h1>
                            <p class="w-full h-[70%]  grid place-items-center text-[250%]" id="obj">loading</p>
                        </div>
                        <div class="w-[50%] h-full text-center">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tr-[10px] grid place-items-center text-[200%] font-bold">Jarak</h1>
                            <p class="w-full h-[70%]  grid place-items-center text-[250%]" id="jarak" >loading</p>
                        </div>
                    </div>
                    <div class="bg-[#173865] w-full h-fit flex p-12 rounded-[18px] items-center justify-center gap-5 flex-wrap">
                        <button onclick="speak()" class="flex flex-col items-center font-medium"><img src="/asset/image/volumeSuara.svg" alt="" width="100px"> Bicara</button>
                        <a href="" class="flex flex-col items-center font-medium"><img src="/asset/image/user.svg" alt="" width="100px"> Pengguna</a>
                        <a href="" class="flex flex-col items-center font-medium"><img src="/asset/image/maps.svg" alt="" width="100px"> Navigasi</a>
                        <a href="" class="flex flex-col items-center font-medium"><img src="/asset/image/history.svg" alt="" width="100px"> Riwayat</a>
                        <a href="" class="flex flex-col items-center font-medium"><img src="/asset/image/bantuanMenu.svg" alt="" width="100px"> Bantuan</a>
                    </div>
                </div>
                <div class="basis-[30%] bg-[#173865] flex items-center justify-center flex-col rounded-[20px] h-full">
                    <button id="tombolAktif" onclick="activeSound()" class="basis-[50%]"><img src="/asset/image/volumeUP.svg" alt="" width="150px"></button>
                    <button id="tombolNonaktif"class="" onclick="nonActiveSound()" class="basis-[50%]"><img src="/asset/image/volumeDown.svg" alt="" width="150px"></button>
                </div>
            </div>
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

        
</body>

</html>