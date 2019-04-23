<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background: #e2e2e2;
            }

            header {
                min-height: 150px;
                background: #666;
                padding: 20px;
                margin-bottom: 15px;
            }

            .footer-content {
                padding-top: 10px;
            }

            .header-title,
            .header-sub {
                color: #e2e2e2;
            }

            .header-sub {
                border-top: 1px solid #ccc;
                border-bottom: 1px solid #ccc;
                padding: 3px 0;
            }

            .content {
                background: #fff;
                padding: 20px;
                margin-bottom: 10px;
            }
        </style>

    </head>

    <body>



        <!-- Header starts here -->
    <header class="text-center">
        <h1 class="header-title">Laravel Blog by Pietro </h1>
        <span class="header-sub">Created by <b> Pietro Saluto</b></span>

        <a href="/contacts">Contatti</a>
    </header>
        <!-- Header ends -->

        <!-- Main content begins -->
        <div class="main-content">
        <div class="container">
            <div class="content">
                <h3>Getting Started with Laravel </h3>

                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
            </div>
        </div>
    </div>
        <!-- Main content ends here -->

        <!-- Page footer begins -->
    <footer class="navbar navbar-fixed-bottom">
        <div class="container text-center">
            &copy; {{ date('Y')}}. All rights reserved.
        </div>
    </footer>

        <!-- Bootstrap JavaScript -->
    <script src="/js/app.js"></script>

    </body>
</html>
