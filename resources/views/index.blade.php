@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    
                    <div class="mt-8">
                    <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster    " class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title']}}</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-2">|</span>
                            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                             @foreach ($movie['genre_ids'] as $genre)
                                {{ $genres->get($genre) }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                @endforeach


                </div>
            </div>
            <!-- end of popular movies -->


            <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thiller, Comedy
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of now playing movies -->
        </div>
    </div>
@endsection
