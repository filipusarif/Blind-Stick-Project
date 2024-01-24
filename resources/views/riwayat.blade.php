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

        <div class="container min-h-[80vh] mx-auto lg:pt-[3%] pt-5 pb-5 relative">
            <h1 class="text-[200%] text-center font-extrabold leading-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#2996E5] to-[#28D9F1]">Riwayat</h1>
            <p class="text-center -mt-2 mb-4">Sedia Setiap Saat, dalam keadaan darurat</p>
            <div class="flex lg:flex-row flex-col-reverse items-center justify-center min-h-[80vh]  gap-3">
                <div class=" flex flex-col basis-[70%] gap-5  w-full h-full lg:h-[80vh] ">
                    <div class="lg:basis-[70%]  h-[700px] lg:h-auto bg-[#173865] flex lg:flex-row justify-center rounded-[20px] overflow-y-auto ">
                        <table class=" w-full h-fit ">
                            <thead>
                                <tr>
                                    <td class="w-[4%] text-center bg-[#122F58] py-2">No</td>
                                    <td class="w-[70%] text-center bg-[#122F58]">Tempat</td>
                                    <td class="w-[26%] text-center bg-[#122F58]">Waktu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($riwayat as $data)
                                <tr>
                                    <td class="w-[4%] text-center py-2 border-b-2 border-[#122F58]">{{ $loop->index + 1 }}</td>
                                    <td id="nama{{ $loop->index }}" class="w-[70%] text-left py-2 px-1 border-b-2 border-[#122F58]">{{ $data-> nama}}</td>
                                    <td id="tanggal{{ $loop->index }}" class="w-[26%] text-center py-2 px-1 border-b-2 border-[#122F58]">{{ $data -> created_at }}</td>
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
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl lg:text-[100%] text-[114%]" id="tombolAktif" onclick="activeSound()"><img src="/asset/image/volumeUP.svg" alt="" width="150px">Suara Aktif</button>
                    <button class="basis-[50%] bg-[#122F58] p-4 rounded-[15px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()"><img src="/asset/image/volumeDown.svg" alt="" width="150px">Suara Non-Aktif</button>
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
        document.getElementById('userButton').addEventListener('click', function() {
            var userModal = document.getElementById('userModal');
            userModal.classList.toggle('hidden');
        });
        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman riwayat";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        document.addEventListener('DOMContentLoaded', speakOnPageLoad());
    </script>
</body>

</html>