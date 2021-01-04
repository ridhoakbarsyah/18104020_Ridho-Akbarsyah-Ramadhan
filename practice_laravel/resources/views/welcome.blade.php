<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> <!-- Judul Form --> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles --> <!-- memberikan style pada halaman website --> 
        <style>
            html, body { 
                background-color: white;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            /* height untuk mengatur tinggi */
            .full-height { 
                height: 100vh;
            }
            /* display flex layout yang dipake */
            .flex-center {
                align-items: center;
                display: flex;
                /* justify-content dan align-item untuk mengatur dua properti CSS yang membantu kita mendistribusikan item-item di dalam container.  */
                justify-content: center;
            }

            .position-ref {
            /* position relatif untuk elemen diposisikan relatif terhadap posisi normal */
                position: relative;
            }

            .top-right {
            /* position absolute merupakan unsur diposisikan relatif terhadap posisi pertama */
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /* text-align center untuk text rata tengah pada content */
                text-align: center;
            }

            .title {
                /* font-size untuk ukuran font title */
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a> <!-- menampilkan halaman home -->
                    @else
                        <a href="{{ route('login') }}">Login</a> <!-- menampilkan halaman login -->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a> <!-- menampilkan halaman register -->
                        @endif
                    @endauth
                </div>
            @endif
<!-- div untuk wadah suatu content  -->
            <div class="content">
                <div class="title m-b-md"> <!-- menampilkan title pada halaman awal pada website -->
                    Ridho Akbarsyah Ramadhan
                    <br> <!-- Untuk memberikan spasi antara tulisan -->
                    Ora Ngoding Ora Kepenak
                </div>

                <div class="links"> <!-- digunakan untuk menampilkan link yang sesuai dengan sub judul yang tertera -->
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="http://se.ittelkom-pwt.ac.id/">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/ridhoakbarsyah/18104020_Ridho-Akbarsyah-Ramadhan">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
