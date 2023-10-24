<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>{{ $title }} - Point of Sales</title>
    <link rel="stylesheet" id="css-main" href="{{ asset('backend/assets/css/oneui.min.css') }}">
</head>

<body>
    <div id="page-container">
        <main id="main-container">
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('backend/assets/js/oneui.app.min.js') }}"></script>
</body>

</html>
