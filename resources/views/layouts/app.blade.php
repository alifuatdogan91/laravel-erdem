<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('{{ asset('fonts/Roboto-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('{{ asset('fonts/Roboto-Bold.ttf') }}') format('truetype');
            font-weight: 700;
            font-style: normal;
        }


        /* Global kullanım */
        body {
            font-family: 'Roboto', sans-serif;
        }

        .bg1{background: #172a42;}

        .bg2{background: #374d73;}

        .bg3{background: #d0dbf4;}

        .text-color1{color: #172a42;}

        .section-top h3{font-size:30px}

        .section-top p{font-size:12px}

        .section-top ul{list-style: none; margin:0px; padding:0px;}

        .section-top ul li{border-bottom:1px solid #6a82aa; padding:10px; font-size:14px;}

        .section-middle h4{font-size:20px}

        .section-middle p{font-size:10px}


        .container.mt-5{max-width:880px}

        .form-container {
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width:300px;
            margin: 0 auto;
        }

        .form-header {
            color: #172a42;
            padding: 20px;
            font-weight:bold;
            text-align: left;
        }



        .form-control:focus {
            border-color: #1a76d2;
            box-shadow: 0 0 0 0.2rem rgba(26, 118, 210, 0.25);
        }

        .btn-primary {
            background-color: #1a76d2;
            border-color: #1a76d2;
            padding: 10px 30px;
        }

        .btn-primary:hover {
            background-color: #0d5aa7;
            border-color: #0d5aa7;
        }
        .section-bot input {
            background-color: #e0e8ef;
        }

        .section-bot button{width: calc(100% / 1.3)}
        .section-bot p{font-size:10px;}
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
