<section class="drawer" id="drawer-name" data-drawer-target>
    <div class="drawer__overlay" data-drawer-close tabindex="-1">&times;</div>
    <div class="drawer__wrapper">
        <div class="drawer__header">
            <div class="drawer__title">
                <a class="text-decoration-none text-white fw-bolder" href="{{route('home')}}">
                    THE BLOG OF <br/>
                    MEHEDI SHAMIM
                </a>
            </div>
            <button class="drawer__close" data-drawer-close aria-label="Close Drawer"></button>
        </div>

        <div class="drawer__content">
            <section class="mt-3">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    class="d-block w-100"
                                    src="{{asset('assets/slider-1.jpg')}}"
                                    alt="First slide"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    src="{{asset('assets/slider-1.jpg')}}"
                                    alt="Second slide"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    src="{{asset('assets/slider-2.jpg')}}"
                                    alt="Third slide"
                                />
                            </div>
                        </div>
                        <a
                            class="carousel-control-prev"
                            href="#carouselExampleIndicators"
                            role="button"
                            data-slide="prev"
                        >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a
                            class="carousel-control-next"
                            href="#carouselExampleIndicators"
                            role="button"
                            data-slide="next"
                        >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
            </section>

            <ul class="list-group mt-4">
                @foreach(range(1, 10) as $item)
                    <li class="list-group-item">Hello world</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
