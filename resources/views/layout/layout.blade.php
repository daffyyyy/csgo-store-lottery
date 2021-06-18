<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UtopiaFPS.pl - System nagród - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body class="antialiased dark text-gray-400">

    <div class="relative bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class="flex flex-col justify-between">

            @include('layout.header')

            <div class="py-6 md:py-12">

                <div class="container px-4 mx-auto">

                    <div class="mb-4 bg-indigo-600 shadow-sm rounded-md w-52 p-4 whitespace-nowrap">

                        @yield('title_body')

                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

                        <div class="grid grid-cols-1 lg:grid-cols-1 col-span-12 lg:col-span-9 gap-4">

                            @yield('content')

                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-1 col-span-12 lg:col-span-3 gap-4">

                            @include('layout.sidebar')

                        </div>

                    </div>

                </div>

            </div>

        </div>


        @include('layout.footer')

    </div>

    <!-- JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
