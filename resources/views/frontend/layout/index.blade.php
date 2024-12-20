@extends('frontend.app')

@section('content')
    <main>
        <!-- hero area :: start  -->
        <section class="hero--area">
            <div class="container">
                <div class="section--title mb_35" data-aos="fade-zoom-in" data-aos-duration="1500">
                    <h1 class="sec--title">Featured Auctions</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel hero--slider">
                            <div class="item">
                                <div class="slider--box">
                                    <div class="row">
                                        <div class="col-lg-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                            data-aos-delay="300">
                                            <a href="car-single.html" class="featured--car"
                                                style="
                          background-image: url(./assets/images/car1.png);
                        ">
                                                <h3>
                                                    1987 Renault Alliance GTA Convertible Double
                                                    Motor....
                                                </h3>
                                                <div class="more--info">
                                                    <p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="23" viewBox="0 0 22 23" fill="none">
                                                            <path
                                                                d="M10.9365 20.6231C5.97082 20.6231 1.94531 16.5975 1.94531 11.6319C1.94531 6.66613 5.97082 2.64062 10.9365 2.64062C15.9022 2.64062 19.9278 6.66613 19.9278 11.6319C19.9278 16.5975 15.9022 20.6231 10.9365 20.6231ZM10.9365 18.8248C14.9091 18.8248 18.1295 15.6044 18.1295 11.6319C18.1295 7.65928 14.9091 4.43887 10.9365 4.43887C6.96396 4.43887 3.74356 7.65928 3.74356 11.6319C3.74356 15.6044 6.96396 18.8248 10.9365 18.8248ZM11.8357 11.6319H15.4322V13.4301H10.0374V7.13624H11.8357V11.6319Z"
                                                                fill="#B3BAC5" />
                                                        </svg>
                                                        2 day left
                                                    </p>
                                                    <p><span>Bid:</span> $10,000</p>
                                                </div>
                                                <p class="category">Featured</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 slider-right-box">
                                            <div class="row">
                                                <div class="col-sm-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                    data-aos-delay="400">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car2.png" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                    data-aos-delay="500">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car3.png" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                    data-aos-delay="600">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car4.png" alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                    data-aos-delay="700">
                                                    <a href="#" class="more--photos--box" id="morePhotosBox">
                                                        12+<br />
                                                        Photos
                                                    </a>
                                                    <!-- gallery  -->
                                                    <div class="gallery">
                                                        <a href="./assets/images/car1.png"> </a>
                                                        <a href="./assets/images/car2.png"> </a>
                                                        <a href="./assets/images/car3.png"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="slider--box">
                                    <div class="row">
                                        <div class="col-lg-6 mt_20">
                                            <a href="car-single.html" class="featured--car"
                                                style="
                          background-image: url(./assets/images/car6.png);
                        ">
                                                <h3>
                                                    1987 Renault Alliance GTA Convertible Double
                                                    Motor....
                                                </h3>
                                                <div class="more--info">
                                                    <p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="23" viewBox="0 0 22 23" fill="none">
                                                            <path
                                                                d="M10.9365 20.6231C5.97082 20.6231 1.94531 16.5975 1.94531 11.6319C1.94531 6.66613 5.97082 2.64062 10.9365 2.64062C15.9022 2.64062 19.9278 6.66613 19.9278 11.6319C19.9278 16.5975 15.9022 20.6231 10.9365 20.6231ZM10.9365 18.8248C14.9091 18.8248 18.1295 15.6044 18.1295 11.6319C18.1295 7.65928 14.9091 4.43887 10.9365 4.43887C6.96396 4.43887 3.74356 7.65928 3.74356 11.6319C3.74356 15.6044 6.96396 18.8248 10.9365 18.8248ZM11.8357 11.6319H15.4322V13.4301H10.0374V7.13624H11.8357V11.6319Z"
                                                                fill="#B3BAC5" />
                                                        </svg>
                                                        2 day left
                                                    </p>
                                                    <p><span>Bid:</span> $10,000</p>
                                                </div>
                                                <p class="category">Featured</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 slider-right-box">
                                            <div class="row">
                                                <div class="col-sm-6 mt_20">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car16.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car14.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20">
                                                    <a href="car-single.html">
                                                        <img class="w-100" src="./assets/images/car15.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 mt_20">
                                                    <a href="#" class="more--photos--box" id="morePhotosBox">
                                                        12+<br />
                                                        Photos
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- lightbox gallery  -->
            <div class="gallery">
                <a href="./assets/images/car1.png"> </a>
                <a href="./assets/images/car2.png"> </a>
                <a href="./assets/images/car3.png"> </a>
            </div>
        </section>
        <!-- hero arean :: end -->

        <!-- live auctions area :: start -->
        <section class="live--auctions--area">
            <div class="container">
                <!-- section title  -->
                <div class="section--title mb_50" data-aos="fade-zoom-in" data-aos-duration="1500" data-aos-offset="0">
                    <h3 class="sec--title">Our Live Auctions</h3>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="filter--and--category">
                            <!-- category and sort  -->
                            <div class="category--and--sort" data-aos="fade-zoom-in" data-aos-duration="400"
                                data-aos-delay="100" data-aos-offset="0">
                                <!-- car category  -->

                                <!-- sort by  -->

                            </div>
                            <!-- filters  -->
                            @include('frontend.layout.search')
                        </div>

                    </div>
                    </form>

                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-offset="0">
                    <!-- car card  -->
                    @foreach ($cars as $index => $car)
                        <div class="car--card">
                            <div class="img--area">
                                <img class="w-100" src="./assets/images/car5.png" alt="" />
                            </div>
                            <div class="car--info">
                                <div class="bid--info">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                            viewBox="0 0 23 23" fill="none">
                                            <path
                                                d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                fill="#141414" />
                                        </svg>
                                        {{ $left_time }} left
                                    <p>
                                        <span>Bid starts from</span>
                                        ${{ $car['minimum_price'] }}
                                    </p>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="star">
                                        <path
                                            d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                            stroke="#000000" stroke-width="1" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="car--model">
                                    <a href="{{ route('car_single.index', $car->id) }}">{{ $car['title'] }}</a>
                                    <p>
                                        {{ $car['year'] }},{{ $car['model'] }}, {{ $car['exterior_color'] }}
                                    </p>
                                    <div class="card--footer">
                                        <p>{{ $car['engine'] }},{{ $car['transmission'] }}</p>
                                        <a href="{{ route('car_single.index', $car->id) }}" class="buttonv2 button">Place
                                            a
                                            Bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
                <span>
                    {{ $cars->links() }}
                </span>
            </div>
        </section>
        <!-- live auctions area :: end -->

        <!-- why cars and bids area :: start  -->
        <section class="cars--and--bids--area" style="background-image: url(./assets/images/car-and-bids-bg.png)">
            <div class="container">
                <!-- section--title  -->
                <div class="text-center section--title" data-aos="fade-in" data-aos-duration="1500"
                    data-aos-delay="100">
                    <h3 class="sec--title">Why Cars & Bids?</h3>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mt_20" data-aos="fade-in" data-aos-duration="1200">
                        <!-- counter box  -->
                        <div class="counter--box first">
                            <h4>

                                {{ $auction_completion['value'] }} +
                            </h4>
                            <p>Auctions completed</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mt_20" data-aos="fade-in" data-aos-duration="1200"
                        data-aos-delay="100">
                        <!-- counter box  -->
                        <div class="counter--box">
                            <h4>


                                $ {{ $value_sold['value'] }} M+
                            </h4>
                            <p>Value of cars sold</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mt_20" data-aos="fade-in" data-aos-duration="1200"
                        data-aos-delay="200">
                        <!-- counter box  -->
                        <div class="counter--box three">
                            <h4>

                                {{ $sell_percent['value'] }} %+
                            </h4>
                            <p>Sell-through rate</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mt_20" data-aos="fade-in" data-aos-duration="1200"
                        data-aos-delay="300">
                        <!-- counter box  -->
                        <div class="counter--box">
                            <h4>

                                {{ $register_member['value'] }} K+
                            </h4>
                            <p>Registered members</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why cars and bids area :: end  -->

    </main>
@endsection
