<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> --}}
    <title>Home</title>
    {{-- <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" /> --}}
    <link rel="stylesheet" href={{ asset('custom/css/owl.theme.default.min.css') }} />
    <link rel="stylesheet" href={{ asset('custom/css/owl.carousel.min.css') }} />
    <link rel="stylesheet" href={{ asset('custom/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href={{ asset('custom/css/style.css') }} />
    <link rel="stylesheet" href={{ asset('custom/css/new.css') }} />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.js"></script>
</head>

<body>
    <div class="new_menu_bar">
        <img src={{ asset('images/downLine.webp') }} class="downmenuline" alt="" />
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <img src={{ asset('images/logo.webp') }} class="d-lg-none new_main_logo" alt="" />

                <div class="d-flex new_menus align-items-center gap-3 menu_items">
                    <img src={{ asset('images/logo.webp') }} class="new_main_logo" alt="" />
                    <a href="index.html">
                        <p class="text-white">ACCUEIL</p>
                    </a>
                    <div class="dropdown">
                        <button class="btn menu_dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            NOS ESCAPE
                        </button>
                        <ul class="dropdown-menu">

                            @foreach ($nosEscapes as $escape)
                                <li class="dropdown-item">
                                    {{-- <a class="nav-link" href="{{ url('your-page-url/' . $escape->slug) }}"> --}}
                                    {{ $escape->name }}
                                    {{-- </a> --}}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="concept.html">
                        <p class="text-white">CONCEPT</p>
                    </a>
                    <a href="advantages.html">
                        <p class="text-white">ADVANTAGES</p>
                    </a>
                    <a href="blogs.html">
                        <p class="text-white">BLOG</p>
                    </a>
                    <a href="faqs">
                        <p class="text-white menu_items">FAQ</p>
                    </a>
                </div>

                <a href="tel:+33756138184">
                    <button class="content_btn header_phone">+33 7 56 13 81 84</button>
                </a>
                {{-- <i class="fa fa-bars text-white" aria-hidden="true"></i> --}}
            </div>
        </div>
    </div>

    @yield('content')


    <div class="footer_Section pb-3 newOfoter">
        <img src={{ asset('images/downLine.webp') }} class="footerUpLine" alt="" />
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3 my-3 f-flex">
                    <img src={{ asset('images/logo.webp') }} class="footer_logo" alt="" />
                </div>
                <div class="col-md-6 col-lg-3 my-3 f-flex">
                    <img src={{ asset('images/QRCODE.webp') }} width="150" class="qr_codes" alt="" />
                </div>
                <div class="col-md-6 col-lg-3 my-3 d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fw-bold text-warning">CONTACT</h3>
                    <p class="text-white m-0">Paris, France</p>
                    <p class="text-white m-0">+33 7 56 13 81 84</p>
                    <p class="text-white m-0">laboxaventures@gmail.com</p>
                </div>
                <div class="col-md-6 col-lg-3 my-3">
                    <div class="d-flex gap-4 socailimagesa justify-content-center">
                        <img src={{ asset('images/facebook.png') }} alt="" />
                        <img src={{ asset('images/instagram.png') }} alt="" />
                        <img src={{ asset('images/youtube.png') }} alt="" />
                    </div>
                </div>
            </div>
            <p class="text-center text-white mt-5">
                COPYRIGHT © LABOXAVENTURE | ALL RIGHT RESERVED
            </p>
        </div>
    </div>
</body>
<script src="{{ asset('custom/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('custom/js/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('custom/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('custom/js/script.js') }}"></script>
<script>
    $(document).ready(function() {
        var plusIconUrl = "{{ asset('images/plus.png') }}";
        var minusIconUrl = "{{ asset('images/minus.png') }}";
        // Section 1: Accordéons
        function initAccordions() {
            $(".custom-accordion-header").click(function() {
                const accordionItem = $(this).next(".custom-accordion-content");
                const icon = $(this).find(".custom-icon");

                if (accordionItem.is(":visible")) {
                    accordionItem.slideUp();
                    icon.attr("src", plusIconUrl).removeClass("minus");
                } else {
                    $(".custom-accordion-content").slideUp();
                    $(".custom-icon")
                        .attr("src", plusIconUrl)
                        .removeClass("minus");
                    accordionItem.slideDown();
                    icon.attr("src", minusIconUrl).addClass("minus");
                }
            });

            $(".custom_accordian_closed_header").on("click", function() {
                const parent = $(this).parent();
                const isActive = parent.hasClass("custom_accordian_wrapper_active");

                $(".custom_accordian_wrapper_active")
                    .removeClass("custom_accordian_wrapper_active")
                    .addClass("custom_accordian_wrapper_nonactive")
                    .find(".custom_accordian_body")
                    .slideUp();

                $(".minus").hide();
                $(".plus").show();

                if (!isActive) {
                    parent
                        .removeClass("custom_accordian_wrapper_nonactive")
                        .addClass("custom_accordian_wrapper_active")
                        .find(".custom_accordian_body")
                        .slideDown();
                    parent.find(".plus").hide();
                    parent.find(".minus").show();
                }
            });
        }

        initAccordions();

        function setGameItemScale() {
            // const windowWidth = $(window).width();
            // const items = $(".games-carousel .item");
            // items.css({
            //   transition: "transform 0.4s ease-in-out", // Smooth animation
            //   transform: windowWidth > 992 ? "scale(0.8)" : "scale(1)",
            // });
            // $(".games-carousel .owl-item.center .item").css({
            //   transition: "transform 0.4s ease-in-out", // Ensure smooth transition
            //   transform: windowWidth > 992 ? "scale(1.2)" : "scale(1)",
            // });
        }

        function initAvisCarousel() {
            const avis = $(".avis-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                center: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        center: false,
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                },
            });

            // Correct navigation for reviews
            $(".avis-next").click(() => avis.trigger("next.owl.carousel"));
            $(".avis-prev").click(() => avis.trigger("prev.owl.carousel"));
        }

        function initBNBCarousel() {
            let bnbCarousel = $(".bnb-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                center: true,
                autoplay: false,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                },
            });

            // Navigation binding
            $(document).on("click", ".bnb-next", function() {
                bnbCarousel.trigger("next.owl.carousel");
            });

            $(document).on("click", ".bnb-prev", function() {
                bnbCarousel.trigger("prev.owl.carousel");
            });
        }

        function initGamesCarousel() {
            const games = $(".games-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                center: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        center: false,
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                },
                onInitialized: setGameItemScale,
                onTranslated: setGameItemScale,
            });

            // Correct navigation for games
            $(".game-next").click(() => games.trigger("next.owl.carousel"));
            $(".game-prev").click(() => games.trigger("prev.owl.carousel"));
        }

        function initReviewsCarousel() {
            const comment = $(".reviews-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                center: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        center: false,
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                },
            });
            // Correct navigation for games
            $(".comment-next").click(() => comment.trigger("next.owl.carousel"));
            $(".comment-prev").click(() => comment.trigger("prev.owl.carousel"));
        }

        initReviewsCarousel();

        function initBlogCarousel() {
            const blogs = $(".blogs-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                center: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        center: false,
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                },
            });

            // Correct navigation for games
            $(".blogs-next").click(() => blogs.trigger("next.owl.carousel"));
            $(".blogs-prev").click(() => blogs.trigger("prev.owl.carousel"));
        }

        function initGenericCarousel(selector, nextBtn, prevBtn) {
            const carousel = $(selector).owlCarousel({
                loop: true,
                margin: 5,
                nav: false,
                dots: false,
                items: 1,
                smartSpeed: 1000,
            });

            $(nextBtn).click(() => carousel.trigger("next.owl.carousel"));
            $(prevBtn).click(() => carousel.trigger("prev.owl.carousel"));
        }
        initGenericCarousel(
            ".home-pad-carousel",
            ".home-pad-next",
            ".home-pad-prev"
        );
        initBlogCarousel();
        initAvisCarousel();
        initGamesCarousel();
        initBNBCarousel();
        $(".blog_wrapper").click(function() {
            window.location.href = "singleblog.html";
        });
    });
</script>

</html>
