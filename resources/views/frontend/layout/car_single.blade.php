@extends('frontend.app')

@section('content')
    <main>

        <!-- Single Car Hero Area :: Start  -->
        <section class="single--car--hero hero--slider">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <!-- name--area  -->
                        <div class="name--area" data-aos="fade-in" data-aos-duration="1500">
                            <div>
                                <h1>{{ $car['year'] }} {{ $car['title'] }}</h1>
                                <p>
                                    {{ $car['engine'] }} , {{ $car['transmission'] }}
                                </p>
                            </div>
                            <div class="btn--group">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.421 18.7C3.685 19.193 4.2 19.501 4.76 19.5C4.996 19.501 5.23 19.446 5.44 19.34L9.992 16.96C10.004 16.953 10.018 16.949 10.032 16.95L14.553 19.31C14.772 19.428 15.017 19.489 15.265 19.488C15.344 19.488 15.424 19.481 15.502 19.47C16.316 19.337 16.872 18.575 16.752 17.76L15.872 12.75C15.8671 12.7429 15.8656 12.7424 15.8652 12.7416C15.865 12.7412 15.865 12.7409 15.865 12.74C15.865 12.737 15.872 12.73 15.872 12.73L19.542 9.18C20.084 8.657 20.153 7.814 19.702 7.21C19.457 6.894 19.098 6.686 18.702 6.63L13.64 5.9C13.631 5.9 13.621 5.89 13.611 5.88L11.35 1.34C11.095 0.827 10.573 0.503 10 0.5C9.834 0.5 9.668 0.526 9.51 0.58C9.131 0.709 8.818 0.981 8.64 1.34L6.382 5.867C6.382 5.888 6.361 5.897 6.341 5.897L1.291 6.627C0.982 6.679 0.694 6.817 0.461 7.027C0.166 7.316 0 7.713 0 8.127C0.001 8.52 0.159 8.896 0.44 9.17L4.14 12.73C4.148 12.738 4.151 12.749 4.151 12.76L3.26 17.75C3.207 18.076 3.264 18.41 3.421 18.7ZM9.971 1.967L9.981 1.96H10L10.009 1.969C10.018 1.969 10.026 1.971 10.033 1.977C10.039 1.983 10.042 1.991 10.041 2L12.301 6.519C12.518 6.964 12.94 7.274 13.43 7.349L18.492 8.085C18.501 8.085 18.51 8.087 18.518 8.091C18.523 8.092 18.527 8.092 18.532 8.091L18.542 8.1L18.532 8.122L14.862 11.681C14.497 12.023 14.334 12.529 14.431 13.02L15.312 18.001L15.292 18.02H15.271C15.267 18.022 15.263 18.022 15.259 18.02C15.249 18.019 15.239 18.015 15.23 18.01H15.221L10.721 15.66C10.505 15.548 10.265 15.488 10.021 15.489C9.77 15.489 9.522 15.552 9.3 15.67L4.771 18.045C4.766 18.046 4.76 18.046 4.755 18.045C4.734 18.045 4.716 18.031 4.711 18.011V17.991L5.591 13.011C5.673 12.524 5.513 12.027 5.161 11.681L1.461 8.131C1.46 8.116 1.462 8.103 1.47 8.09L1.531 8.07L6.561 7.349C7.051 7.273 7.472 6.964 7.69 6.519L9.951 1.989C9.956 1.98 9.962 1.972 9.971 1.967Z"
                                            fill="#FD7F54" />
                                    </svg>
                                    Watch
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                        viewBox="0 0 21 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.2048 2.59154C20.5164 1.18588 19.2092 -0.0825198 17.7939 0.327077L2.13738 4.88281L1.98628 4.93304C0.516697 5.48611 0.291214 7.53286 1.66768 8.38023L8.14322 12.3661L12.039 18.8202L12.1265 18.9534C13.0398 20.2329 15.062 19.923 15.5231 18.372L20.1682 2.73251L20.2048 2.59154ZM18.2849 1.75323C18.5737 1.72222 18.8204 2.00312 18.7305 2.30473L14.0852 17.9448L14.0547 18.0214C13.9096 18.3069 13.4988 18.336 13.3232 18.0451L9.63522 11.9361L14.8877 6.64975L14.9601 6.56539C15.1769 6.27106 15.1513 5.85447 14.8842 5.5891L14.7998 5.51676C14.5055 5.29988 14.0889 5.32548 13.8235 5.59263L8.57822 10.8721L2.45398 7.10284L2.38786 7.05318C2.15003 6.83652 2.23008 6.41781 2.55598 6.32322L18.2119 1.76765L18.2849 1.75323Z"
                                            fill="#FD7F54" />
                                    </svg>
                                    Share
                                </a>
                            </div>
                        </div>
                        <!-- single car images  -->
                        <div class="single--car--images mt_25 mb_40">
                            <div class="slider--box">
                                <div class="row">
                                    <div class="col-lg-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="300" data-aos-offset="0">
                                        <a href="#" class="featured--car">
                                            <img src="./assets/images/car6.png" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-lg-6 slider-right-box">
                                        <div class="row">
                                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                data-aos-delay="400" data-aos-offset="0">
                                                <a href="#">
                                                    <img class="w-100" src="./assets/images/car16.png" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                data-aos-delay="500" data-aos-offset="0">
                                                <a href="#">
                                                    <img class="w-100" src="./assets/images/car14.png" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                data-aos-delay="600" data-aos-offset="0">
                                                <a href="#">
                                                    <img class="w-100" src="./assets/images/car15.png" alt="" />
                                                </a>
                                            </div>
                                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000"
                                                data-aos-delay="700">
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
                        <!-- place bid  -->
                        <div class="place--bid--wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800"
                            data-aos-offset="0">
                            <!-- single info  -->
                            <div class="single--info">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path
                                            d="M23.8346 13.0001C23.8346 18.9801 18.9813 23.8334 13.0013 23.8334C7.0213 23.8334 2.16797 18.9801 2.16797 13.0001C2.16797 7.02008 7.0213 2.16675 13.0013 2.16675C18.9813 2.16675 23.8346 7.02008 23.8346 13.0001Z"
                                            stroke="#FD7F54" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.0177 16.4449L13.6593 14.4407C13.0743 14.0941 12.5977 13.2599 12.5977 12.5774V8.13574"
                                            stroke="#FD7F54" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <p>Time Left <strong>{{ $left_time }}</strong></p>
                            </div>
                            <!-- single info  -->
                            <div class="single--info">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path d="M9.76255 22.2083L4.32422 16.7808" stroke="#FD7F54" stroke-opacity="0.47"
                                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9.76172 3.79175V22.2084" stroke="#FD7F54" stroke-opacity="0.47"
                                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.2383 3.79175L21.6766 9.21925" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.2383 22.2084V3.79175" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <p>High Bid <strong>${{ $max }}</strong></p>
                            </div>
                            <!-- single info  -->
                            <div class="single--info">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path d="M18.5785 14.9717L15.2852 18.265" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.42188 14.9717H18.5802" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.42188 11.0284L10.7152 7.73511" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.5802 11.0283H7.42188" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M13.0013 23.8334C18.9844 23.8334 23.8346 18.9832 23.8346 13.0001C23.8346 7.017 18.9844 2.16675 13.0013 2.16675C7.01822 2.16675 2.16797 7.017 2.16797 13.0001C2.16797 18.9832 7.01822 23.8334 13.0013 23.8334Z"
                                            stroke="#FD7F54" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <p>Total Bids <strong>{{ $count }}</strong></p>
                            </div>
                            <!-- single info  -->
                            <div class="single--info">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path
                                            d="M18.418 9.75008C18.418 13.9426 14.778 17.3334 10.293 17.3334L9.28548 18.5467L8.68964 19.2618C8.18047 19.8684 7.20546 19.7384 6.86963 19.0126L5.41797 15.8167C3.4463 14.4301 2.16797 12.2309 2.16797 9.75008C2.16797 5.55758 5.80797 2.16675 10.293 2.16675C13.5646 2.16675 16.3921 3.97592 17.6596 6.57592C18.1471 7.54009 18.418 8.61258 18.418 9.75008Z"
                                            stroke="#FD7F54" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M23.8343 13.9317C23.8343 16.4126 22.556 18.6118 20.5843 19.9984L19.1327 23.1942C18.7968 23.9201 17.8218 24.0609 17.3126 23.4434L15.7093 21.5151C13.0876 21.5151 10.7477 20.3559 9.28516 18.5467L10.2926 17.3334C14.7776 17.3334 18.4176 13.9426 18.4176 9.75009C18.4176 8.61259 18.1468 7.54009 17.6593 6.57593C21.2018 7.38843 23.8343 10.3784 23.8343 13.9317Z"
                                            stroke="#FD7F54" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7.58203 9.75H12.9987" stroke="#FD7F54" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <p>Comments <strong>18</strong></p>
                            </div>
                            <!-- place button  -->
                            <a href="#" class="button place-bid-button">Place Bid</a>
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
        <!-- Single Car Hero Area :: End  -->

        <!-- Details and More Area :: Start  -->
        <section class="details--and--morearea">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-lg-5 mt_30">
                        <!-- car-details-table--wrapper  -->
                        <div class="car-details-table--wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <!-- title  -->
                            <div class="title">
                                <h3>{{ $car['state'] }} {{ $car['country'] }}</h3>
                                <p>Ending {{ $car['end_time'] }}</p>
                            </div>
                            <!-- table  -->
                            <div class="table--wrapper">
                                <!-- table  -->
                                <div class="table">

                                    <div class="tr">
                                        <div class="tt">Brand</div>
                                        <div class="td">{{ $car['brand'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Make</div>
                                        <div class="td">{{ $car['make'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Model</div>
                                        <div class="td">{{ $car['model'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Mileage</div>
                                        <div class="td">{{ $car['mileage'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">VIN Number</div>
                                        <div class="td">{{ $car['vin_number'] }}</div>
                                    </div>

                                    <div class="tr">
                                        <div class="tt">Location</div>
                                        <div class="td">{{ $car['state'] }} {{ $car['country'] }}</div>
                                    </div>
                                    <div class="tr seller">
                                        <div class="tt">Owner {{ $car->user->name }}</div>
                                        <div class="td">
                                            <div class="s-profile">
                                                <img src="./assets/images/about.png" alt="" />
                                                Spike944
                                            </div>
                                            <a href="{{ url('tel:$car->phone') }}">Contact</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- table  -->
                                <div class="table">
                                    <div class="tr">
                                        <div class="tt">Engine</div>
                                        <div class="td">{{ $car['engine'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Drivetrain</div>
                                        <div class="td">{{ $car['drive_train'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Transmission</div>
                                        <div class="td">{{ $car['transmission'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Body Style</div>
                                        <div class="td">{{ $car['body_style'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Exterior color</div>
                                        <div class="td">{{ $car['exterior_color'] }}</div>
                                    </div>
                                    <div class="tr">
                                        <div class="tt">Interior Color</div>
                                        <div class="td">{{ $car['interior_color'] }}</div>
                                    </div>


                                </div>
                            </div>
                            <!-- single review  -->
                            <div class="single--review details" data-aos="fade-up" data-aos-duration="1000">
                                <!-- profile  -->
                                <div class="profile">
                                    <img src="./assets/images/about.png" alt="" />
                                    <p>Saudi Cars Hubs</p>
                                </div>
                                <p class="message">
                                    {{ $car['description'] }}</p>

                            </div>
                            <!-- highlights  -->
                            <div class="highlights details mt_65" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Highlights</h4>
                                <p>

                                    {{ $car['highlight'] }}
                                </p>
                            </div>
                            <!-- Equipment  -->
                            <div class="equipment details mt_35" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Equipment</h4>
                                <p>
                                    {{ $car['equipment'] }}
                                </p>
                            </div>
                            <!-- rent--history  -->
                            <div class="rent--history details mt_35" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Recent Service History</h4>
                                <p>
                                    {{ $car['service_history'] }}
                                </p>
                            </div>
                            <!-- other items  -->
                            <div class="other--items details mt_35" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Other Items Included in Sale</h4>
                                {{ $car['other_items'] }}
                            </div>
                            <!-- ownership history  -->
                            <div class="ownership--history details mt_35" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Ownership History</h4>
                                <p>
                                    {{ $car['ownership_history'] }}
                                </p>
                            </div>
                            <!-- car videos  -->
                            <div class="car--videos mt_35" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Videos</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- single--video  -->
                                        <div class="single--video mt_15">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/OnplUqrbysE?si=1B-RHUWJnE4bCTX1"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- single--video  -->
                                        <div class="single--video mt_15">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/nRkAP-6ZLoI?si=5QrwmKljdPipd4s0"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-7 mt_30">
                        <!-- action--ending--soon  -->
                        <div class="action--ending--soon">
                            <h3 data-aos="fade-in" data-aos-duration="1500">
                                Auctions Ending Soon
                            </h3>
                            <div class="row">
                                @foreach ($cars as $recent)
                                    <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="car--card">
                                            <div class="img--area">
                                                <img class="w-100" src="./assets/images/car6.png" alt="" />
                                            </div>
                                            <div class="car--info">
                                                <div class="bid--info">
                                                    <p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23"
                                                            height="23" viewBox="0 0 23 23" fill="none">
                                                            <path
                                                                d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                                fill="#141414"></path>
                                                        </svg>
                                                        {{ $left_time_recent }} days left
                                                    </p>
                                                    <p>
                                                        <span>Bid</span>
                                                        ${{ $recent->minimum_price }}
                                                    </p>
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg" class="star">
                                                        <path
                                                            d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                                            stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="car--model">
                                                    <a
                                                        href="{{ route('car_single.index', $recent->id) }}">{{ $recent['title'] }}</a>
                                                    <p>
                                                        {{ $recent['year'] }},{{ $recent['model'] }},
                                                        {{ $recent['exterior_color'] }}
                                                    </p>
                                                    <div class="card--footer">
                                                        <p>{{ $recent['engine'] }},{{ $recent['transmission'] }}</p>
                                                        <a href="{{ route('car_single.index', $recent->id) }}"
                                                            class="buttonv2 button">Place a
                                                            Bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach




                            </div>
                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                <div class="car--card">
                                    <div class="img--area">
                                        <img class="w-100" src="./assets/images/car6.png" alt="" />
                                    </div>
                                    <div class="car--info">
                                        <div class="bid--info">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 23 23" fill="none">
                                                    <path
                                                        d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                        fill="#141414"></path>
                                                </svg>
                                                2 day left
                                            </p>
                                            <p>
                                                <span>Bid</span>
                                                $10,000
                                            </p>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="star">
                                                <path
                                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                                    stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="car--model">
                                            <a href="#">1987 Renault Alliance GTA Convertible</a>
                                            <p>
                                                1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                                                Unmodified
                                            </p>
                                            <div class="card--footer">
                                                <p>Fort Lauderdale, FL 33315</p>
                                                <a href="#" class="buttonv2 button">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                <div class="car--card">
                                    <div class="img--area">
                                        <img class="w-100" src="./assets/images/car6.png" alt="" />
                                    </div>
                                    <div class="car--info">
                                        <div class="bid--info">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 23 23" fill="none">
                                                    <path
                                                        d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                        fill="#141414"></path>
                                                </svg>
                                                2 day left
                                            </p>
                                            <p>
                                                <span>Bid</span>
                                                $10,000
                                            </p>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="star">
                                                <path
                                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                                    stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="car--model">
                                            <a href="#">1987 Renault Alliance GTA Convertible</a>
                                            <p>
                                                1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                                                Unmodified
                                            </p>
                                            <div class="card--footer">
                                                <p>Fort Lauderdale, FL 33315</p>
                                                <a href="#" class="buttonv2 button">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                <div class="car--card">
                                    <div class="img--area">
                                        <img class="w-100" src="./assets/images/car6.png" alt="" />
                                    </div>
                                    <div class="car--info">
                                        <div class="bid--info">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 23 23" fill="none">
                                                    <path
                                                        d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                        fill="#141414"></path>
                                                </svg>
                                                2 day left
                                            </p>
                                            <p>
                                                <span>Bid</span>
                                                $10,000
                                            </p>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="star">
                                                <path
                                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                                    stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="car--model">
                                            <a href="#">1987 Renault Alliance GTA Convertible</a>
                                            <p>
                                                1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                                                Unmodified
                                            </p>
                                            <div class="card--footer">
                                                <p>Fort Lauderdale, FL 33315</p>
                                                <a href="#" class="buttonv2 button">Place a Bid</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_20" data-aos="fade-up" data-aos-duration="1000">
                                <div class="car--card">
                                    <div class="img--area">
                                        <img class="w-100" src="./assets/images/car6.png" alt="" />
                                    </div>
                                    <div class="car--info">
                                        <div class="bid--info">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 23 23" fill="none">
                                                    <path
                                                        d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                                                        fill="#141414"></path>
                                                </svg>
                                                2 day left
                                            </p>
                                            <p>
                                                <span>Bid</span>
                                                $10,000
                                            </p>
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="star">
                                                <path
                                                    d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                                                    stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="car--model">
                                            <a href="#">1987 Renault Alliance GTA Convertible</a>
                                            <p>
                                                1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                                                Unmodified
                                            </p>
                                            <div class="card--footer">
                                                <p>Fort Lauderdale, FL 33315</p>
                                                <a href="#" class="buttonv2 button">Place a Bid</a>
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
        <!-- Details and More Area :: End  -->

        <!-- Testimonial area :: start  -->

        <!-- Testimonial area :: end  -->

        <!-- popup start  -->
        <div class="register--bid--popup bid--popup common-input">
            <!-- top title  -->
            <div class="top--title">
                <div class="logo">
                    <a href="index.html">
                        <img src="./assets/images/logo.svg" alt="" />
                    </a>
                </div>
                <h3>Register to Bid</h3>
                <p>
                    We require a valid credit card on file before you can bid. Winning
                    bidders pay a 2% buyer's fee to Cars & Bids on top of the winning
                    bid amount.
                </p>
            </div>
            <!-- credit card info  -->
            <div class="credit--card--information">
                <form action="{{ route('bid.store', $car->id) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <h4>Register to Bid</h4>
                    <p>The last Bidding Amount was $ {{ $max }}. You are required to Bid expanding minimum 50$ of
                        Last Bidding Amount</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="input--group">
                                <label for="bid_amount">Amount You Want To Bid !!</label>
                                <input type="text" class="form-control" id="bid_amount" name="bid_amount"
                                    placeholder="Enter your card name" required />
                                <div class="invalid-feedback">
                                    Please enter your name.
                                </div>
                            </div>
                        </div>


                        <div class="col-12">

                            <button type="submit" class="button w-100 mt_45">
                                Fix the Amount to Bid
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.707159 7.17715C0.307804 7.23213 0 7.57953 0 7.99989C0 8.45846 0.366312 8.83021 0.818182 8.83021L15.1999 8.83021L10.0047 14.0813L9.92528 14.1743C9.68696 14.4989 9.71243 14.9602 10.0023 15.2556C10.3212 15.5805 10.8392 15.5816 11.1594 15.258L17.7477 8.59955C17.787 8.56142 17.8224 8.51937 17.8536 8.47401C18.0766 8.14976 18.0452 7.69994 17.7593 7.41106L11.1593 0.741932L11.0674 0.661737C10.7466 0.421253 10.2921 0.449045 10.0023 0.744461C9.68342 1.06942 9.68454 1.59515 10.0047 1.91871L15.2012 7.16957L0.818182 7.16957L0.707159 7.17715Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
            <!-- close popup -->
            <div class="close--pop">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"
                    fill="none">
                    <path
                        d="M18.4986 16.3209L26.1295 8.68994L28.3098 10.8702L20.6788 18.5011L28.3098 26.1319L26.1295 28.3121L18.4986 20.6813L10.8678 28.3121L8.6875 26.1319L16.3184 18.5011L8.6875 10.8702L10.8678 8.68994L18.4986 16.3209Z"
                        fill="#141414" />
                </svg>
            </div>
        </div>
        <!-- popup end  -->
        <div class="step-bid--popup bid--popup common-input">
            <form action="#" id="bid-form">
                <!-- step  -->
                <div class="step">
                    <!-- logo  -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="./assets/images/logo.svg" alt="" />
                        </a>
                    </div>
                    <!-- car image area  -->
                    <div class="car--details">
                        <img src="./assets/images/car6.png" alt="" />
                        <!-- car title  -->
                        <div class="common-car--title">
                            <h3>1996 Nissan Skyline GT-R</h3>
                            <ul>
                                <li>3 Days</li>
                                <li>Current Bid $25,000</li>
                            </ul>
                        </div>
                        <div class="input--group">
                            <label for="current-bid">Current Bid
                                <span>(Minimum bid increment is $250. All bids in USD)</span></label>
                            <!-- usd  -->
                            <div class="usd">
                                <input type="text" placeholder="USD ($)" />
                                <input type="text" value="25,0000" />
                            </div>
                        </div>
                    </div>
                    <!-- buttons  -->
                    <div class="buttons">
                        <a href="#" class="button bid-next-button w-100 mt_45">
                            Place Bid
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.20716 7.17715C0.807804 7.23213 0.5 7.57953 0.5 7.99989C0.5 8.45846 0.866312 8.83021 1.31818 8.83021L15.6999 8.83021L10.5047 14.0813L10.4253 14.1743C10.187 14.4989 10.2124 14.9602 10.5023 15.2556C10.8212 15.5805 11.3392 15.5816 11.6594 15.258L18.2477 8.59955C18.287 8.56142 18.3224 8.51937 18.3536 8.47401C18.5766 8.14976 18.5452 7.69994 18.2593 7.41106L11.6593 0.741932L11.5674 0.661737C11.2466 0.421253 10.7921 0.449045 10.5023 0.744461C10.1834 1.06942 10.1845 1.59515 10.5047 1.91871L15.7012 7.16957L1.31818 7.16957L1.20716 7.17715Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="step">

                    <!-- common-car--title  -->
                    <div class="common-car--title">
                        <h3>1996 Nissan Skyline GT-R</h3>
                        <ul>
                            <li>3 Days</li>
                            <li>Current Bid $25,000</li>
                        </ul>
                    </div>
                    <!-- biding information  -->
                    <div class="biding--information">
                        <h4>Biding Information</h4>
                        <ul>
                            <li>
                                <p>Your Bid :</p>
                                <p>$25,750 USD</p>
                            </li>
                            <li>
                                <p>C&B Buyer’s Fee :</p>
                                <p>$1,158.75 USD</p>
                            </li>
                        </ul>
                        <!-- more--info -->
                        <div class="more--info">
                            <p>
                                <strong>Bidding will instantly reach $25,750</strong>. The
                                winning bidder pays Saudi Car Hub a 2% buyer's fee on top of
                                the winning bid.
                            </p>
                            <p class="mt_20">
                                We will place a hold on your credit card for the buyer's fee.
                                If you win, your card will be charged the fee at the end of
                                the auction, and you will pay the seller directly for the
                                vehicle. If you don't win, your hold will be released at
                                auction end.
                            </p>
                            <p class="mt_20">
                                <strong> Bids are binding and cannot be retracted</strong>.
                                You are responsible for completing all due diligence prior to
                                bidding. By placing this bid, you agree to the Saudi Car Hub
                                <a href="#">Terms of Use</a>.
                            </p>
                        </div>
                    </div>
                    <!-- button  -->
                    <div class="buttons">
                        <button class="button w-100 bid-submit-button mt_50">
                            Confirm Bid
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.20716 7.17715C0.807804 7.23213 0.5 7.57953 0.5 7.99989C0.5 8.45846 0.866312 8.83021 1.31818 8.83021L15.6999 8.83021L10.5047 14.0813L10.4253 14.1743C10.187 14.4989 10.2124 14.9602 10.5023 15.2556C10.8212 15.5805 11.3392 15.5816 11.6594 15.258L18.2477 8.59955C18.287 8.56142 18.3224 8.51937 18.3536 8.47401C18.5766 8.14976 18.5452 7.69994 18.2593 7.41106L11.6593 0.741932L11.5674 0.661737C11.2466 0.421253 10.7921 0.449045 10.5023 0.744461C10.1834 1.06942 10.1845 1.59515 10.5047 1.91871L15.7012 7.16957L1.31818 7.16957L1.20716 7.17715Z"
                                    fill="white" />
                            </svg>
                        </button>
                        <a href="#" class="button w-100 mt_25 bid-cancle">Cancle</a>
                    </div>
                </div>
            </form>
            <!-- close popup  -->
            <div class="close--pop">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37"
                    fill="none">
                    <path
                        d="M18.4986 16.3209L26.1295 8.68994L28.3098 10.8702L20.6788 18.5011L28.3098 26.1319L26.1295 28.3121L18.4986 20.6813L10.8678 28.3121L8.6875 26.1319L16.3184 18.5011L8.6875 10.8702L10.8678 8.68994L18.4986 16.3209Z"
                        fill="#141414" />
                </svg>
            </div>
        </div>
        <!-- overlay black  -->
        <div class="overlay--black"></div>
    </main>
@endsection
