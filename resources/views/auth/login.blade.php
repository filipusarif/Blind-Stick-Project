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

<body class="bg-[#215695] font-poppins ">
    <nav class="fixed z-50 flex items-center justify-between w-full h-[50px] px-[3rem] lg:mt-6">
        <a href="/"><img src="asset/image/logoLogin.svg" alt="Blind Stick Logo" class="lg:w-[90px] w-[70px]" ></a>
        <a href="/" class="lg:block hidden"><img src="asset/image/homeLogin.svg" alt="Home" width="40px"></a>
    </nav>
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <section class="flex lg:flex-row flex-col bg-white items-center text-[#6C6C6C] lg:bg-gradient-to-tr lg:from-[#071a30] lg:via-[#215695] lg:via-80% lg:to-[#215695] overflow-hidden h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="lg:h-full h-screen w-full  basis-[100%] lg:basis-[40%] bg-white px-[2rem] lg:px-[3rem]">
            <div class="h-full lg:w-[90%] w-full mx-auto flex flex-col items-center justify-center">
                <h1 class="text-[250%] font-extrabold text-[#215695] mt-5">Masuk</h1>
                <form action="{{route('login-proses')}}" method="post" class="min-h-[20%] w-full mt-1">
                    @csrf
                    <div class="h-full w-full">
                        <div class="relative mt-2 w-full">
                            <input type="email" id="emailID" name="email" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2   transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="emailID" class="absolute left-0 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full ">Masukkan Email </label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="passwordID" name="password" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="passwordID" class="absolute left-0 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Masukkan Kata Sandi </label>
                        </div>
                        <button type="submit" class="cursor-pointer w-fit lg:py-1.5 lg:px-7 py-2 px-7 bg-[#215695] rounded-[10px] font-medium text-white mt-7">Masuk</button>
                        
                    </div>
                </form>

                <p class="mt-8">Belum punya akun? <a href="/daftar" class="text-blue-500 font-medium">Daftar</a> proses ini hanya memerlukan waktu singkat.</p>
                <!-- <a href="" class="text-blue-500 font-medium">lupa password?</a> -->
                <div class="flex  mt-28 gap-2 justify-start w-full">
                    <a href="https://github.com/filipusarif/Blind-Stick-Project" target="_blank"><img src="asset/image/githubLogin.svg" alt="github" width="35px"></a>
                    <a href="https://wa.me/qr/HTPPCZOWYBQVL1" target="_blank"><img src="asset/image/whatsappLogin.svg" alt="whatsapp" width="35px"></a>
                    <a href="https://www.instagram.com/blindstick10?igsh=cG0yamo2OWZmNTU2" target="_blank"><img src="asset/image/instagramLogin.svg" alt="instagram" width="35px"></a>
                </div>
            </div>
        </div>
        <div class="lg:h-full hidden md:grid place-items-center basis-[60%]">
            <img src="asset/image/vectorLogin.svg" alt="vector">
            <div class="-mt-[25%] text-white">
                <h1 class="text-[300%] font-bold">Welcome to Blind Stick!</h1>
                <p class="text-[150%]">Dapatkan Pengalaman Lebih Baik</p>
            </div>
        </div>

    </section>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        const pengguna = document.querySelector('#pengguna');
        const penjaga = document.querySelector('#penjaga');
        const nextButton = document.querySelector('#nextButton');
        const backButton = document.querySelector('#backButton');

        nextButton.addEventListener('click', function() {
            pengguna.style.display = "none";
            penjaga.style.display = "block";
        });

        backButton.addEventListener('click', function() {
            pengguna.style.display = "block";
            penjaga.style.display = "none";
        });

        function checkInputNotEmpty(input) {
            const label = input.nextElementSibling;
            if (input.value.trim() !== '') {
                label.classList.add('text-xs', 'text-[#215695]', '-top-4');
            } else {
                label.classList.remove('text-xs', 'text-[#215695]', '-top-4');
            }
        }

        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman masuk";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        document.addEventListener('DOMContentLoaded', speakOnPageLoad());
    </script>
</body>

</html>