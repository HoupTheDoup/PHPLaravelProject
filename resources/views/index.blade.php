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
                                    class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
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
                        Welcome to Spotifile!
                    </h1>
                    <p
                        class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
                    >
                        Informational and music related platform for your everyday music tastes
                    </p>
                    <h2 style="font-size: 30px; color: white">
                        Our Latest Albums:
                    </h2>
                </div>
            </div>

            <div class="w-full px-4">
                <div
                    class="wow fadeInUp relative z-10 mx-auto max-w-[845px]"
                    data-wow-delay=".25s"
                >
                    <div class="mt-16">
                        <div class="-mx-4 flex flex-wrap" style="display:flex; align-items: center; justify-content: center">

                            @foreach($last_3 as $last_3)
                            <div class="w-full px-4 md:w-1/2 lg:w-1/4w-full px-4 md:w-1/2 lg:w-1/4"
                                 style="display: grid; text-align: center; justify-content: center">
                                <img src="{{ $last_3->image}}" style="width: 150px"> </img>  <p style="font-size: 20px">{{$last_3->name}}</p>  </div>
                            @endforeach
                        </div>
                    </div>
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
              <span class="mb-2 block text-lg font-semibold text-primary">
                Features
              </span>
                    <h2
                        class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[42px]"
                    >
                        Main Features Of Spotile!
                    </h2>
                    <p
                        class="text-lg leading-relaxed text-body-color sm:text-xl sm:leading-relaxed"
                    >
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".1s">
                    <div
                        class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary"
                    >
                <span
                    class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                        <svg
                            width="35"
                            height="35"
                            viewBox="0 0 52 52"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M44.9313 11.7H38.9188C40.5438 10.9687 41.7626 9.99374 42.2501 8.69374C42.9001 6.98749 42.2501 5.19999 40.3001 3.33124C38.1876 1.29999 35.9938 0.568738 33.8001 1.13749C29.9813 2.11249 27.4626 7.06874 26.2438 9.99374C25.1063 7.06874 22.5876 2.11249 18.6876 1.13749C16.4938 0.568738 14.3001 1.29999 12.1876 3.33124C10.2376 5.19999 9.5876 6.98749 10.2376 8.69374C10.7251 9.99374 12.0251 10.9687 13.5688 11.7H7.06885C5.0376 11.7 3.4126 13.325 3.4126 15.3562V21.5312C3.4126 23.5625 5.0376 25.1875 7.06885 25.1875H7.71885V46.2312C7.71885 48.8312 9.83135 51.025 12.5126 51.025H40.1376C42.7376 51.025 44.9313 48.9125 44.9313 46.2312V25.1875C46.9626 25.1875 48.5876 23.5625 48.5876 21.5312V15.3562C48.5063 13.325 46.8813 11.7 44.9313 11.7ZM34.5313 3.98124C34.7751 3.89999 35.0188 3.89999 35.1813 3.89999C36.1563 3.89999 37.2126 4.38749 38.2688 5.52499C38.7563 6.01249 39.8126 7.06874 39.5688 7.79999C39.0001 9.34374 33.9626 10.6437 28.9251 11.05C30.0626 8.36874 32.1751 4.54999 34.5313 3.98124ZM13.0001 7.71874C12.7563 6.98749 13.8126 5.93124 14.3001 5.44374C15.4376 4.38749 16.4126 3.81874 17.3876 3.81874C17.6313 3.81874 17.8751 3.81874 18.0376 3.89999C20.4751 4.54999 22.5063 8.28749 23.6438 10.9687C18.6063 10.5625 13.5688 9.26249 13.0001 7.71874ZM42.0063 46.2312C42.0063 47.2875 41.1126 48.1812 40.0563 48.1812H12.4313C11.3751 48.1812 10.4813 47.2875 10.4813 46.2312V25.1875H41.9251V46.2312H42.0063ZM45.6626 21.5312C45.6626 22.0187 45.3376 22.3437 44.8501 22.3437H7.06885C6.6626 22.3437 6.25635 22.0187 6.25635 21.5312V15.3562C6.25635 14.95 6.6626 14.5437 7.06885 14.5437H44.8501C45.2563 14.5437 45.6626 14.8687 45.6626 15.3562V21.5312Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-dark">
                        Artists
                    </h4>
                    <p class="mb-8 text-body-color lg:mb-11">

                        Click down below to see all artists!
                    </p>
                    <a
                        href="/artist_view"
                        class="text-base font-medium text-body-color hover:text-primary"
                    >
                        See More
                    </a>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div
                    class="wow fadeInUp group mb-12 bg-white"
                    data-wow-delay=".15s"
                >
                    <div
                        class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary"
                    >
                <span
                    class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                        <svg
                            width="35"
                            height="35"
                            viewBox="0 0 52 52"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M49.8062 23.3187L43.875 17.3875C43.3063 16.8187 42.4125 16.8187 41.8438 17.3875C41.275 17.9562 41.275 18.85 41.8438 19.4187L46.9625 24.6187H27.4625V4.87498L32.5812 10.075C33.15 10.6437 34.0437 10.6437 34.6125 10.075C35.1812 9.50623 35.1812 8.61248 34.6125 8.04373L28.6812 2.11248C27.95 1.38123 26.975 0.974976 26 0.974976C24.9438 0.974976 24.05 1.38123 23.3188 2.11248L17.3875 8.04373C16.8187 8.61248 16.8187 9.50623 17.3875 10.075C17.6312 10.3187 18.0375 10.4812 18.3625 10.4812C18.6875 10.4812 19.0937 10.3187 19.3375 10.075L24.6187 4.87498V24.5375H4.95625L10.075 19.3375C10.6437 18.7687 10.6437 17.875 10.075 17.3062C9.50625 16.7375 8.6125 16.7375 8.04375 17.3062L2.1125 23.2375C0.65 24.7 0.65 27.1375 2.1125 28.6L8.04375 34.5312C8.2875 34.775 8.69375 34.9375 9.01875 34.9375C9.34375 34.9375 9.75 34.775 9.99375 34.5312C10.5625 33.9625 10.5625 33.0687 9.99375 32.5L4.79375 27.3H24.4563V47.125L19.2563 41.925C18.6875 41.3562 17.7938 41.3562 17.225 41.925C16.6563 42.4937 16.6563 43.3875 17.225 43.9562L23.1562 49.8875C23.8875 50.6187 24.8625 51.025 25.8375 51.025C26.8937 51.025 27.7875 50.6187 28.5187 49.8875L34.45 43.9562C35.0188 43.3875 35.0188 42.4937 34.45 41.925C33.8813 41.3562 32.9875 41.3562 32.4188 41.925L27.4625 47.125V27.3812H47.0438L41.8438 32.5812C41.275 33.15 41.275 34.0437 41.8438 34.6125C42.0875 34.8562 42.4938 35.0187 42.8188 35.0187C43.1438 35.0187 43.55 34.8562 43.7938 34.6125L49.725 28.6812C51.2688 27.2187 51.2687 24.7812 49.8062 23.3187Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-dark">
                        Albums
                    </h4>
                    <p class="mb-8 text-body-color lg:mb-11">
                        Click down below to see all albums!
                    </p>
                    <a
                        href="/album_view"
                        class="text-base font-medium text-body-color hover:text-primary"
                    >
                        See More
                    </a>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="wow fadeInUp group mb-12 bg-white" data-wow-delay=".2s">
                    <div
                        class="relative z-10 mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-primary"
                    >
                <span
                    class="absolute top-0 left-0 z-[-1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-2xl bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"
                ></span>
                        <svg
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z"
                                fill="white"
                            />
                            <path
                                d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z"
                                fill="white"
                            />
                            <path
                                d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z"
                                fill="white"
                            />
                            <path
                                d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-dark">
                        Genres
                    </h4>
                    <p class="mb-8 text-body-color lg:mb-11">
                        Click down below to see all genres!
                    </p>
                    <a
                        href="/genres_view"
                        class="text-base font-medium text-body-color hover:text-primary"
                    >
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
            <div class="mb-10 w-full">
                <a
                    href="/"
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
