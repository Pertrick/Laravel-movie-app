@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-16 pt-16"> 
        <div class="popular-movies">
            <h2 class="uppercase track-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 ">
                           

                @foreach($popularMovies as $popularMovie)

                <div class="mt-8">
                    <a href="http://">
                        <img src=" https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" class="hover:opacity-75 transition ease-in-out duration-150" alt="movie_poster" srcset="">
                    </a>
                    <div class="mt-2 hover:text-gray:300">{{$popularMovie['title']}}</div>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span><i class="fas fa-star text-orange-500"></i></span>
                        <span class="ml-1">{{$popularMovie['vote_average'] * 10}}% </span>
                        <span class="mx-2">|</span>
                        <span>{{\Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y')}}</span>
                    </div>

                    
                    <div class="text-gray-400 text-sm">
                        @foreach($popularMovie['genre_ids'] as $genre) 
                            {{$genre->get($genre)}}
                        @endforeach 
                    </div>
                   
                </div>

                @endforeach

              

            </div>
    </div>
</div>

<div class="container mx-auto px-16 pt-16"> 

    <div class="now-playing">
        <h2 class="uppercase track-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
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

<div class="container mx-auto px-16 pt-16"> 

            <div class="popular-movies">
            <h2 class="uppercase track-wider text-orange-500 text-lg font-semibold">More Movies</h2>
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
</div>
@endsection