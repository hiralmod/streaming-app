@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16 mb-10">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-red-600 text-2xl font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovie as $movieData)
                <div class="mt-8 relative">
                    <a href="{{ route('show') }}">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'. $movieData['poster_path'] }}" alt="poster" width="220px" height="220px">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-red-500 block inset-0 pr-4 py-2">{{ $movieData['title'] }}</a>
                        <div class="flex items-center text-gray-400">
                            <span class="mr-1"><img src="{{ asset('images/star.svg') }}" alt="parasite" width="15px" height="15px"></span>
                            <span>{{ round($movieData['vote_average'] * 10) . "%" }}</span>
                            <span class="mx-1">|</span>  
                            <span>{{ \Carbon\Carbon::parse($movieData['release_date'])->format('M d,Y') }}</span>
                        </div>
                        {{-- <div class="text-gray-400">
                            Action, Thriller, Comedy
                        </div> --}}
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
 
        <div class="popular-series mt-24">
            <h2 class="uppercase tracking-wider text-red-600 text-2xl font-semibold">Popular Series</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularSeries as $seriesData)
                <div class="mt-8 relative">
                    <a href="{{ route('show') }}">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'. $seriesData['poster_path'] }}" alt="poster" width="220px" height="220px">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-red-500 block inset-0 pr-4 py-2">{{ $seriesData['name'] }}</a>
                        <div class="flex items-center text-gray-400">
                            <span class="mr-1"><img src="{{ asset('images/star.svg') }}" alt="parasite" width="15px" height="15px"></span>
                            <span>{{ round($seriesData['vote_average'] * 10) . "%" }}</span>
                            <span class="mx-1">|</span>  
                            <span>{{ \Carbon\Carbon::parse($seriesData['first_air_date'])->format('M d,Y') }}</span>
                        </div> 
                        {{-- <div class="text-gray-400">
                            Action, Thriller, Comedy
                        </div> --}}
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection