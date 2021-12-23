<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">

        <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/fontawesome/css/brands.css" rel="stylesheet">
        <link href="/fontawesome/css/solid.css" rel="stylesheet">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans bg-gray-900 text-white">
        
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-6">
                <ul class="flex flex-col md:flex-row items-center">
                    <li >
                        <a href="http://">
                            Logo
                        </a>
                    </li>

                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a class="hover:text-gray-300" href="">Movies</a>
                    </li>

                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a class="hover:text-gray-300" href="">TV Shows</a>
                    </li>

                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a class="hover:text-gray-300" href="">Actors</a>
                    </li> 
                </ul>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="relative mt-3 md:mt-0">
                        <input type="search" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="search" name="" id="">
                        
                        <div class="absolute top-0">
                        <i class="fas fa-search fill-current text-gray-500 w-4 mt-2 ml-2"></i>
                        </div>

                    </div>
                </div>

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="http://">
                        <img src="/images/profilepix.jpg" alt="avartar" class="rounded-full w-8 h-8"srcset="">
                    </a>
                </div>
            </div>
        </nav>
        @yield('content')

        
        
    </body>
</html>