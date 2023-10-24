<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" id="css-main" href="{{ asset('backend/assets/css/oneui.min.css') }}">
    </head>
    <body style="font-family: 'Quicksand', sans-serif;">
        <div id="page-container" class="sidebar-o sidebar-dark side-scroll page-header-fixed page-header-dark dark-mode main-content-narrow">
            <!-- Sidebar -->
            @include('components.layouts.partials.sidebar')

            <!-- Header -->
            @include('components.layouts.partials.header')

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('components.layouts.partials.footer')
        </div>

        <script src="{{ asset('backend/assets/js/oneui.app.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/lib/jquery.min.js') }}"></script>
    </body>
</html>



