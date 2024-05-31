    @extends('layouts.main')
    @section('content')
    <div class="container mx-auto px-4 pt-16 mb-10 seriesBackground">
        {{-- <div class="flex">
            <img src="{{ asset('images/lockey-key.jpg') }}" alt="parasite" width="300px" height="300px">
            <div class="ml-20">
                <h2 class="uppercase tracking-wider text-red-600 text-3xl font-semibold">Locke & Key (2020)</h2>
                <div class="flex items-center text-gray-400 mt-1 text-sm">
                    <span class="mr-1"><img src="{{ asset('images/star.svg') }}" alt="parasite" width="15px" height="15px"></span>
                    <span>85%</span>
                    <span class="mx-1">|</span>  
                    <span>Feb 7 2020</span>
                    <span class="mx-1">|</span>
                    <span>Sci-Fi & Fantasy, Drama, Mystery</span>
                </div>
                <p class="mt-12">
                    Three siblings who move into their ancestral estate after their father's gruesome murder discover their new home's magical keys, which must be used in their stand against an evil creature who wants the keys and their powers.
                </p>
                <h4 class="tracking-wider text-3xl font-semibold mt-24">Overview</h4>
                <div class="grid grid-cols-3 mt-5">
                    <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Dawn Wilkinson</p>
                    </div>
                    <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Mairzee Almas</p>
                    </div>
                    <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Mark Tonderai</p>
                    </div>
                </div>
                <div class="grid grid-cols-4 mt-10">
                    <div class="flex justify-center items-center px-2 py-2 bg-black rounded-md">
                        <img src="{{ asset('images/netflix.png') }}" alt="Now Streaming on Netflix" class="mr-2" width="80px" height="80px" />
                        <div class="text-white">
                        <h4 class="text-sm font-medium">Now Streaming</h4>
                        <a href="#" class="font-bold text-xl hover:text-opacity-75">Watch Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="tracking-wider text-red-500 text-2xl font-semibold mt-24">Cast</p>
            <div  class="grid grid-cols-2 lg:grid-cols-7 md:grid-cols-4 sm:grid-cols-3 l mt-5 gap-4">
                <div class="">
                    <img src="{{ asset('images/darby.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Darby Stanchfield</p>
                    <p class="text-sm mx-2 text-gray-400">Nina Locke</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/emilia.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Emilia Jones</p>
                    <p class="text-sm mx-2 text-gray-400">Kinsey Locke</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/jackson.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Jackson Robert Scott</p>
                    <p class="text-sm mx-2 text-gray-400">Bode Locke</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/connor.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Connor Jessup</p>
                    <p class="text-sm mx-2 text-gray-400">Tyler Locke</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/petrice.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Petrice Jones</p>
                    <p class="text-sm mx-2 text-gray-400">Scott Cavendish</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/hallea.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Hallea Jones</p>
                    <p class="text-sm mx-2 text-gray-400">Eden Hawkins</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/griffin.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Griffin Gluck</p>
                    <p class="text-sm mx-2 text-gray-400">Gabe</p>
                </div>
            </div>
        </div>
        <div>
            <p class="tracking-wider text-red-500 text-2xl font-semibold mt-12">Media</p>
        </div> --}}
        <div class="flex flex-col lg:flex-row">
            <div class="flex-shrink-0">
                <a href="{{ asset('images/lovely-runners.jpg') }}" target="_blank">
                    <img src="{{ asset('images/lovely-runners.jpg') }}" alt="parasite" class="w-full lg:w-80 h-full">
                </a>
            </div>
            <div class="lg:ml-20 mt-5 lg:mt-0 flex-1">
                <h2 class="uppercase tracking-wider text-red-600 text-3xl font-semibold">Lovely Runner (2024)</h2>
                <div class="flex items-center text-gray-400 mt-1 text-sm">
                    <span class="mr-1"><img src="{{ asset('images/star.svg') }}" alt="parasite" width="15px" height="15px"></span>
                    <span>88%</span>
                    <span class="mx-1">|</span>  
                    <span>April 8, 2024</span>
                    <span class="mx-1">|</span>
                    <span>Sci-Fi & Fantasy, Drama, Comedy</span>
                </div>
                <p class="mt-12">
                    Im Sol's life takes a dramatic turn thanks to Ryu Sunjae, a top K-pop idol who lifts her out of a deep personal struggle. Unfortunately, on one tragic night, Seonjae died; and the mysterious watch that used to belong to Seonjae activated and returned Im Sol to their high school days. Armed with future knowledge, she strives to change Seonjae's fate while falling in love with him in the process.
                </p>
                <h4 class="tracking-wider text-3xl font-semibold mt-12">Overview</h4>
                <div class="grid grid-cols-3 mt-5">
                    <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Kim Bbang</p>
                    </div>
                    {{-- <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Mairzee Almas</p>
                    </div>
                    <div>
                        <p class="text-red-500 text-xl">Creator</p>
                        <p>Mark Tonderai</p>
                    </div> --}}
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-2 mt-5">
                    {{-- <div class="flex justify-center items-center px-4 py-2 bg-black rounded-md">
                        <img src="{{ asset('images/netflix.png') }}" alt="Now Streaming on Netflix" class="mr-2 flex-shrink-1" width="80px" height="80px" />
                        <div class="text-white">
                        <h4 class="text-sm font-medium">Now Streaming</h4>
                        <a href="#" class="font-bold text-xl hover:text-opacity-75">Watch Now</a>
                        </div>
                    </div> --}}
                    <div>
                        <h4 class="text-red-500 text-xl mt-3">Network</h4>
                        <div class="mt-1">
                            <img src="{{ asset('images/tvn.webp') }}" alt="Now Streaming on Netflix" class="mt-2" width="50px" height="50px" />
                            <img src="{{ asset('images/rviki.webp') }}" alt="Now Streaming on Netflix" class="mt-2" width="100px" height="100px" />
                            <img src="{{ asset('images/viu.webp') }}" alt="Now Streaming on Netflix" class="mt-2" width="50px" height="50px" />
                        </div>
                    </div>
                    <div>
                        <h4 class="text-red-500 text-xl mt-3">Original Name</h4>
                        <p class="mt-2">선재 업고 튀어</p>
                    </div>
                    <div>
                        <h4 class="text-red-500 text-xl mt-3">Original Language</h4>
                        <p class="mt-2">Korean</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="tracking-wider text-red-500 text-2xl font-semibold mt-24 sm:ml-12 ml-1 lg:ml-0 md:ml-0">Cast</p>
            <div  class="grid lg:grid-cols-7 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 sm:ml-12 ml-1 lg:ml-0 md:ml-0 mt-5 sm:gap-0 md:gap-0 gap-4">
                <div class="">
                    <img src="{{ asset('images/actor-1.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Byeon Woo-seok</p>
                    <p class="text-sm mx-2 text-gray-400">Byeon Woo-seok</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-2.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Kim Hye-yoon</p>
                    <p class="text-sm mx-2 text-gray-400">Im Sol</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-3.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Song Geon-hee</p>
                    <p class="text-sm mx-2 text-gray-400">Kim Tae-sung</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-4.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Lee Seung-hyub </p>
                    <p class="text-sm mx-2 text-gray-400">Baek In-hyuk</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-5.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Jung Young-ju</p>
                    <p class="text-sm mx-2 text-gray-400">Park Bok-soon</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-6.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Seong Byeong-suk</p>
                    <p class="text-sm mx-2 text-gray-400">Jung Mal-ja</p>
                </div>
                <div class="">
                    <img src="{{ asset('images/actor-7.webp') }}" alt="parasite" width="150px" height="150px">   
                    <p class="mt-5 mx-2 text-lg">Song Ji-ho</p>
                    <p class="text-sm mx-2 text-gray-400">Im Geum</p>
                </div>
            </div>
        </div>
        <div>
            <p class="tracking-wider text-red-500 text-2xl font-semibold mt-12">Media</p>
            <div  class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 mt-5 gap-5">
                <a href="{{ asset('images/media-1.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-1.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-2.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-2.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-3.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-3.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-4.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-4.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-5.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-5.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-6.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-6.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-7.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-7.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-8.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-8.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-9.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-9.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-10.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-10.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-11.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-11.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
                <a href="{{ asset('images/media-12.jpg') }}" target="_blank">
                    <img src="{{ asset('images/media-12.jpg') }}" alt="lovely-runner" width="400px" height="400px">  
                </a>
            </div>
        </div>
    </div>
    @endsection