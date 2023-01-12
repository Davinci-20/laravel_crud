<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel-Crud</title>
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        />
        <!-- Google Fonts -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        />
        <!-- Bootstrap core CSS -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Material Design Bootstrap -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            id="wsl-widget-css"
            href="https://mdbcdn.b-cdn.net/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.6.2"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="compiled.css-css"
            href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/compiled-4.19.2.min.css?ver=4.19.2"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" href="{{ asset('style.css') }}" />
    </head>
    <body>
        <div class="container mt-2">
            <div class="card">@include('error')@yield('content')</div>
        </div>
        <!-- JQuery -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        ></script>
        <!-- Bootstrap tooltips -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
        ></script>
        <!-- Bootstrap core JavaScript -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
        ></script>
        <!-- MDB core JavaScript -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
        ></script>
    </body>
</html>
