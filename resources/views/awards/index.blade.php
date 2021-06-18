@extends('layout.layout')

@section('title')
    Lista nagród
@endsection

@section('title_body')
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline-block text-indigo-300 mr-2 align-middle" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
    </svg>
    <span class="text-gray-200 text-lg">Lista nagród</span>
@endsection

@section('content')
    <div class="col-span-9 p-4 md:pt-0 shadow-xl rounded-md dark:bg-gray-800 border border-gray-700">
        <div class="flex items-center justify-between p-4 align-middle">
            <h4 class="text-lg font-semibold text-gray-500 dark:text-light">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Lista nagród
            </h4>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 opacity-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>

        <div class="relative p-4 text-center">

            <table class="border-collapse w-full">
                <thead>
                    <tr>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Ikona</th>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Opis</th>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Cena</th>
                        <th class="p-3 font-bold uppercase text-indigo-600 hidden lg:table-cell">Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($awards as $award)
                        <tr class="flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-indigo-600 px-2 py-1 text-xs font-bold uppercase">Ikona</span>
                                <img class="w-64 h-34 inline-block" src="{{ $award->image }}" />
                            </td>
                            <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-indigo-600 px-2 py-1 text-xs font-bold uppercase">Opis</span>
                                <p class="w-72 inline-block">{{ $award->description }}</p>
                            </td>
                            <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-indigo-600 px-2 py-1 text-xs font-bold uppercase">Cena</span>
                                <button
                                    class="whitespace-nowrap p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-gray-200 transition-colors duration-300 mt-1 md:mt-0 md:ml-1"><i
                                        class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<strong
                                        class="text-white">{{ $award->cost }}</strong></button>
                            </td>
                            <td class="w-full lg:w-auto p-3 text-white text-center block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-green-600 px-2 py-1 text-xs font-bold uppercase">Akcja</span>

                                <a href="{{ route('awards.redeem', $award) }}" data-method="post"
                                    data-token="{{ csrf_token() }}" data-confirm="Are you sure?"
                                    class="whitespace-nowrap p-2 lg:px-4 md:mx-2 text-green-600 text-center border border-solid border-green-600 rounded hover:bg-green-600 hover:text-gray-200 transition-colors duration-300 mt-1 md:mt-0 md:ml-1"><i
                                        class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Odbierz</a>

                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
