@extends('layouts.default')

@section('title', 'Home')
@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="comics">

            <div class="container cont-cards">
                <div class="showtitle text-white fs-3 fw-bold text-uppercase">

                    current series
                </div>
                <div class="row pt-5">
                    <!-- COMIC CARDS -->
                    @foreach ($comicCards as $comicCard)
                        <div
                            class="col-xxl-2 col5 col-lg-3 col-md-4 col-sm-6 col-12  d-flex d-sm-block justify-content-center align-items-center">
                            <div
                                class="comic-card mt-3 d-flex flex-column justify-content-center align-items-center d-sm-block">
                                <img class="cover" src="{{ $comicCard['thumb'] }}" alt="{{ $comicCard['title'] }}">
                                <div class="text-cover text-center text-sm-start">
                                    <p class="text-white text-uppercase mt-3 ">{{ $comicCard['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="load text-white d-flex justify-content-center text-uppercase">
                    <span>load more</span>
                </div>
            </div>
        </div>

        {{--    <div class="items-dc">
        <div class="container p-5">
            <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
                <div class="itemdc text-white"> <!-- itemdc -->
                    <img :class="{ smalldc: text === 'Comic Shop Locator' }" :src="image" :alt="text">
                    <span class="ms-3 text-uppercase">{{ text }}</span>
                </div>
            </div>
        </div>
    </div> --}}
    </main>

@endsection
