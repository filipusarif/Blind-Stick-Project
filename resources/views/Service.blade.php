<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        var nilaiSensor;
        var audioElement = new Audio('audio/alert.mp3');
        var tempSensor;
        var audioStatus=true;
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
                    var nilaiJarak = '110'; // Nilai dari hasil bacaJarak
                    // Lakukan sesuatu dengan nilaiJarak
                    console.log("Nilai Jarak: " + nilaiJarak);
                }
            });
            }, 1000);
        });
        
    </script>
</head>

<body class=" bg-slate-900 ">
    <header class=" h-[50px] w-full flex items-center fixed text-slate-200 bg-slate-900">
        <nav class="container mx-auto flex justify-between items-center ">
            <a href="/" class="font-extrabold text-[180%]"><img src="" alt="">Blind Stick</a>
            <nav class="flex gap-8">
                <a href="/">Home</a>
                <a href="/service">Service</a>
                <a href="/">ppp</a>
                <a href="/">Contact</a>
            </nav>
        </nav>
    </header>
    <section class="container  min-h-screen  mx-auto pt-[3%] text-slate-200">
        <h1 class="text-center text-[200%] font-bold text-slate-200">Service</h1>
        <div class="flex flex-col items-center justify-center gap-3">
            <div class=" flex gap-5  w-full">
                <div class=" basis-[70%] bg-slate-800 flex justify-center items-center rounded-[20px]">
                    <div class="w-[50%] h-full text-center">
                        <h1 class="w-full h-[30%] bg-slate-950 rounded-tl-[10px] grid place-items-center text-[200%] font-bold">Halangan</h1>
                        <p class="w-full h-[70%]  grid place-items-center text-[250%]" id="obj">loading</p>
                    </div>
                    <div class="w-[50%] h-full text-center">
                        <h1 class="w-full h-[30%] bg-slate-950 rounded-tr-[10px] grid place-items-center text-[200%] font-bold">Jarak</h1>
                        <p class="w-full h-[70%]  grid place-items-center text-[250%]" id="jarak" >loading</p>
                    </div>
                    
                </div>
                <div class="basis-[30%] bg-slate-800 flex items-center justify-center flex-col rounded-[20px]">
                    <button id="tombolAktif" onclick="activeSound()"><img src="/asset/image/audio.png" alt="" width="150px"></button>
                    <button id="tombolNonaktif"class="" onclick="nonActiveSound()"><img src="/asset/image/audioNone.png" alt="" width="150px"></button>
                </div>
            </div>
            <div class="bg-slate-800 w-full h-fit flex p-12 rounded-[18px] items-center justify-center gap-5 flex-wrap">
                <button onclick="speak()"><img src="/asset/image/volume.png" alt="" width="150px"></button>
                <a href=""><img src="/asset/image/user.png" alt="" width="150px"></a>
                <a href=""><img src="/asset/image/book.png" alt="" width="150px"></a>
                <a href=""><img src="/asset/image/jam.png" alt="" width="150px"></a>
                <a href=""><img src="/asset/image/map.png" alt="" width="150px"></a>
                <a href=""><img src="/asset/image/note.png" alt="" width="150px"></a>
            </div>
        </div>
    </section>
    <section class="container flex items-center justify-center min-h-screen  mx-auto">

    </section>
    <!-- <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
        
    </script> -->
    <!-- <script type="module">
        import { initializeApp } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js'
        import { getAnalytics } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js'
        import { getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js'
        import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js'
        // import { getAuth,  } from "firebase/auth";



        const firebaseConfig = {
        apiKey: "AIzaSyBEg73avwSOIAdhy0P0cTyO_-ITBUB9R-8",
        authDomain: "blind-stick-19340.firebaseapp.com",
        projectId: "blind-stick-19340",
        storageBucket: "blind-stick-19340.appspot.com",
        messagingSenderId: "747670037565",
        appId: "1:747670037565:web:80bba4e05cfd859ed6b654",
        measurementId: "G-T1X9N9TL3M"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const provider = new GoogleAuthProvider();
        const auth = getAuth();
        document.querySelector('#btnGoogle').addEventListener('click', function(e){
            signInWithPopup(auth, provider)

            .then((result) => {
                // This gives you a Google Access Token. You can use it to access the Google API.
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const token = credential.accessToken;
                // The signed-in user info.
                const user = result.user;
                // IdP data available using getAdditionalUserInfo(result)
                // ...
                console.log(user)
            }).catch((error) => {
                // Handle Errors here.
                const errorCode = error.code;
                const errorMessage = error.message;
                // The email of the user's account used.
                const email = error.customData.email;
                // The AuthCredential type that was used.
                const credential = GoogleAuthProvider.credentialFromError(error);
                // ...
            });
        });
    </script> -->
</body>

</html>