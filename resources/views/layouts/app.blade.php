<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'knsms') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/main.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

       
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            @if(Auth::guard('web')->check())
            @include('layouts.navigation')
            @elseif(Auth::guard('applicant')->check())
                @include('layouts.applicant_navigation')
            @elseif(Auth::guard('staff')->check())
                @include('layouts.staff_navigation')
            @elseif(Auth::guard('sponsor')->check())
                @include('layouts.sponsor_navigation')
            @elseif(Auth::guard('admin')->check())
                @include('layouts.admin_navigation')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
    </body>
</html>
