@extends('layouts.app')


@section('content')
    <div class="new_blog_header">
        <p>BLOGS</p>
    </div>
    <div class="new_blog_page_wrapper">
        <img src={{ asset('images/sand.webp') }} class="sand_img" alt="">
        <div class="container">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-center new_shadow_text fw-semibold">Nos Articles</h3>
                <h1 class="text-center mt-4 new_blog_heading fw-bold">Blogs</h1>
                <p class="text-center mt-4">Vivez une aventure inédite avec "Les Mystères de Saint-Malo" un escape game en
                    extérieur parfait pour le team
                    building. Explorez les rues historiques de Saint-Malo, résolvez des énigmes captivantes et découvrez des
                    secrets bien gardés tout en renforçant la cohésion de votre équipe. Conçu particulière pour le team
                    building
                    d'entreprise</p>
            </div>
            <div class="row mt-5 pt-5">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="col-lg-4 col-md-6">
                        <div class="new_blog_page_card">
                            <div class="card_contents">
                                <img src="{{ asset('images/Vector.png') }}" alt="">
                                <p>Vivez une aventure inédite avec "Les Mystères de Saint-Malo" un escape game en extérieur
                                    parfait pour le team building. (Blog {{ $i }})</p>
                                <button>
                                    <img src="{{ asset('images/icon-info.webp') }}" alt="">
                                    <span>Lire plus</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
