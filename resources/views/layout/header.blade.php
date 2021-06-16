<div class="header">
    <nav class="py-2 md:py-4">
        <div class="container px-4 mx-auto md:flex md:items-center">

            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="font-bold text-xl text-indigo-600"> <svg
                        xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 inline-block mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    csgo-store-lottery</a>
                <button
                    class="border border-solid border-gray-600 px-3 py-1 rounded opacity-50 hover:opacity-75 md:hidden"
                    id="navbar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
    
            <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                <a href="{{ route('home') }}" class="p-2 lg:px-4 md:mx-2 rounded {{ (strpos(Route::currentRouteName(), 'home') !== FALSE) ? 'bg-indigo-600' : 'hover:bg-indigo-600' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Strona Główna
                </a>
                @guest
                    <a href="{{ route('login') }}"
                        class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:text-gray-200 transition-colors duration-300 mt-1 md:mt-0 md:ml-1"><i
                            class="fab fa-steam" aria-hidden="true"></i> Zaloguj
                        się</a>
                @endguest

                @auth
                    <a href="{{ route('awards.index') }}" class="p-2 lg:px-4 md:mx-2 rounded transition-colors duration-300 {{ (strpos(Route::currentRouteName(), 'awards.index') !== FALSE) ? 'bg-indigo-600' : 'hover:bg-indigo-600' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Nagrody
                    </a>
                    <button
                        class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-gray-200 transition-colors duration-300 mt-1 md:mt-0 md:ml-1 dropdown:block"
                        role="navigation" aria-haspopup="true"><i class="fa fa-user"></i>&nbsp;&nbsp;<strong
                            class="text-white">Konto <i class="fas fa-sort-down"></i></strong>
                        <ul class="absolute hidden w-auto" aria-label="submenu">
                            <li><a href="{{ route('user.settings') }}">Ustawienia</a></li>
                            <li><a href="{{ route('logout') }}">Wyloguj</a></li>
                        </ul>

                    </button>
                    <button
                        class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-gray-200 transition-colors duration-300 mt-1 md:mt-0 md:ml-1"><i
                            class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<strong
                            class="text-white">{{ auth()->user()->coins }}</strong></button>

                    <a href="#" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-indigo-600 transition-colors duration-300 border border-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Admin
                    </a>

                @endauth
            </div>
        </div>
    </nav>
</div>
@if (session('success'))
    <div class="text-center py-4 lg:px-4">
        <div class="p-2 bg-green-600 items-center text-green-200 leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <span class="flex rounded-full bg-green-700 uppercase px-2 py-1 text-xs font-bold mr-3">Sukces</span>
            <span class="font-semibold mr-2 text-left flex-auto">{!! session('success') !!}</span>
        </div>
    </div>
@endif
