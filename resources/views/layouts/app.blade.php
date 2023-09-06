<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>DS ERP</title>
    <meta name="description"
        content="Web Based ERP for PT. Dunia Sandang Pratama. PT. Dunia Sandang adalah outlet yang memiliki misi menjadi One Stop Garment Supplier, yaitu outlet yang tidak hanya menyediakan bahan baku dan kelengkapan yang diperlukan oleh garmen dalam satu tempat, tapi juga dapat memberikan kenyamanan dan kemudahan bagi para pelanggan ketika berbelanja.">
    <!-- <link rel="icon" href="assets/img/favicon.ico"> -->

    <!-- OG -->
    <meta property="og:title" content="DS ERP" />
    <meta property="og:description"
        content="Web Based ERP for PT. Dunia Sandang Pratama. PT. Dunia Sandang adalah outlet yang memiliki misi menjadi One Stop Garment Supplier, yaitu outlet yang tidak hanya menyediakan bahan baku dan kelengkapan yang diperlukan oleh garmen dalam satu tempat, tapi juga dapat memberikan kenyamanan dan kemudahan bagi para pelanggan ketika berbelanja." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://static.coba.dev/duniasandang.03/admin/screenshot.png" />
    <meta property="og:image:secure_url" content="https://static.coba.dev/duniasandang.03/admin/screenshot.png" />

    <!-- STYLES -->
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        // var pusher = new Pusher('215cb2c5646a58c5702b', {
        //     cluster: 'ap1'
        // });

        // var channel = pusher.subscribe('duniasandang');
        // channel.bind('notifikasi', function(data) {
        //     // alert(JSON.stringify(data));
        //     var jum = 1;
        //     if (data) {
        //         $("#notif").html(jum);
        //     } else {

        //     }
        // });
    </script>
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('css')
</head>

<body>
    @include('layouts.inc.navbar')
    @include('layouts.inc.sidebar')
    {{ $slot }}

    @include('layouts.inc.footer')

    <form method="POST" action="{{ route('logout') }}" id="form-logout">
        @csrf
    </form>

    <script src="{{ asset('plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('plugins/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-number-master/jquery.number.min.js') }}"></script>

    @stack('js')
    <script>
        function logout() {
            $("#form-logout").submit();
            // console.log('logout');
        }
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
            },
        });

        function notif(type, message) {
            Command: toastr[type](message);
            toastr.options = {
                closeButton: true,
                debug: false,
                newestOnTop: false,
                progressBar: true,
                positionClass: "toast-top-right",
                preventDuplicates: false,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
            };
        }
    </script>
    @stack('script')
</body>

</html>
