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
    @include('component/navbar')

    <section class="flex justify-center   bg-white items-center text-[#6C6C6C] lg:bg-gradient-to-tr lg:from-[#071a30] lg:via-[#215695] lg:via-80% lg:to-[#215695] overflow-hidden h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="h-[80%] w-full rounded-[20px] basis-[100%] lg:basis-[40%] bg-white px-[2rem] lg:px-[3rem]">
            <div class="h-full lg:w-[90%] w-full mx-auto flex flex-col items-center justify-center">
                <h1 class="text-[250%] font-extrabold text-[#215695]">Ubah</h1>
                <form action="{{route('actionuser')}}" method="post" class="min-h-[30%] w-full mt-1">
                    @csrf
                    <div id="pengguna" class="h-full w-full">
                        <div class="relative mt-2 w-full">
                            <input type="email" id="emailPenggunaID" name="emailPengguna" value="{{ $user->email }}" class="capitalize border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2   transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="emailPenggunaID" class="absolute left-0 -top-4 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full ">Email Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="text" id="usernamePenggunaID" name="usernamePengguna" value="{{ $user->username }}" class="capitalize border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="usernamePenggunaID" class="absolute left-0 -top-4 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Nama Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="passwordPenggunaID" name="passwordPengguna" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="passwordPenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Kata Sandi Lama Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="passwordbaruPenggunaID" name="passwordbaruPenggunaID" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="passwordbaruPenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Kata Sandi Baru Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="konfirpasswordbaruPenggunaID" name="konfirpasswordbaruPenggunaID" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="konfirpasswordbaruPenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Konfirmasi Kata Sandi Baru Pengguna</label>
                        </div>
                        <input type="hidden" name="rolePengguna" value="pengguna">
                        <button type="submit" class="cursor-pointer w-fit lg:py-1.5 lg:px-7 py-2 px-7 bg-[#215695] rounded-[10px] font-medium text-white mt-2"> Ubah</button>
                    </div>
                </form>
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

        document.getElementById('userButton').addEventListener('click', function() {
            var userModal = document.getElementById('userModal');
            userModal.classList.toggle('hidden');
        });

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
            speech.text = "anda berada di halaman Pengguna";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        window.addEventListener('load', speakOnPageLoad());
    </script>
</body>

</html>