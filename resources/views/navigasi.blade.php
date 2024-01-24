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

    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

</head>

<body class="bg-slate-900 font-poppins">
    <!-- navbar -->
    @include('component/navbar')

    <!-- content -->
    <section class=" text-slate-200 flex gap-5 flex-col bg-gradient-to-tr from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 px-5 ">
        <h2 id="directionsPanel" class="bg-green-500 hidden lg:w-[25%] w-[25%] h-[8%] lg:h-[10%]  absolute z-40 text-center top-[80px] left-1/2 transform -translate-x-1/2 items-center justify-center font-medium text-[130%] rounded-[15px] shadow-2xl"></h2>
        <div id="map" class="lg:w-[80%] w-[95%]  z-10 mx-auto h-[400px] mt-[100px] rounded-[10px]"></div>
        <div class="bg-[#173865] lg:w-[80%] w-[95%] mx-auto h-fit flex py-4 rounded-[18px] items-center justify-center gap-5 flex-wrap mb-5">
            <button class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   " onclick="speak()"><img src="/asset/image/volumeSuara.svg" alt="" width="60px"> Bicara</button>
            <a href="/pengguna" class=" w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/user.svg" alt="" width="60px"> Pengguna</a>
            <a href="/navigasi" class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/maps.svg" alt="" width="60px"> Navigasi</a>
            <a href="/riwayat" class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/history.svg" alt="" width="60px"> Riwayat</a>
            <a href="/bantuan" class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl   "><img src="/asset/image/bantuanMenu.svg" alt="" width="60px"> Bantuan</a>
            <button class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl" id="tombolAktif" onclick="activeSound()"><img src="/asset/image/volumeUP.svg" alt="" width="60px">Suara Aktif</button>
            <button class="w-[120px] h-[130px] flex flex-col items-center font-medium bg-[#122F58] p-4 rounded-[10px] drop-shadow-xl" id="tombolNonaktif" onclick="nonActiveSound()"><img src="/asset/image/volumeDown.svg" alt="" width="60px">Suara Non-Aktif</button>
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
            statusUser = true,
            statusSpeak = false,
            tempDir,
            counter = 0;
        var currentPosition;
        var currentStepIndex = 0;
        var realTimeTracking = true;
        var audioStatus = true;


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
            if (audioStatus = true) {
                speak("Rute Menuju " + name);
            }
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
                        directionsPanel.classList.remove('hidden');
                        directionsPanel.classList.add('flex');

                        if (inst[0].distance > 1) {
                            if(direction == "Kiri"){
                                text = '<img src="asset/image/kiri.svg" alt="kiri" width="50px"><div class="hidden lg:block">' + (inst[0].distance) + " meter belok " + direction + "</div>";
                            }else if(direction == "Kanan"){
                                text = '<img src="asset/image/kanan.svg" alt="kanan" width="50px"><div class="hidden lg:block">' + (inst[0].distance) + " meter belok " + direction+"</div>";
                            }else{
                                text = '<img src="asset/image/lurus.svg" alt="lurus" width="50px"><div class="hidden lg:block">' + (inst[0].distance) + " meter " + direction+"</div>";
                            }
                            directionsPanel.innerHTML = text;
                            if (statusSpeak == false || tempDir != direction) {
                                voice = parseFloat(inst[0].distance).toLocaleString('id-ID') + " meter lagi belok " + direction;
                                if (audioStatus == true) {
                                    tempDir = direction;
                                    speak(voice)
                                    statusSpeak = true;
                                }
                            }
                            if (inst[0].distance < 5) {
                                statusSpeak = false;
                            }
                        } else {
                            text = 'sampai ditempat tujuan'
                            directionsPanel.innerHTML = text;
                            if (audioStatus == true) {
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
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }


        function activeSound() {
            audioStatus = true;

        }

        function nonActiveSound() {
            audioStatus = false;
            speechSynthesis.cancel();
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
        document.getElementById('userButton').addEventListener('click', function() {
            var userModal = document.getElementById('userModal');
            userModal.classList.toggle('hidden');
        });

        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman navigasi";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        document.addEventListener('DOMContentLoaded', speakOnPageLoad());
    </script>
</body>

</html>