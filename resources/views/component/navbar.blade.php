<nav class=" border-gray-200 dark:bg-[#215695] dark:md:bg-transparent bg-[#215695] dark:bg-opacity-60    fixed w-full z-50" id="navBar">
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
                        <a href="/" class="{{ Request::is('/') ? ' text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300': ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ' }} block py-2 px-3 " aria-current="page">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 {{ Request::is('/') ? 'bg-[#00d9ff]' :'bg-white' }} text-white"></a>
                    </li>
                    <li>
                        <a href="/layanan" class="{{ Request::is('/layanan') ? ' text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300': ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ' }} block py-2 px-3 ">Layanan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 {{ Request::is('/') ? 'bg-[#00d9ff]' :'bg-white' }} text-white"></a>
                    </li>
                    @auth
                    <li>
                        <a href="{{ auth()->user()->role === 'penjaga' ? url('bantuan-penjaga') : url('bantuan-pengguna') }}" class="{{ Request::is('/bantuan') ? ' text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300': ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ' }} block py-2 px-3 ">Bantuan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 {{ Request::is('/') ? 'bg-[#00d9ff]' :'bg-white' }} text-white"></a>
                    </li>
                    @else
                    <li>
                        <a href="/bantuan-pengguna" class="{{ Request::is('/bantuan') ? ' text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300': ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ' }} block py-2 px-3 ">Bantuan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 {{ Request::is('/') ? 'bg-[#00d9ff]' :'bg-white' }} text-white"></a>
                    </li>
                    @endauth
                    <li>
                        <a href="/#footer" class="{{ Request::is('/#footer') ? ' text-[#EEE] bg-[#00d9ff] rounded md:bg-transparent md:text-[#00d9ff] md:p-0 dark:text-white md:dark:text-[#00d9ff] group transition duration-300': ' text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-[#cacaca] md:dark:hover:text-white dark:hover:bg-gray-500 dark:hover:bg-opacity-20 dark:hover:text-white md:dark:hover:bg-transparent group transition duration-300 ' }} block py-2 px-3 ">Kontak<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 {{ Request::is('/') ? 'bg-[#00d9ff]' :'bg-white' }} text-white"></a>
                    </li>
                    @auth
                    <form action="/logout" method="post" onsubmit="return confirm('Apakah anda yakin keluar?');">
                        @csrf
                        <button type="submit" class="delete-btn">Logout</button>
                    </form>
                    @endauth
                </ul>
            </div>

        </div>
    </div>
</nav>