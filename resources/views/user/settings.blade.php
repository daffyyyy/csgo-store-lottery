@extends('layout.layout')

@section('title')
    Ustawienia konta
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
    <span class="text-gray-200 text-lg">Ustawienia konta</span>
@endsection

@section('content')
    <div class="col-span-9 p-4 md:pt-0 shadow-xl rounded-md dark:bg-gray-800 border border-gray-700">
        <div class="flex items-center justify-between p-4 align-middle">
            <h4 class="text-lg font-semibold text-gray-500 dark:text-light">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Ustawienia konta
            </h4>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 opacity-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </div>

        <div class="relative p-4 text-center">
            <div class="mb-1">
                <label class="block text-sm font-bold" for="account_id">
                    ID konta
                </label>
                <input
                    class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="account_id" type="number" value="{{ auth()->user()->account_id }}" readonly>
            </div>
            <div class="mb-1">
                <label class="block text-sm font-bold" for="steam_id">
                    SteamID
                </label>
                <input
                    class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="steam_id" type="text" value="{{ auth()->user()->steam_id }}" readonly>
            </div>
            <div class="mb-1">
                <label class="block text-sm font-bold mb-2" for="name">
                    Nazwa
                </label>
                <input
                    class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" value="{{ auth()->user()->name }}" readonly>
            </div>
            <div class="mb-1">
                <label class="block text-sm font-bold" for="coins">
                    Ilo???? monet
                </label>
                <input
                    class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="coins" type="number" value="{{ auth()->user()->coins }}" readonly>
            </div>
            <div class="mb-1">
                <label class="block text-sm font-bold" for="delete_account">
                    Usu?? konto
                </label>
                <form action="{{ route('user.delete', ['user' => auth()->user()]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="text-white font-bold p-2 lg:px-4 md:mx-2 rounded bg-red-600"><i
                            class="fas fa-user-slash"></i> Usu?? konto</button>
                </form>
            </div>

        </div>

    </div>

@endsection
