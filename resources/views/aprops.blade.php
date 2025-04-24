@extends('layouts.app')


@section('content')
    <div class="aprops_header">
        <p>A PROPS</p>
    </div>
    <div class="new_blog_page_wrapper">
        <img src={{ asset('images/sand.webp') }} class="sand_img" alt="">
        <div class="container">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-center new_shadow_text fw-semibold text-uppercase">A propos</h3>
                <h1 class="text-center mt-4 new_blog_heading fw-bold text-uppercase">labox-aventures</h1>
                <p class="text-center mt-4">
                    Vivez une aventure inédite avec "Les Mystères de Saint-Malo" un escape game en extérieur parfait pour le
                    team building. Explorez les rues historiques de Saint-Malo, résolvez des énigmes captivantes et
                    découvrez des secrets bien gardés tout en renforçant la cohésion de votre équipe. Conçu particulière
                    pour le team building d'entreprise, ou les groupes d'amis, ce jeu stimulant mettra à l'épreuve vos
                    compétences et votre niveau de collaboration. Idéal pour des sorties entre collègues ou pour des groupes
                </p>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="new_video_frame">
                    <div class="new_video_wrap">


                        <!-- YouTube iframe (video) -->
                        <iframe id="video-frame"
                            src="https://www.youtube.com/embed/3El-xx1g-2c?rel=0&showinfo=0&autohide=1&modestbranding=1&controls=1&disablekb=1"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="aprops_intro">
            <div class="container">
                <div class="col-lg-9 mx-auto">
                    Vivez une aventure inédite avec "Les Mystères de Saint-Malo" un escape game en extérieur parfait pour le
                    team building. Explorez les rues historiques de Saint-Malo, résolvez des énigmes captivantes et
                    découvrez des secrets bien gardés tout en renforçant la cohésion de votre équipe. Conçu particulière
                    pour le team building d'entreprise, ou les groupes d'amis, ce jeu stimulant mettra à l'épreuve vos
                    compétences et votre niveau
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.youtube.com/iframe_api"></script>
@endsection
