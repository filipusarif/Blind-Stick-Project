<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    @include('component/scrollbar')
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

</head>

<body class="bg-slate-900 font-poppins">
    <!-- navbar -->
    <nav class=" transition ease-in-out delay-200  border-gray-200 dark:bg-[#215695] bg-[#215695] dark:bg-opacity-60 backdrop-blur-md   fixed w-full z-50" id="navBar">
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

    <!-- content -->
    <section class=" text-slate-200 flex gap-5 flex-col bg-gradient-to-tr from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 px-5 ">
        <h2 id="directionsPanel" class="bg-green-500 w-[20%] h-[10%]  absolute z-40 text-center top-[80px] left-1/2 transform -translate-x-1/2 items-center flex justify-center font-medium text-[130%] rounded-[15px] shadow-2xl"></h2>
        <div id="map" class="w-[80%]  z-10 mx-auto h-[400px] mt-[100px] rounded-[10px]"></div>
        <div class="bg-[#173865] w-[80%] mx-auto h-fit flex py-4 rounded-[18px] items-center justify-center gap-5 flex-wrap mb-5">
            <button class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   " onclick="speak()"><img src="/asset/image/volumeSuara.svg" alt="" width="60px"> Bicara</button>
            <a href="/pengguna" class=" w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/user.svg" alt="" width="60px"> Pengguna</a>
            <a href="/navigasi" class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/maps.svg" alt="" width="60px"> Navigasi</a>
            <a href="/riwayat" class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/history.svg" alt="" width="60px"> Riwayat</a>
            <a href="/bantuan" class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/bantuanMenu.svg" alt="" width="60px"> Bantuan</a>
            <button class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl" id="tombolAktif" onclick="activeSound()"><img src="/asset/image/volumeUP.svg" alt="" width="60px">Suara Aktif</button>
            <button class="w-[12%] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()"><img src="/asset/image/volumeDown.svg" alt="" width="60px">Suara Non-Aktif</button>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://unpkg.com/leaflet-geosearch@3.5.0/dist/geosearch.umd.js"></script>

    <script type="text/javascript">
        var map = L.map('map').setView([-6.984055, 110.409562], 6);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var userMarker, circle, destMarker, routingControl, routes, tempLat = 0,
            tempLong = 0,
            statusUser = true, statusSpeak = false, tempDir,
            counter = 0;
        var currentPosition;
        var currentStepIndex = 0;
        var realTimeTracking = true;
        var audioStatus= true;


        if (!navigator.geolocation) {
            console.log("Your browser doesn't support geolocation feature!");
        } else {
            setInterval(() => {
                if (realTimeTracking) {
                    navigator.geolocation.getCurrentPosition(getPosition);
                }
            }, 5000);
        }

        var geocoder = L.Control.geocoder({
            defaultMarkGeocode: false, // Set this to false to prevent automatic marker creation on geocode
        }).addTo(map);

        // Listen for the geocode event
        geocoder.on('markgeocode', function(e) {
            var coords = e.geocode.center;
            var name = e.geocode.name;

            // Buat objek FormData dan tambahkan data yang ingin Anda kirim
            var formData = new FormData();
            formData.append('name', name);
            console.log(coords.lat);

            // Kirim data ke server menggunakan AJAX
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
            });
            $.ajax({
                method: "POST",
                url: "/simpan-data",
                //dataType:"jsonp",
                // dataType:"String",
                data: {
                    name: name,
                    latitude: coords.lat,
                    longitude: coords.lng,
                },
                success: function(result) {
                    console.log(result);
                }
            });

            setInterval(() => {
                if (statusUser === false) {
                    if (routingControl) {
                        map.removeControl(routingControl);
                    }

                    if (destMarker) {
                        map.removeLayer(destMarker);
                    }
                    console.log(coords.lat)
                    destMarker = L.marker([coords.lat, coords.lng]).addTo(map);

                    // Hapus rute sebelumnya jika ada
                    routingControl = L.Routing.control({
                        waypoints: [
                            userMarker ? userMarker.getLatLng() : [0, 0],
                            coords
                        ],
                        routeWhileDragging: true
                    }).on('routesfound', function(e) {
                        routes = e.routes;
                        var summary = routes[0].summary;
                        var inst = routes[0].instructions;
                        var direction;
                        console.log(routes);
                        if (inst[1].modifier == 'Left') {
                            direction = 'Kiri';
                        } else if (inst[1].modifier == 'Right') {
                            direction = 'Kanan';
                        } else {
                            direction = 'Lurus';
                        }
                        var directionsPanel = document.getElementById('directionsPanel');
                        if (inst[0].distance > 1) {
                            text = '' + (inst[0].distance) + " meter belok " + direction;
                            directionsPanel.innerHTML = text; 
                            if(statusSpeak == false || tempDir != direction){
                                voice = parseFloat(inst[0].distance).toLocaleString('id-ID') + " meter lagi belok " + direction;
                                if(audioStatus == true){
                                    tempDir = direction;
                                    speak(voice)
                                    statusSpeak = true;
                                }
                            }if(inst[0].distance < 5){
                                statusSpeak = false;
                            }
                        } else {
                            text = 'sampai ditempat tujuan'
                            directionsPanel.innerHTML = text;
                            if(audioStatus == true){
                                speak(text)
                            }
                        }
                    }).addTo(map);
                    statusUser = true
                }
            }, 100);
        });

        function speak(voice) {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = voice;
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            window.speechSynthesis.speak(speech);
        }

        
        function activeSound(){
            audioStatus = true;
            
        }

        function nonActiveSound(){
            audioStatus = false;
        }

        function getPosition(position) {
            var lat = position.coords.latitude + counter;
            var long = position.coords.longitude + counter;
            var accuracy = position.coords.accuracy;

            if (userMarker) {
                map.removeLayer(userMarker);
            }

            // Hapus lingkaran sebelumnya jika ada
            if (circle) {
                map.removeLayer(circle);
            }

            userMarker = L.marker([lat, long]);
            if (lat != tempLat || long != tempLong) {
                statusUser = false;
            }
            circle = L.circle([lat, long], {
                radius: accuracy
            });

            var featureGroup = L.featureGroup([userMarker, circle]).addTo(map);
            map.fitBounds(featureGroup.getBounds());

            console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy);

            currentPosition = L.latLng(lat, long);
            tempLat = lat;
            tempLong = long;
            // counter += 0.0002;
        }
    </script>
</body>

</html>