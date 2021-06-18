@extends('layout.layout')

@section('title')
    Dodawanie nowej nagrody
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
    <span class="text-gray-200 text-lg">Dodawanie nowej nagrody</strong></span>
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
                Dodawanie nowej nagrody</strong>
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
            <form action="{{ route('admin.awards.create') }}" method="POST" enctype="multipart/form-data">
                <div class="mb-1">
                    <label class="block text-sm font-bold" for="name">
                        Nazwa
                    </label>
                    <input
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Nazwa nagrody">
                </div>
                <div class="mb-1">
                    <label class="block text-sm font-bold" for="description">
                        Opis
                    </label>
                    <textarea
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="description" name="description" type="text">Opis nagrody</textarea>
                </div>
                <div class="mb-1">
                    <label class="block text-sm font-bold" for="file">
                        Obrazek
                    </label>
                    <input
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="file" name="file" type="file">
                </div>
                <div class="mb-1">
                    <label class="block text-sm font-bold mb-2" for="cost">
                        Cena
                    </label>
                    <input
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="cost" name="cost" type="number" value="0">
                </div>
                <div class="mb-1">
                    <label class="block text-sm font-bold" for="stock">
                        Ilość
                    </label>
                    <input
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="stock" name="stock" type="number" value="0">
                </div>
                <div class="mb-1" id="days">
                    <label class="block text-sm font-bold" for="days">
                        Czas trwania
                    </label>
                    <input
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="days" name="days" type="number">
                </div>
                <div class="mb-1">
                    <label class="block text-sm font-bold" for="type">
                        Typ
                    </label>
                    <select name="type" id="type"
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">-- Wybierz typ --</option>
                        @foreach ($types as $key => $type)
                            <option value="{{ $key }}">
                                {{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-1" id="code">
                    <label class="block text-sm font-bold" for="code">
                        Lista kodów
                    </label>
                    <textarea
                        class="bg-gray-900 shadow appearance-none border border-indigo-600 rounded w-2/3 py-2 px-3 text-gray-300 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="code" name="code" rows="10">Wpisz kody oddzielając je nowa linią</textarea>
                </div>
                <div class="mb-1">
                    @method('PUT')
                    @csrf
                    <button class="text-white font-bold p-2 lg:px-4 md:mx-2 rounded bg-yellow-600"><i
                            class="fas fa-save"></i> Dodaj</button>
                </div>
            </form>

        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#code').addClass('hidden');
            $('#days').addClass('hidden');

            $('#type').on('change', function() {
                if (this.value == 1) {
                    $('#code').removeClass('hidden');
                    $('#days').addClass('hidden');
                } else if (this.value == 2) {
                    $('#days').removeClass('hidden');
                    $('#code').addClass('hidden');
                } else {
                    $('#code').addClass('hidden');
                    $('#days').addClass('hidden');
                }
            });
        });

    </script>

@endsection
