@extends('frontend.app')

@section('content')
    <main>
        <!-- About Us Area :: Start  -->
        <section class="about--us--area">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-lg-6 mt_30">
                        <div class="about--content">
                            <h1 data-aos="fade-up" data-aos-duration="1000">About US</h1>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                Over the last few years, many car enthusiasts have started
                                turning their attention to recent vehicles – cars from the
                                1980s, 1990s, and beyond. Automotive reviewer <a
                                    href="https://www.youtube.com/channel/UCsqjHFMB_JYTaEnf_vmTNqg" target="_blank">Doug
                                    DeMuro</a> realized there isn’t yet a specific place that’s focused
                                solely on buying and selling these modern enthusiast cars, but
                                there should be – so he and a team created Cars & Bids, with
                                its simple name modeled after Doug’s famous pursuit of “quirks
                                and features.
                            </p>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                                Over the last few years, many car enthusiasts have started
                                turning their attention to recent vehicles – cars from the
                                1980s, 1990s, and beyond. Automotive reviewer <a
                                    href="https://www.youtube.com/channel/UCsqjHFMB_JYTaEnf_vmTNqg" target="_blank">Doug
                                    DeMuro</a> realized there isn’t yet a specific place that’s focused
                                solely on buying and selling these modern enthusiast cars..
                            </p>
                            <ul>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <strong>We’re focused on modern enthusiast cars:</strong> the 1980s to the 2020s. That
                                    means anyone interested in
                                    the next era of exciting cars will come here first to buy
                                    and sell.
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                                    <strong>We’re focused on modern enthusiast cars:</strong> the 1980s to the 2020s. That
                                    means anyone interested in
                                    the next era of exciting cars will come here first to buy
                                    and sell.
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <strong>We’re focused on modern enthusiast cars:</strong> the 1980s to the 2020s. That
                                    means anyone interested in
                                    the next era of exciting cars will come here first to buy
                                    and sell.
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350">
                                    <strong>We’re focused on modern enthusiast cars:</strong> the 1980s to the 2020s. That
                                    means anyone interested in
                                    the next era of exciting cars will come here first to buy
                                    and sell.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6 mt_30" data-aos="fade-up" data-aos-duration="1000">
                        <div class="img--area">
                            <img class="w-100" src="./assets/images/about.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                        <!-- car review  -->
                        <div class="car--review">
                            <img src="./assets/images/about.png" alt="" />
                            <div>
                                <h4>Saudi Cars Hubs</h4>
                                <p>
                                    Car reviewer Doug DeMuro brings a huge audience to
                                    <strong>Saudi Cars Hubs</strong> — along with his
                                    commentary.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 advantages">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                <div class="advantage--card">
                                    <!-- icon  -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41"
                                            viewBox="0 0 40 41" fill="none">
                                            <path
                                                d="M30.7827 28.5502L31.4327 33.8168C31.5993 35.2002 30.116 36.1668 28.9327 35.4502L23.166 32.0168C22.766 31.7835 22.666 31.2835 22.8827 30.8835C23.716 29.3502 24.166 27.6168 24.166 25.8835C24.166 19.7835 18.9327 14.8168 12.4993 14.8168C11.1827 14.8168 9.89933 15.0168 8.69933 15.4168C8.08267 15.6168 7.48267 15.0502 7.63267 14.4168C9.14933 8.35016 14.9827 3.8335 21.9493 3.8335C30.0827 3.8335 36.666 9.9835 36.666 17.5668C36.666 22.0668 34.3493 26.0502 30.7827 28.5502Z"
                                                fill="#FD7F54" />
                                            <path
                                                d="M21.6654 25.8831C21.6654 27.8664 20.932 29.6997 19.6987 31.1497C18.0487 33.1497 15.432 34.4331 12.4987 34.4331L8.1487 37.0164C7.41536 37.4664 6.48203 36.8497 6.58203 35.9997L6.9987 32.7164C4.76536 31.1664 3.33203 28.6831 3.33203 25.8831C3.33203 22.9497 4.8987 20.3664 7.2987 18.8331C8.78203 17.8664 10.5654 17.3164 12.4987 17.3164C17.5654 17.3164 21.6654 21.1497 21.6654 25.8831Z"
                                                fill="#FD7F54" />
                                        </svg>
                                    </div>
                                    <h4>{{ $cool_car['title'] }}</h4>
                                    <p>
                                        {!! $cool_car['description'] !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="advantage--card">
                                    <!-- icon  -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41"
                                            viewBox="0 0 40 41" fill="none">
                                            <path
                                                d="M30.7827 28.5502L31.4327 33.8168C31.5993 35.2002 30.116 36.1668 28.9327 35.4502L23.166 32.0168C22.766 31.7835 22.666 31.2835 22.8827 30.8835C23.716 29.3502 24.166 27.6168 24.166 25.8835C24.166 19.7835 18.9327 14.8168 12.4993 14.8168C11.1827 14.8168 9.89933 15.0168 8.69933 15.4168C8.08267 15.6168 7.48267 15.0502 7.63267 14.4168C9.14933 8.35016 14.9827 3.8335 21.9493 3.8335C30.0827 3.8335 36.666 9.9835 36.666 17.5668C36.666 22.0668 34.3493 26.0502 30.7827 28.5502Z"
                                                fill="#FD7F54" />
                                            <path
                                                d="M21.6654 25.8831C21.6654 27.8664 20.932 29.6997 19.6987 31.1497C18.0487 33.1497 15.432 34.4331 12.4987 34.4331L8.1487 37.0164C7.41536 37.4664 6.48203 36.8497 6.58203 35.9997L6.9987 32.7164C4.76536 31.1664 3.33203 28.6831 3.33203 25.8831C3.33203 22.9497 4.8987 20.3664 7.2987 18.8331C8.78203 17.8664 10.5654 17.3164 12.4987 17.3164C17.5654 17.3164 21.6654 21.1497 21.6654 25.8831Z"
                                                fill="#FD7F54" />
                                        </svg>
                                    </div>
                                    <h4>{{ $fees['title'] }}</h4>
                                    <p>
                                        {!! $fees['description'] !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="advantage--card">
                                    <!-- icon  -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41"
                                            viewBox="0 0 40 41" fill="none">
                                            <path
                                                d="M30.7827 28.5502L31.4327 33.8168C31.5993 35.2002 30.116 36.1668 28.9327 35.4502L23.166 32.0168C22.766 31.7835 22.666 31.2835 22.8827 30.8835C23.716 29.3502 24.166 27.6168 24.166 25.8835C24.166 19.7835 18.9327 14.8168 12.4993 14.8168C11.1827 14.8168 9.89933 15.0168 8.69933 15.4168C8.08267 15.6168 7.48267 15.0502 7.63267 14.4168C9.14933 8.35016 14.9827 3.8335 21.9493 3.8335C30.0827 3.8335 36.666 9.9835 36.666 17.5668C36.666 22.0668 34.3493 26.0502 30.7827 28.5502Z"
                                                fill="#FD7F54" />
                                            <path
                                                d="M21.6654 25.8831C21.6654 27.8664 20.932 29.6997 19.6987 31.1497C18.0487 33.1497 15.432 34.4331 12.4987 34.4331L8.1487 37.0164C7.41536 37.4664 6.48203 36.8497 6.58203 35.9997L6.9987 32.7164C4.76536 31.1664 3.33203 28.6831 3.33203 25.8831C3.33203 22.9497 4.8987 20.3664 7.2987 18.8331C8.78203 17.8664 10.5654 17.3164 12.4987 17.3164C17.5654 17.3164 21.6654 21.1497 21.6654 25.8831Z"
                                                fill="#FD7F54" />
                                        </svg>
                                    </div>
                                    <h4>More Information</h4>
                                    <p>
                                        We provide vehicle history reports<br />
                                        for every vehicle listed on Cars &<br />
                                        Bids — for free.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="300">
                                <div class="advantage--card">
                                    <!-- icon  -->
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41"
                                            viewBox="0 0 40 41" fill="none">
                                            <path
                                                d="M30.7827 28.5502L31.4327 33.8168C31.5993 35.2002 30.116 36.1668 28.9327 35.4502L23.166 32.0168C22.766 31.7835 22.666 31.2835 22.8827 30.8835C23.716 29.3502 24.166 27.6168 24.166 25.8835C24.166 19.7835 18.9327 14.8168 12.4993 14.8168C11.1827 14.8168 9.89933 15.0168 8.69933 15.4168C8.08267 15.6168 7.48267 15.0502 7.63267 14.4168C9.14933 8.35016 14.9827 3.8335 21.9493 3.8335C30.0827 3.8335 36.666 9.9835 36.666 17.5668C36.666 22.0668 34.3493 26.0502 30.7827 28.5502Z"
                                                fill="#FD7F54" />
                                            <path
                                                d="M21.6654 25.8831C21.6654 27.8664 20.932 29.6997 19.6987 31.1497C18.0487 33.1497 15.432 34.4331 12.4987 34.4331L8.1487 37.0164C7.41536 37.4664 6.48203 36.8497 6.58203 35.9997L6.9987 32.7164C4.76536 31.1664 3.33203 28.6831 3.33203 25.8831C3.33203 22.9497 4.8987 20.3664 7.2987 18.8331C8.78203 17.8664 10.5654 17.3164 12.4987 17.3164C17.5654 17.3164 21.6654 21.1497 21.6654 25.8831Z"
                                                fill="#FD7F54" />
                                        </svg>
                                    </div>
                                    <h4>Easy to Use</h4>
                                    <p>
                                        We’ve developed several new<br />
                                        features that innovate buying and<br />
                                        selling enthusiast cars online.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area :: End  -->

        <!-- Working Process Area :: Start  -->
        <section class="working--process--area">
            <div class="container">
                <!-- section title  -->
                <div class="text-center section--title" data-aos="fade-in" data-aos-duration="1500">

                    <p>How It Works</p>
                    <h3 class="sec--title">
                        Here's how we make selling, buying, or finalizing the car sale
                        easier and hassle-free.
                    </h3>
                </div>
                <div class="row">
                    <div class="tab--area">

                        <!-- nav link  -->
                        <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist" data-aos="fade-in"
                            data-aos-duration="1500">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-car-buy-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-car-buy" type="button" role="tab"
                                    aria-controls="pills-car-buy" aria-selected="true">
                                    Buying a Car
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sell-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-sell" type="button" role="tab"
                                    aria-controls="pills-sell" aria-selected="false">
                                    Selling a Car
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-finalize-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-finalize" type="button" role="tab"
                                    aria-controls="pills-finalize" aria-selected="false">
                                    Finalizing the Sale
                                </button>
                            </li>
                        </ul>

                        <!-- tab content  -->

                        <div class="tab-content mt_65" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-car-buy" role="tabpanel"
                                aria-labelledby="pills-car-buy-tab" tabindex="0">

                                <div class="row">
                                    <div class="col-lg-5 mt_30" data-aos="fade-up" data-aos-duration="1000">
                                        <!-- img--area   -->
                                        <div class="img--area">
                                            <img class="w-100" src="./assets/images/about.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mt_30">
                                        <div class="car--contents">

                                            <h3 data-aos="fade-up" data-aos-duration="1000">
                                                {{ $buying['title'] }}
                                            </h3>
                                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                                Once you’ve found a car you’re interested in, here are
                                                the steps you should take to bid confidently and, with
                                                any luck, win the auction!
                                            </p>
                                            <!-- register  -->

                                            <div class="register mt_20" data-aos="fade-up" data-aos-duration="1000">

                                                <p>
                                                    {!! $buying['description'] !!}
                                                </p>
                                            </div>

                                            <!-- diligance  -->

                                            <!-- financing  -->

                                            <!-- Bid  -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-lg-5 mt_30">
                                        <!-- img--area   -->
                                        <div class="img--area">
                                            <img class="w-100" src="./assets/images/cal-sell.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mt_30">
                                        <div class="car--contents">
                                            <h3>{{ $selling['title'] }}</h3>
                                            <p>
                                                Cars & Bids is the best place to sell your modern
                                                enthusiast car – and we’ve made the process easy.
                                            </p>
                                            <!-- submit car  -->

                                            <div class="submit--car mt_20">

                                                <p>
                                                    {!! $selling['description'] !!}
                                                </p>

                                            </div>

                                            <!-- Prepare Your Listing  -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-finalize" role="tabpanel"
                                aria-labelledby="pills-finalize-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-5 mt_30">
                                        <!-- img--area   -->
                                        <div class="img--area">
                                            <img class="w-100" src="./assets/images/cal-sell.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mt_30">
                                        <div class="car--contents">
                                            <h3>{{ $finalizing['title'] }}</h3>
                                            <p>
                                                Immediately after the auction closes we connect the
                                                buyer and seller so they can complete their sale. They
                                                can either use our custom checklist to ensure a smooth
                                                transaction or use our partner, KeySavvy, to handle
                                                everything from payment processing to documentation
                                                and licensing for a nominal fee. Here are our
                                                recommendations and tips for a successful post-auction
                                                sale – and remember, we’re here to help!
                                            </p>
                                            <!-- submit car  -->

                                            <div class="submit--car mt_20">

                                                <p>
                                                    {!! $finalizing['description'] !!}
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process Area :: end  -->

        <!-- Testimonial area :: start  -->

        <!-- Testimonial area :: end  -->
    </main>
@endsection
