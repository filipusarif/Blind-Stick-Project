<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
</head>

<body class=" bg-slate-900 ">
    <header class=" h-[50px] w-full flex items-center fixed text-slate-200 bg-slate-900">
        <nav class="container mx-auto flex justify-between items-center ">
            <a href="/" class="font-extrabold text-[180%]"><img src="" alt="">Blind Stick</a>
            <nav class="flex gap-8">
                <a href="/">Home</a>
                <a href="/service">Service</a>
                <a href="">Blog</a>
                <a href="">Contact</a>
            </nav>
        </nav>
    </header>
    <section class="container flex items-center justify-center min-h-screen  mx-auto">
        <div class="text-slate-200 w-[60%]  ">
            <h3 class="text-[200%]">Hai, Selamat datang</h3>
            <h1 class="text-[300%] font-extrabold leading-[70px]">Solusi Inovatif untuk <br> Navigasi Aman Tunanetra.</h1>
            <p class="text-[140%]">Berikan Kemandirian, Bukan Penderitaan</p>
            <div class="flex gap-10 mt-10">
                <a href="/signin" class="py-3 px-14 bg-green-500 rounded-[10px] ">Daftar</a>
                <a href="/login" class="py-3 px-14 bg-transparent border-gray-100 outline-none border-[1px] rounded-[10px] ">Masuk</a>
            </div>
        </div>
        <div class="w-[40%] ">
            <img src="/asset/image/main_image.svg" alt="" class="h-[500px] w-[500px]">
        </div>
    </section>
    <section class="container flex items-center justify-center min-h-screen  mx-auto">

    </section>
    <script type="module">
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
    </script>
</body>

</html>