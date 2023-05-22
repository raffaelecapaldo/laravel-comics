<footer>
    <div class="footer-nav">
        <div
            class="container container-footernav d-flex justify-content-between text-white pt-5 d-md-flex justify-content-center  d-block">
            <div class="links row ">
                @foreach ($footerLinks as $groupLinks)
                    <div class="group-link col-4 ">
                        <h3 class="fw-bold fs-5 text-uppercase">{{ $groupLinks['title'] }}</h3>
                        <ul>
                            @foreach ($groupLinks['links'] as $link)
                                <a class="small" href="{{ $link['url'] }}">
                                    <li>{{ $link['text'] }}</li>
                                </a>
                            @endforeach
                        </ul>
                        @foreach ($groupLinks['inside'] ?? [] as $item)
                            <div>
                                <h3 class="fw-bold fs-5 text-uppercase mt-3">{{ $item['title'] }}</h3>
                                <ul>
                                    @foreach ($item['links'] as $link)
                                        <a class="small" :href="{{ $link['url'] }}">
                                            <li>{{ $link['text'] }}</li>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
            <div class="bg-footer d-none d-lg-block">
                <img src="/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
</footer>
