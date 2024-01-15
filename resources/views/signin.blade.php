<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
</head>

<body>
    <button id="btnGoogle">login dengan google</button>
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