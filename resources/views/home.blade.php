<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
     
     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" sizes="32x32">

</head>
<body class="font-sans antialiased bg-gray-100">
    @livewire('layouts.navbar')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
    
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
    
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
    
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Dashboard
                </header>
    
                <div class="w-full p-6">
                    <p class="text-gray-700">
                        You are logged in!
                    </p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
