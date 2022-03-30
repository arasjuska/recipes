<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
          integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body x-data="{scrolledFromTop: false}"
      @scroll.window="window.pageYOffset > 60 ? scrolledFromTop = true : scrolledFromTop = false"
      class="antialiased">
    <div class="bg-amber-500 w-full fixed">
        <header class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8 transition-all duration-200"
                :class="{'py-5': !scrolledFromTop, 'py-3': scrolledFromTop}">
            @include('layouts.header')
        </header>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid overflow-hidden grid-cols-6 grid-rows-1 gap-5 pb-6 pt-24">
        <main class="col-span-6 md:col-span-4">
            {{ $slot }}
        </main>
        <aside class="col-span-6 md:col-span-2">
            @include('components.sidebar')
        </aside>
    </div>
</body>
</html>
