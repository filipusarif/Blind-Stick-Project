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

<body class="bg-slate-900 font-poppins">
    <!-- navbar -->
    @include('component/navbar')


    <section class=" text-slate-200 bg-gradient-to-tr  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="">
            <img src="asset/image/kubus.svg" alt="" class="-left-56 -top-20 absolute opacity-50">
        </div>

        <div class="container min-h-[80vh] mx-auto lg:pt-[3%] pt-5 pb-5  relative">
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Layanan</h1>
            <p class="text-center -mt-2 mb-4">Monitoring object di sekitar anda</p>
            <div class="flex lg:flex-row flex-col-reverse items-center justify-center min-h-[80vh]  gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full lg:h-[80vh] ">
                    <div class="lg:basis-[70%] h-[200px] lg:h-auto bg-[#173865] flex justify-center items-center rounded-[20px]">
                        <div class="w-[50%] h-full text-center border-r-[4px] border-[#122F58]">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tl-[10px] grid place-items-center lg:text-[200%] text-[150%] font-bold">Halangan</h1>
                            <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%] " id="obj">Loading</p>
                        </div>
                        <div class="w-[50%] h-full text-center">
                            <h1 class="w-full h-[30%] bg-[#122F58] rounded-tr-[10px] grid place-items-center lg:text-[200%] text-[150%] font-bold">Jarak</h1>
                            <p class="w-full h-[70%] font-extrabold grid place-items-center text-[170%] lg:text-[300%]" id="jarak">Loading</p>
                        </div>
                    </div>
                    <div class="bg-[#173865] w-full h-fit flex py-4 rounded-[18px] items-center justify-center gap-5 flex-wrap">
                        <button class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   " onclick="speakTo()"><img src="/asset/image/volumeSuara.svg" alt="" width="100px"> Bicara</button>
                        <a href="/pengguna" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/user.svg" alt="" width="100px"> Pengguna</a>
                        <a href="/navigasi" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/maps.svg" alt="" width="100px"> Navigasi</a>
                        <a href="/riwayat" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/history.svg" alt="" width="100px"> Riwayat</a>
                        <a href="/bantuan" class="flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/bantuanMenu.svg" alt="" width="100px"> Bantuan</a>
                    </div>
                </div>
                <div class="lg:basis-[30%] w-full lg:h-[80vh] bg-[#173865] flex gap-5 p-5 items-center justify-center lg:flex-col flex-row rounded-[20px] h-full">
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl lg:text-[100%] text-[114%]" id="tombolAktif" onclick="activeSound()"><img src="/asset/image/volumeUP.svg" alt="" width="150px">Suara Aktif</button>
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()"><img src="/asset/image/volumeDown.svg" alt="" width="150px">Suara Non-Aktif</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script type="text/javascript">
        window.onscroll = () => {
            const nav = document.querySelector('#navBar');
            if (this.scrollY <= 10) {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] dark:md:bg-transparent bg-[#215695] dark:bg-opacity-60   fixed w-full z-50';
            } else {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] bg-[#215695] dark:bg-opacity-60 backdrop-blur-md   fixed w-full z-50';
            }
        };
        document.getElementById('userButton').addEventListener('click', function() {
            var userModal = document.getElementById('userModal');
            userModal.classList.toggle('hidden');
        });

        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman Layanan";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        document.addEventListener('DOMContentLoaded', speakOnPageLoad());


        var nilaiSensor;
        var audioElement = new Audio('audio/audioObj.mp3');
        var tempSensor;
        var audioStatus = true;
        var countSensor = 0;

        function activeSound() {
            audioStatus = true;

        }

        function nonActiveSound() {
            audioStatus = false;
        }

        function speakSensor(jarak) {
            var speech = new SpeechSynthesisUtterance1();
            // Set the text to be spoken
            speech.text = "ada object pada jarak "+jarak;
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis1 = window.speechSynthesis;
            speechSynthesis1.speak(speech);
        }

        var jarakSensor;

        function speakTo() {
            // Menggunakan API pengenalan suara untuk mendengarkan perintah
            if (window.SpeechRecognition || window.webkitSpeechRecognition) {
                var recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition)();

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

        $(document).ready(function() {
            setInterval(function() {
                $("#obj").load("{{ url('bacaSensor') }}", function(response, status, xhr) {
                    if (status == "success") {
                        nilaiSensor = response; // Nilai dari hasil bacaSensor
                        // Lakukan sesuatu dengan nilaiSensor
                        if (nilaiSensor === "ada" && (tempSensor !== nilaiSensor || countSensor >= 3) && audioStatus === true) {
                            // Memainkan suara
                            // audioElement.play();
                            speakSensor(jarakSensor);
                            countSensor = 0;
                        } else if (nilaiSensor === "ada" && audioStatus === true) {
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
                        jarakSensor = nilaiJarak;
                    }
                });
            }, 2000);
        });
    </script>
</body>

</html>