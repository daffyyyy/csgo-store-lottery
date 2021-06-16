@extends('layout.layout')

@section('title')
    Ustawienia konta
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle"
        viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
            clip-rule="evenodd" />
    </svg> <span class="text-gray-200 text-lg">Ustawienia konta</span>
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
                Ustawienia konta
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

        <div class="relative p-4 text-center">
            <span class="text-xl">Cześć, <strong>{{ auth()->user()->name }}</strong></span>
            <p class="mb-5">Znajdziesz tutaj ustawienia swojego konta</p>


            <table class="border-collapse w-full">
                <thead>
                    <tr>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Akcja</th>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Punkty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-indigo-600 px-2 py-1 text-xs font-bold uppercase">Akcja</span>
                            Zabójstwo
                        </td>
                        <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-0 left-0 bg-indigo-600 px-2 py-1 text-xs font-bold uppercase">Punkty</span>
                            +5
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>

@endsection
