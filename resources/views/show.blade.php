@extends('layouts.main')


@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/spider-man.jpeg" alt="spider-man" class="w-64 md:w-96" style="width: 24rem">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    Spider Man - Homecoming (2017)
                </h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span>Action, Thriller, Comedy</span>
                        </div>

                        <p class="text-gray-300 mt-8">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Quam qui nesciunt perspiciatis fugit totam eum excepturi?
                            Expedita vero doloribus dolorum cum odio, tenetur animi
                            explicabo quibusdam ex modi corporis laboriosam alias eum beatae!
                            Aspernatur maxime asperiores quam corrupti eligendi nulla reprehenderit,
                            molestias cupiditate eos, debitis vero odio voluptatibus iste delectus!
                        </p>

                        <div class="mt-12">
                            <h4 class="text-white font-semibold">
                                Featured Cast
                            </h4>
                            <div class="flex mt-4">
                                <div>
                                    <div>Bong Joon Hung</div>
                                    <div class="text-sm text-gray-400">Screeplay, Directo, Story</div>
                                </div>
                                <div class="ml-8">
                                    <div>Rua Guidó</div>
                                    <div class="text-sm text-gray-400">Screeplay</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12">
                            <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-5 hover:bg-orange-600 transition ease-in-out duration-150">
                               <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
            </div>
        </div>
    </div><!-- end here movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>star</span>
                        </div>
                    </div>


        </div>
    </div>
</div>
</div>

<div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">

                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">


                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">

                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">


                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">

                    </div>


        </div>
    </div>
</div>
</div>

@endsection
