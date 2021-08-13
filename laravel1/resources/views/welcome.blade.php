<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beranda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: midnightblue;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .spasi{
                padding-top: 50px;
                font-family: Arial;
                font-size: 25px;
            }

            .full-height {
                height: auto;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .font-style{
                font-size: 120px;
                color:white;
                background: #000;
            }
            a:hover{
                background-color: aliceblue;
                transition: 1s;
            }
        </style>
    </head>
    <body>
        <div class="spasi">
            <center><h3 style="color: #000">Welcome to my Laravel</h3></center>
        </div>

            <div class="content">
                <div class="title m-b-md">
                    <h3 style="color: black;">lara<span class="font-style">vel</span></h3>
                </div>

                <div class="links">
                    <a href="http://127.0.0.1:8000">Beranda</a>
                    <a href="http://127.0.0.1:8000/profil">Profil</a>
                    <a href="http://127.0.0.1:8000/Galeri">Galeri</a>
                </div>
            </div>
        </div>
    </body>
</html>
