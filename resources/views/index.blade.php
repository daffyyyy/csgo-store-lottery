@extends('layout.layout')

@section('title')
    Strona Główna
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg> <span class="text-gray-200 text-lg">Strona Główna</span>
@endsection

@section('content')
    <div class="col-span-9 p-4 md:pt-0 shadow-xl rounded-md dark:bg-gray-800 border border-gray-700">
        <div class="flex items-center justify-between p-4 align-middle">
            <h4 class="text-lg font-semibold text-gray-500 dark:text-light">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Strona Główna
            </h4>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 opacity-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
        </div>
    
        <div class="relative p-4 text-center whitespace-pre-line">
            @auth
                <span class="text-xl">Cześć <strong>{{ auth()->user()->name }}</strong>, 
                    trafiłeś tutaj, aby odebrać nagrodę za grę na serwerach <strong>UtopiaFPS.pl</strong>?</span>
                    <p>Jesteś już zalogowany więc wystarczy, że przejdziesz do zakładki <strong>Nagrody</strong> i zdecyujesz co chciałbyś otrzymać 

            @else
                <span class="text-xl">Witaj przybyszu!</strong>, 
                    trafiłeś tutaj, aby odebrać nagrodę za grę na serwerach <strong>UtopiaFPS.pl</strong>?</span>
                <p>Wystarczy, że zalogujesz się swoim kontem <a href="{{ route('login') }}"><strong><i class="fab fa-steam" aria-hidden="true"></i> steam</strong></a> i wybierzesz to co Cię interesuje 
                </p>
            @endauth
            <p>Prawda, że proste? <svg
                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </p>

        <img class="inline-block" src="{{ asset('img/utopiafps-logo.png') }}" alt="UtopiaFPS.pl - Logo" />

        </div>

    </div>

@endsection
