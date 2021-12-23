@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">
        <img src="/images/profilepix.jpg" alt="avartar" class="w-64 md:w-96" >

        <div class="md:ml-24">
            <h2 class="text-3xl font:semibold">Parasite (2021)</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm ">
                <span><i class="fas fa-star text-orange-500"></i></span>
                <span class="ml-1 " >80%</span>
                <span class="mx-2 ">|</span>
                <span>Feb 29, 2020</span>
                <span class="mx-2 ">|</span>
                <span> Action, Thriller, Comedy</span>
            </div>

            <p class="text-gray-300 mt-6">
                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum lorem Ipsum Lorem Ipsum
                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum lorem Ipsum Lorem Ipsum
                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum lorem Ipsum Lorem Ipsum
                Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum lorem Ipsum Lorem Ipsum
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">
                    Featured Cast
                </h4>

                <div class="flex mt-4">
                    <div>
                        <div>Bong Bong</div>
                        <div class="text-sm text-gray-400">Screen play, Director, Story</div>
                    </div>

                    <div class="ml-8">
                        <div>Han Jan Wong</div>

                        <div class="text-sm text-gray-400">Screenplay</div>

                    </div>
                </div>
            </div>


            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4
                hover:bg-orange-600 transition ease-in-out duration-150">
                <span><i class="fas fa-play w-6 fill-current"></i></span>
                <span class="ml-2">Play Trailer</span>
                </button>
            </div>

        </div>
    </div>
</div>
    

    <div class="movie-cast border-bborder-gray-800">
        <div class="container mx-auto px-16 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
               

               <div class="mt-8">
                   <a href="http://">
                       <img src="/images/profilepix.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie" srcset="">
                   </a>
                   <div class="mt-2 hover:text-gray:300">Movie name</div>
                   <div class="flex items-center text-gray-400 text-sm mt-1">
                       <span><i class="fas fa-star text-orange-500"></i></span>
                       <span class="ml-1">80%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 29, 2020</span>
                   </div>

                   <div class="text-gray-400 text-sm">
                       Action, Thriller, Comedy
                   </div>
               </div>

               <div class="mt-8">
                   <a href="http://">
                       <img src="/images/profilepix.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie" srcset="">
                   </a>
                   <div class="mt-2 hover:text-gray:300">Movie name</div>
                   <div class="flex items-center text-gray-400 text-sm mt-1">
                       <span><i class="fas fa-star text-orange-500"></i></span>
                       <span class="ml-1">80%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 29, 2020</span>
                   </div>

                   <div class="text-gray-400 text-sm">
                       Action, Thriller, Comedy
                   </div>
               </div>

               <div class="mt-8">
                   <a href="http://">
                       <img src="/images/profilepix.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie" srcset="">
                   </a>
                   <div class="mt-2 hover:text-gray:300">Movie name</div>
                   <div class="flex items-center text-gray-400 text-sm mt-1">
                       <span><i class="fas fa-star text-orange-500"></i></span>
                       <span class="ml-1">80%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 29, 2020</span>
                   </div>

                   <div class="text-gray-400 text-sm">
                       Action, Thriller, Comedy
                   </div>
               </div>

               <div class="mt-8">
                   <a href="http://">
                       <img src="/images/profilepix.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie" srcset="">
                   </a>
                   <div class="mt-2 hover:text-gray:300">Movie name</div>
                   <div class="flex items-center text-gray-400 text-sm mt-1">
                       <span><i class="fas fa-star text-orange-500"></i></span>
                       <span class="ml-1">80%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 29, 2020</span>
                   </div>

                   <div class="text-gray-400 text-sm">
                       Action, Thriller, Comedy
                   </div>
               </div>

               <div class="mt-8">
                   <a href="http://">
                       <img src="/images/profilepix.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie" srcset="">
                   </a>
                   <div class="mt-2 hover:text-gray:300">Movie name</div>
                   <div class="flex items-center text-gray-400 text-sm mt-1">
                       <span><i class="fas fa-star text-orange-500"></i></span>
                       <span class="ml-1">80%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 29, 2020</span>
                   </div>

                   <div class="text-gray-400 text-sm">
                       Action, Thriller, Comedy
                   </div>
               </div>

            </div>
        </div>
    </div>
           


@endsection