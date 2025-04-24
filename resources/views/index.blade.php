@extends('layouts.app')

@section('content')
    <div class="header_bar">
        {{ $homeHeader->top_line }}
    </div>

    <div class="top_header min700">
        <div class="container">
            <div class="top_header_content text-uppercase">
                <h1> {{ $homeHeader->main_heading }} <span class="text_cream"> {{ $homeHeader->color_heading }}</span></h1>
                <p class="fs-5 text-white">
                    {{ $homeHeader->paragraph }}
                </p>
                <div class="d-flex gap-3 my-5">
                    <button class="header_btn button_shadow">
                        <img src={{ asset('images/icon-key.webp') }} alt="" />
                        BOOK NOW
                    </button>
                    <button class="header_btn_white bg-light border-0">
                        PLAN EVENTS
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="about_us_sections">
        <img src={{ asset('images/upLine.webp') }} class="videoUpLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="videoDnLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="aboutdownUP" alt="" />
        <div class="container">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-center text_cream text-uppercase fw-800">
                    {{ $marketing->heading }}
                </h1>
                <p class="text-center text-white mt-4">
                    {{ $marketing->paragraph_one }}
                </p>
                <div class="d-flex justify-content-center">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="video_section_2">
        <img src={{ asset('images/upLine.webp') }} class="videoUpLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="videoDnLine" alt="" />
        <div class="container">
            @if ($homeVideo)
                <!-- Check if $homeVideo is not null -->
                <div class="video_wrapper">
                    <iframe src="{{ $homeVideo->video_url }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-lg-8 mx-auto mt-5">
                    <p class="text-center text-white">
                        {{ $homeVideo->paragraph_one }}
                    </p>
                    <p class="text-center text-white">
                        {{ $homeVideo->paragraph_two }}
                    </p>
                </div>
            @else
                <!-- Fallback message if no home video exists -->
                <p class="text-center text-white">No video section available at the moment.</p>
            @endif
        </div>
    </div>
    <div class="new_all_product_wrap">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">NOS ESCAPE</h1>

            <div class="games-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="new_game_slider_wrapper">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/16/97/f7/la-salle-prestige.jpg?w=900&h=500&s=1"
                            class="object-fit-cover slides_img" alt="" />
                        <div class="slides_content">
                            <p class="text-white">
                                Game Theme:<br />
                                Outdoors | 1960's | Rochester woods
                            </p>
                            <h1 class="slideHeading fw-700 text-warning">
                                Bigfoot's Revenge
                            </h1>
                            <p class="fs-5 text-secondary">
                                Jim Goodall, leader of Hemoglobin's Mythical Creature
                                Division, has a mission for you. Over the past month Bigfoot
                                has become erratic, and Jim has suddenly gone missing...
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-tachometer text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">Difficulty</p>
                                        <p class="fs-6 m-0 text-secondary">Medium</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-users text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">No of players:</p>
                                        <p class="fs-6 m-0 text-secondary">2 - 12 Players</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-clock-o text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">Time</p>
                                        <p class="fs-6 m-0 text-secondary">60 min</p>
                                    </div>
                                </div>
                            </div>
                            <button class="content_btn mt-4">VOIR +</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="new_game_slider_wrapper">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/d9/95/93/are-you-smarter-than.jpg?w=900&h=500&s=1"
                            class="object-fit-cover slides_img" alt="" />
                        <div class="slides_content">
                            <p class="text-white">
                                Game Theme:<br />
                                Outdoors | 1960's | Rochester woods
                            </p>
                            <h1 class="slideHeading fw-700 text-warning">
                                Bigfoot's Revenge
                            </h1>
                            <p class="fs-5 text-secondary">
                                Jim Goodall, leader of Hemoglobin's Mythical Creature
                                Division, has a mission for you. Over the past month Bigfoot
                                has become erratic, and Jim has suddenly gone missing...
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-tachometer text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">Difficulty</p>
                                        <p class="fs-6 m-0 text-secondary">Medium</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-users text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">No of players:</p>
                                        <p class="fs-6 m-0 text-secondary">2 - 12 Players</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa fa-clock-o text-warning fs-1" aria-hidden="true"></i>
                                    <div class="text-warning d-flex flex-column justify-content-center align-items-center">
                                        <p class="fs-5 m-0">Time</p>
                                        <p class="fs-6 m-0 text-secondary">60 min</p>
                                    </div>
                                </div>
                            </div>
                            <button class="content_btn mt-4">VOIR +</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-4 align-items-center mt-5 justify-content-center">
                <img src={{ asset('images/prev.png') }} class="slide_navs game-prev" alt="" />
                <img src={{ asset('images/next.png') }} class="slide_navs game-next" alt="" />
            </div>
        </div>
    </div>

    <div class="about_us_section position-relative">
        <img src="./assets/images/upLine.webp" class="videoUpLine" alt="" />

        <div class="container py-5">
            <div class="d-flex gap-4 mb-5 align-items-center justify-content-center">
                <img src="./assets/images/myline-left.png" class="img-fluid linesmain" alt="" />
                <h1 class="text-center gradient_text fw-bold m-0 text-nowrap">
                    OUR CONCEPT
                </h1>
                <img src="./assets/images/myline-right.png" class="img-fluid linesmain" alt="" />
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 my-3 text-white text-center text-lg-start">
                    <h3 class="text-white fw-bold">ABOUT LABOX</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                        ratione dolores, cum expedita eum commodi inventore voluptate
                        similique laboriosam accusamus illo odio voluptatem obcaecati
                        maxime nesciunt doloremque sapiente fuga aut!
                    </p>
                    <button class="content_btn m-0 mt-4 d-block mx-auto mx-lg-0">READ MORE</button>
                </div>
                <div class="col-lg-5 my-3">
                    <img src={{ asset('images/concept.png') }} class="img-fluid rounded-3" alt="" />
                </div>
            </div>
        </div>
        <img src="./assets/images/downLine.webp" class="aboutDnLine" alt="" />
    </div>
    <div class="new_all_product_wrap newbgg">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">LES ADVANTAGES</h1>
            <div class="airbnb__content">
                <div class="bnb-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 gap-lg-2 p-3">
                            <div class="col-lg-6 text-white">
                                <h2 class="fw-700">LES ADVANTAGES</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit autem nam quisquam assumenda officia, eveniet
                                    officiis voluptates doloremque fuga quasi delectus
                                    repellendus ullam perspiciatis error tempora optio quaerat
                                    labore non.
                                </p>
                                <button class="content_btn mt-4">LIRE PLUS</button>
                            </div>

                            <div class="new_frame">
                                <img src="https://st3.depositphotos.com/1686467/15351/i/450/depositphotos_153515168-stock-photo-a-young-man-sits-on.jpg"
                                    class="bnb_game" alt="" />
                            </div>

                            <div class="new_frame">
                                <img src="https://st3.depositphotos.com/1686467/15351/i/450/depositphotos_153515168-stock-photo-a-young-man-sits-on.jpg"
                                    class="bnb_game" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 gap-lg-2 p-3">
                            <div class="col-lg-6 text-white">
                                <h2 class="fw-700">LES ADVANTAGES</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit autem nam quisquam assumenda officia, eveniet
                                    officiis voluptates doloremque fuga quasi delectus
                                    repellendus ullam perspiciatis error tempora optio quaerat
                                    labore non.
                                </p>
                                <button class="content_btn mt-4">LIRE PLUS</button>
                            </div>

                            <div class="new_frame">
                                <img src="https://st3.depositphotos.com/1686467/15351/i/450/depositphotos_153515168-stock-photo-a-young-man-sits-on.jpg"
                                    class="bnb_game" alt="" />
                            </div>

                            <div class="new_frame">
                                <img src="https://st3.depositphotos.com/1686467/15351/i/450/depositphotos_153515168-stock-photo-a-young-man-sits-on.jpg"
                                    class="bnb_game" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-4 align-items-center mt-5 justify-content-center">
                    <img src={{ asset('images/prev.png') }} class="slide_navs bnb-prev" alt="" />
                    <img src={{ asset('images/next.png') }} class="slide_navs bnb-next" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="review_Section">
        <img src={{ asset('images/downLine.webp') }} class="aboutdownUP" alt="" />
        <img src={{ asset('images/upLine.webp') }} class="videoUpLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="videoDnLine" alt="" />
        <div class="container">
            <h1 class="text-center fw-bold mb-5">USER REVIEWS</h1>
            <div class="reviews-carousel owl-carousel owl-theme">

                @forelse($reviews as $review)
                    <div class="item">
                        <div class="comment_wrapper">
                            <p>{{ $review->comment }}</p> <!-- Display review comment -->
                            <p class="h5 fw-bold mt-4">"{{ $review->user_name }}"</p> <!-- Display the username -->
                        </div>
                    </div>
                @empty
                    <p>No reviews available.</p> <!-- Show message when no reviews exist -->
                @endforelse



            </div>
            <div class="d-flex gap-4 align-items-center mt-5 justify-content-center">
                <img src={{ asset('images/prev.png') }} class="slide_navs comment-prev" alt="" />
                <img src={{ asset('images/next.png') }} class="slide_navs comment-next" alt="" />
            </div>
        </div>
    </div>
    <div class="blogs_section">
        <img src="./assets/images/upLine.webp" class="videoUpLine" alt="" />
        <div class="container">
            <h1 class="text-center fw-bold text-white position-relative mb-5">
                OUR BLOGS
            </h1>

            <div class="blogs-carousel owl-carousel owl-theme">
                {{-- <div class="item">
                    <div class="blog_wrapper">
                        <img src="https://www.bigescaperooms.com/wp-content/uploads/2018/11/detective-3519985_1280.jpg"
                            class="blog_img" alt="" />
                        <p class="blog_name text-center fs-4 m-0 my-2">SPECIAL BLOG 1</p>
                        <div class="blog_des">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Expedita tenetur corrupti quisquam sed.
                        </div>
                        <button class="content_btn mt-4 w-75 mx-auto">LIRE PLUS</button>
                    </div>
                </div> --}}

                @foreach ($blogs as $blog)
                    <div class="item">
                        <div class="blog_wrapper">
                            <!-- Display the image -->
                            <img src="{{ $blog->image_url }}" class="blog_img" alt="{{ $blog->title }}" />

                            <!-- Display the blog title -->
                            <p class="blog_name text-center fs-4 m-0 my-2">{{ $blog->title }}</p>

                            <!-- Display the blog description -->
                            <div class="blog_des">
                                {{ $blog->description }}
                            </div>

                            <!-- Link to the blog page (optional) -->
                            <a href="{{ url('blog/' . $blog->slug) }}">
                                <button class="content_btn mt-4 w-75 mx-auto">LIRE PLUS</button>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex gap-4 align-items-center mt-5 justify-content-center">
                <img src={{ asset('images/prev.png') }} class="slide_navs blogs-prev" alt="" />
                <img src={{ asset('images/next.png') }} class="slide_navs blogs-next" alt="" />

            </div>
        </div>
    </div>
    <div class="faqs_section">
        <img src="./assets/images/upLine.webp" class="videoUpLine" alt="" />
        <div class="container">
            <h1 class="text-center fw-bold text-white position-relative mb-5">
                F.A.Q
            </h1>
            <div class="col-lg-8 mx-auto">
                <div class="faq_section_wrapper">


                    @foreach ($faqs as $faq)
                        <div class="custom-accordion-item">
                            <div class="custom-accordian-body">
                                <div class="custom-accordion-header">
                                    <span>{{ $faq->question }}</span>
                                    <img class="custom-icon" src={{ asset('images/plus.png') }} alt="Expand" />
                                </div>
                                <div class="custom-accordion-content">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <button class="content_btn mt-4 mx-auto">LIRE PLUS</button>
                </div>
            </div>
        </div>
    </div>
    <div class="new_all_product_wrap newbgg">
        <div class="container-fluid">
            <h1 class="text-center fw-bold mb-5">
                {{ $homeAboutUs->main_heading }}
            </h1>
            <div class="row mt-5">
                <div class="col-lg-3 text-center">
                    <h1 class="fw-bolder"> {{ $homeAboutUs->sub_heading_1 }}</h1>
                    <p class="fw-500 fs-4 mt-3">
                        {{ $homeAboutUs->description_1 }}
                    </p>
                </div>
                <div class="col-lg-3 text-center">
                    <h1 class="fw-bolder"> {{ $homeAboutUs->sub_heading_2 }}</h1>
                    <p class="fw-500 fs-4 mt-3">
                        {{ $homeAboutUs->description_2 }}
                    </p>
                </div>
                <div class="col-lg-3 text-center">
                    <h1 class="fw-bolder"> {{ $homeAboutUs->sub_heading_3 }}</h1>
                    <p class="fw-500 fs-4 mt-3">
                        {{ $homeAboutUs->description_3 }}
                    </p>
                </div>
                <div class="col-lg-3 text-center">
                    <h1 class="fw-bolder"> {{ $homeAboutUs->sub_heading_4 }}</h1>
                    <p class="fw-500 fs-4 mt-3">
                        {{ $homeAboutUs->description_4 }}
                    </p>
                </div>
              
                
               
            </div>
        </div>
    </div>
    <div class="events_section">
        <img src={{ asset('images/upLine.webp') }} class="videoUpLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="videoDnLine" alt="" />
        <img src={{ asset('images/downLine.webp') }} class="aboutdownUP" alt="" />
        <img src={{ asset('images/upLine.webp') }} class="mapline_down" alt="" />
        <!-- <img src="./assets/images/downLine.webp" class="footerUpLine" alt="" /> -->
        <div class="container">
            <div class="col-lg-6">
                <h1 class="text_cream events_heading"> {{ $homeEventSection->heading }}</h1>
                <h4 class="h4 text-uppercase text-light">
                    {{ $homeEventSection->subheading }}
                </h4>
                <p class="text-white mt-4">
                    {{ $homeEventSection->paragraph }}
                </p>

                <button class="events_btn button_shadow w-auto">
                    LEARN MORE ABOUT EVENTS
                </button>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src={{ asset('images/mapimage.PNG') }} class="mapImage" alt="" />
        <img src={{ asset('images/upLine.webp') }} class="mapline_down" alt="" />
    </div>
@endsection
