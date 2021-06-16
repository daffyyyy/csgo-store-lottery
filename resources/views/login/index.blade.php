@extends('layout.layout')

@section('title')
    Logowanie
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle"
        viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
            clip-rule="evenodd" />
    </svg> <span class="text-gray-200 text-lg">Logowanie</span>
@endsection

@section('content')
    <div class="col-span-9 p-4 md:pt-0 shadow-xl rounded-md dark:bg-gray-800 border border-gray-700">
        <div class="flex items-center justify-between p-4 align-middle">
            <h4 class="text-lg font-semibold text-gray-500 dark:text-light">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                        clip-rule="evenodd" />
                </svg>
                Logowanie
            </h4>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 opacity-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>

        <div class="relative p-4 h-72 text-center">
            <span class="text-xl">Kliknij w przycisk, aby zalogować się za pomocą konta Steam:</span>

            <div class="mt-5"><a href="{{ route('login.steam') }}">
                <img class="inline-block" src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_02.png"
                    alt="Logowanie steam" />
            </a>
            </div>
        </div>

    </div>

@endsection
