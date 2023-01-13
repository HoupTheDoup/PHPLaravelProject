<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Spotifile
    </title>
    <link
        rel="shortcut icon"
        href="assets/images/favicon.png"
        type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <link rel="stylesheet" href="/assets/css/additional.css" />

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
<!-- ====== Navbar Section Start -->
<div
    class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent"
>
    @yield('navbar')
</div>
<!-- ====== Navbar Section End -->

<!-- ====== Hero Section Start -->
<div
    id="home"
    class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]"
>
    @yield('section')

</div>
<!-- ====== Hero Section End -->

<!-- ====== Features Section Start -->
<section class="pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
    @yield('features')
</section>
<!-- ====== Features Section End -->

<!-- ====== Footer Section Start -->
<footer
    class="wow fadeInUp relative z-10 bg-black pt-20 lg:pt-[120px]"
    data-wow-delay=".15s"
>
    <div class="container">
        @yield('footer')
    </div>

    <div class="mt-12 border-t border-opacity-40 py-8 lg:mt-[60px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                    <div class="my-1">
                        <div
                            class="-mx-3 flex items-center justify-center md:justify-start"
                        >
                            <p style="text-align: center; color: white">© 2023 Spotifile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <span class="absolute left-0 top-0 z-[-1]">
          <img src="assets/images/footer/shape-1.svg" alt="" />
        </span>

        <span class="absolute bottom-0 right-0 z-[-1]">
          <img src="assets/images/footer/shape-3.svg" alt="" />
        </span>

    </div>
</footer>
<!-- ====== Footer Section End -->

<!-- ====== Back To Top Start -->
<a
    href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark"
>
      <span
          class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
      ></span>
</a>
<!-- ====== Back To Top End -->

<!-- ====== All Scripts -->

<script src="assets/js/mainn.js"></script>
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }

    window.document.addEventListener("scroll", onScroll);
</script>
</body>
</html>
