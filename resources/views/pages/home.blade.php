@extends('welcome')
@section('content')
    <div class="bg-gray-white">
        <!-- Cari/Search -->
        <form class="mt-16 max-w-lg mx-auto my-8 ">
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <a href="/nasional">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nasional</button>
                            </a>
                        </li>
                        <li>
                            <a href="/internasional">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Internasional</button>
                            </a>
                        </li>
                        <li>
                            <a href="/ekonomi">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ekonomi</button>
                            </a>
                        </li>
                        <li>
                            <a href="/olahraga">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Olahraga</button>
                            </a>
                        </li>
                        <li>
                            <a href="/teknologi">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Teknologi</button>
                            </a>
                        </li>
                        <li>
                            <a href="/hiburan">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hiburan</button>
                            </a>
                        </li>
                        <li>
                            <a href="/gayaHidup">
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gaya
                                    Hidup</button>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Pencarian Kategori Berita" required />
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <!-- End Cari/Search -->

        <!-- Section awal -->

        <div class="w-full min-h-screen flex flex-col items-center justify-center py-10">
            <span class="text-md md:text-lg font-bold text-[#117278] flex items-center gap-1"><ion-icon
                    name="heart-outline"></ion-icon>Our Insights</span>
            <h2
                class="text-4xl sm:text-5xl md:text-7xl text-center chelsea-market-regular font-bold text-[#117278] md:mb-16 mb-10">
                {{ $homeTitle }}
            </h2>

            <div class="px-4 md:px-[2rem] xl:px-[6rem] flex flex-col lg:flex-row gap-10">
                <!-- col 1 -->
                <div class="lg:w-[80%] xl:w-[60%]">
                    <!-- Blog Image -->
                    <a href="/detail/{{ $news['title'] }}">
                        <img class="w-full object-cover h-[12rem] md:h-[18rem] aspect-square" src="{{ $news['thumbnail'] }}"
                            alt="blog image">
                    </a>

                    <div class="flex flex-col px-6 py-8 border-l border-r border-b">
                        <!-- Author & Category -->
                        <div class="flex gap-4 text-sm text-gray-700 font-semibold">
                            <span class="flex gap-1 items-center"><ion-icon class="-rotate-90"
                                    name="pricetags-outline"></ion-icon>{{ \Carbon\Carbon::parse($news['pubDate'])->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                        </div>
                        <!-- Blog Titile -->
                        <a href="/detail/{{ $news['title'] }}">
                            <h3 class="text-2xl md:text-3xl font-semibold text-teal-900 chelsea-market-regular">
                                {{ $news['title'] }}
                            </h3>
                        </a>
                        <!-- Blog Description -->
                        <p class="text-md text-gray-500">{{ $news['description'] }}</p>
                    </div>
                </div>


                <!-- col 2 -->
                <div class="w-full flex flex-col items-stretch justify-center">
                    <!-- 1 -->
                    @foreach ($firstNews as $berita)
                        <div class="flex flex-col sm:flex-row gap-6 pb-6 border-b-2 border-gray-100">
                            <!-- Blog Date -->
                            <div class="px-6 py-2 text-white flex flex-col items-center justify-center">
                                <span class="text-7xl font-semibold">
                                    <img class="w-full object-cover h-[12rem] md:h-[18rem] aspect-square"
                                        src="{{ $berita['thumbnail'] }}" alt="blog image"></span>
                            </div>
                            <!--  -->
                            <div class="flex flex-col justify-between">
                                <!-- Author & Category -->
                                <div class="flex md:gap-4 gap-2 text-sm text-gray-700 font-semibold">
                                    <span class="flex gap-1 items-center"><ion-icon class="-rotate-90"
                                            name="pricetags-outline"></ion-icon>{{ \Carbon\Carbon::parse($news['pubDate'])->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                                <!-- Blog Titile -->
                                <a href="/detail/{{ $berita['title'] }}">
                                    <h3
                                        class="text-2xl md:text-3xl font-semibold text-teal-900 capitalize chelsea-market-regular">
                                        {{ $berita['title'] }}
                                    </h3>
                                </a>
                                <!-- Blog Description -->
                                <p class="text-md text-gray-500">{{ $berita['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- endsection -->
        <!-- Previous -->
        <nav aria-label="Page navigation example">
            <div class="grid grid-cols-2">
                <div>
                    <h2 class="sm text-start ml-25">Showing 1 to 10 of 97 result</h2>
                </div>
                <div class="text-end mr-10">
                    <ul class="flex items-center -space-x-px h-8 text-sm justify-end">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">
                                <span class="sr-only">Previous</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">
                                <span class="sr-only">Next</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Previous -->
        <!-- Card Tengah  -->
        <div class="my-10 grid grid-cols-3 gap-1 container mx-auto">
            @foreach ($secondNews as $berita)
                <div class=" mx-auto">
                    <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow-sm ">
                        <a href="/{{ $loop->iteration }}">
                            {{-- <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" /> --}}
                        </a>
                        <div class="p-5">
                            <a href="/detail/{{ $berita['title'] }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-1">
                                    {{ $berita['title'] }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">{{ $berita['description'] }}</p>
                            <a href="/detail/{{ $berita['title'] }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <!-- End Card Tengah  -->
        <!-- Carosoul -->


        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                @foreach ($thirdNews as $berita)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <a href="/detail/{{ $berita['title'] }}">
                            <img src="{{ $berita['thumbnail'] }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white ">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sm sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white ">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    <!-- End Carosoul -->
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection
