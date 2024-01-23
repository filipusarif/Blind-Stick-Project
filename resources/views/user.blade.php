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

    <section class=" text-slate-200 bg-gradient-to-tr grid place-items-center  from-[#071a30] via-[#215695] via-80% to-[#215695] overflow-hidden min-h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <h1 class="font-bold text-[200%]">Halaman dalam proses pengembangan❤️</h1>
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
    </script>
</body>

</html>