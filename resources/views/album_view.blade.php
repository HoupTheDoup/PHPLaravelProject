@extends('layouts.app')

@section('navbar')
    <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="/" class="navbar-logo block w-full py-5">
                    <img
                        src="assets/images/logo/logo-white.png"
                        alt="logo"
                        class="header-logo w-full"
                    />
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                    >
                <span
                    class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                        ></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                        ></span>
                    </button>
                    <nav
                        id="navbarCollapse"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
                    >
                        <ul class="blcok lg:flex">
                            <li class="group relative">
                                <a
                                    href="/"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                                >
                                    Home
                                </a>
                            </li>
                            <li class="group relative">
                                <a
                                    href="#features"
                                    class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                                >
                                    Features
                                </a>
                            </li>
                            <li class="group relative">
                                <a
                                    href="/artist_view"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"

                                >
                                    Artists
                                </a>
                            </li>
                            <li class="group relative">
                                <a
                                    href="/genres_view"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"

                                >
                                    Genres
                                </a>
                            </li>
                            <li class="group relative">
                                <a
                                    href="/album_view"
                                    class="mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"

                                >
                                    Albums
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                    <a
                        href="/admin"
                        class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark"
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('section')
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
                <div
                    class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
                    data-wow-delay=".2s"
                >
                    <h1
                        class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
                    >
                        Album Section!
                    </h1>
                    <br>
                    <p
                        class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
                    >
                        Here you can see all about your favorite music albums, such as their covor photo, name of album, year of release, songs in that album, the artist of the album, and the genre
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('features')
    <div class="container" id="features">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mb-12 max-w-[620px] lg:mb-20">
                    <h2
                        class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]"
                    >
                        Info!

                    </h2>
                    <p>Here you can use the search bar to find the thing you are looking for</p>
                </div>
            </div>
        </div>
        <div class="mt-1 mb-4">
            <div class="relative max-w-xs">
                <form action="{{ route('albums.search') }}" method="GET">
                    <label for="search" class="sr-only">
                        Search
                    </label>
                    <input type="text" name="s"
                           class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                           placeholder="Search..." />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </form>
            </div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Cover</th>
                <th>Name</th>
                <th>Year</th>
                <th>Songs</th>
                <th>Artist</th>
                <th>Genre</th>


            </tr>
            </thead>
            <tbody>
            @foreach($albums as $album)
                <tr>
                    <td><img src="{{$album->image}}" style="width: 120px"></td>
                    <td>{{$album->name}}</td>
                    <td>{{$album->year}}</td>
                    <td>
                        @foreach($songs as $song)

                            @if( $song->album_id == $album->id )

                                {{ ($song->name)}}<br>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($artists as $artist)

                            @if( $artist->id == $album->artist_id )

                                {{ ($artist->name)}}<br>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($genres_albums as $genre_album)
                            @if($genre_album->album_id == $album->id)
                                @foreach($genres as $genre)
                                    @if($genre_album->genre_id == $genre->id)
                                        {{ $genre->name }}
                                    @endif
                                @endforeach
                            @endif

                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
            <div class="mb-10 w-full">
                <a
                    href="javascript:void(0)"
                    class="mb-6 inline-block max-w-[160px]"
                >
                    <img
                        src="assets/images/logo/logo-white.png"
                        alt="logo"
                        class="max-w-full"
                    />
                </a>
                <p class="mb-7 text-base text-[#f3f4fe]">
                    Best music platform you can use!
                </p>

            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-white">Features</h4>
                <ul>
                    <li>
                        <a
                            href="/artist_view"
                            class="mb-2 inline-block text-base leading-loose text-[#f3f4fe] hover:text-primary"
                        >
                            Artists
                        </a>
                    </li>
                    <li>
                        <a
                            href="/album_view"
                            class="mb-2 inline-block text-base leading-loose text-[#f3f4fe] hover:text-primary"
                        >
                            Albums
                        </a>
                    </li>
                    <li>
                        <a
                            href="genres_view"
                            class="mb-2 inline-block text-base leading-loose text-[#f3f4fe] hover:text-primary"
                        >
                            Genres
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">
            <div class="mb-10 w-full">
                <h4 class="mb-9 text-lg font-semibold text-white">Partners</h4>
                <ul class="flex flex-wrap items-center">
                    <li>
                        <a
                            href="https://uni-vt.bg"
                            rel="nofollow noopner"
                            target="_blank"
                            class="mb-6 mr-5 block max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]"
                        >
                            <img
                                src="assets/images/logo/logo-vtu-white.png"
                                alt=""
                                style="scale: 200%"
                            />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
