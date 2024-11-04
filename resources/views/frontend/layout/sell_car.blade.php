<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Sell Car</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" type="image/png" href="assets/images/logo-sm.svg" />
    <!-- ==== All Css Links ==== -->
    @include('frontend.partial.style')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
      integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

  </head>
  <body>
    <!-- header :: start -->
    <header data-aos="fade-down" data-aos-duration="1000">
      <div class="container">
        <div class="custom-row">
          <!-- logo  -->
          <a href="index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="logo" />
          </a>
          <!-- menu & search -->
          <div class="menu--search--wrapp">
            <!-- menu  -->
            <ul class="menu">
              <li>
                <a href="auction.html">Auctions</a>
              </li>
              <li>
                <a href="#">Community</a>
              </li>
              <li>
                <a href="cars--and-bids.html">What’s Cars & Bids ?</a>
              </li>
              <li>
                <a href="#">Daily Email</a>
              </li>
              <li class="d-none mobile--login--btn">
                <a href="login.html">Sign in</a>
              </li>
            </ul>
            <!-- search   -->
            <form action="#">
              <input
                type="text"
                placeholder="Search cars (Ex: Audi, Honda,Toyota)"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                ]
                class="search"
              >
                <path
                  d="M13.5233 12.9626L16.7353 16.1746L15.6746 17.2353L12.4626 14.0233C11.3077 14.9473 9.843 15.5 8.25 15.5C4.524 15.5 1.5 12.476 1.5 8.75C1.5 5.024 4.524 2 8.25 2C11.976 2 15 5.024 15 8.75C15 10.343 14.4473 11.8077 13.5233 12.9626ZM12.0185 12.4061C12.9356 11.4609 13.5 10.1717 13.5 8.75C13.5 5.84938 11.1506 3.5 8.25 3.5C5.34938 3.5 3 5.84938 3 8.75C3 11.6506 5.34938 14 8.25 14C9.6717 14 10.9609 13.4356 11.9061 12.5185L12.0185 12.4061Z"
                  fill="#5A5C5F"
                />
              </svg>
            </form>
          </div>
          <!-- header right -->
          <div class="header--right">
            <!-- language  -->
            <select class="lang--select">
              <option selected value="1">English</option>
              <option value="2">German</option>
            </select>
            <a href="sell-car.html" class="buttonv2 button">Sell a Car</a>
            <a href="login.html" class="button login-btn">Sign In</a>
            <!-- menu toggler -->
            <div class="hamburger-menu">
              <span class="line-top"></span>
              <span class="line-center"></span>
              <span class="line-bottom"></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header :: end -->

    <main>
      <!-- overlay  -->
      <div class="overlay"></div>
      <!-- sell car hero area :: start  -->
      <section
        class="sell--car--hero--area"
        style="background-image: url(./assets/images/sell-hero-bg.png)"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="sell--hero--content">
                <h1
                  class="sec--title"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  Apply in minutes and we’ll respond within a day.
                </h1>
                <a
                  href="#"
                  class="button sell--button"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="100"
                  >Sell Now It’s free!</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- sell car hero area :: end  -->

      <!-- our auction area :: start  -->
      <section class="our--auction--area">
        <div class="container">
          <!-- section title  -->
          <div class="text-center section--title mb_30">
            <h3 class="sec--title" data-aos="fade-in" data-aos-duration="2000">
              Our Auctions
            </h3>
          </div>
          <div class="row">
            <div
              class="col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <!-- auction--card  -->
              <div class="auction--card">
                <h4>Reserve Auction</h4>
                <p>
                  A reserve auction has a secret minimum price that you’ll
                  accept in order to sell your car. If your reserve isn't met,
                  the car does not sell. We'll work with you to agree on a fair
                  reserve price during the submission process.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <!-- auction--card  -->
              <div class="auction--card">
                <h4>No Reserve Auction</h4>
                <p>
                  An auction without a reserve means that the car will sell to
                  the highest bidder at the end of the auction regardless of
                  price. We've found that cars offered with no reserve get more
                  bids, more interest, and more attention.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- our auction area :: end  -->

      <!-- how works area :: start  -->
      <section class="how--works--area">
        <div class="container">
          <!-- section title  -->
          <div class="text-center section--title mb_60">
            <h3 class="sec--title" data-aos="fade-in" data-aos-duration="1500">
              How It Works
            </h3>
          </div>
          <div class="steps--inner">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="row row--secound">
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    <div class="num--box">01</div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                  >
                    <div class="step--box right">
                      <p>
                        You submit information about your vehicle. We’ll let you
                        know if your car is accepted.
                      </p>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    <div class="step--box">
                      <p>
                        If accepted, we’ll ask you for more information
                        and photos of your car. Your listing will be featured
                        for a week.
                      </p>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                  >
                    <div class="num--box right">02</div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    <div class="num--box">03</div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                  >
                    <div class="step--box right">
                      <p>
                        We’ll also ask for your scheduling preference. We work
                        with you to create a listing page that describes your
                        vehicle.
                      </p>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    <div class="step--box">
                      <p>
                        When your car sells, we’ll connect you with the high
                        bidder so you can complete the transaction!
                      </p>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 mt_40"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                  >
                    <div class="num--box right">04</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- lines and circle  -->
            <div class="progress--area">
              <!-- progress--line  -->
              <div class="progress--bar">
                <div class="line"></div>
              </div>
              <!-- circles  -->
              <div class="circles">
                <p class="circle active"></p>
                <p class="circle"></p>
                <p class="circle"></p>
                <p class="circle"></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- how works area :: end  -->

      <!-- advantage area :: start  -->
      <section class="advantage--area">
        <div class="container">
          <!-- section title  -->
          <div class="text-center section--title mb_30">
            <h3 class="sec--title" data-aos="fade-in" data-aos-duration="1500">
              Many Advantages With<br />
              Saudi Cars Hub!
            </h3>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-11">
              <div class="row">
                <div
                  class="col-lg-3 col-sm-6 mt_20"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <!-- advantage--card  -->
                  <div class="advantage--card first">
                    <!-- icon  -->
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="41"
                        height="41"
                        viewBox="0 0 41 41"
                        fill="none"
                      >
                        <path
                          d="M31.2827 28.5502L31.9327 33.8168C32.0993 35.2002 30.616 36.1668 29.4327 35.4502L23.666 32.0168C23.266 31.7835 23.166 31.2835 23.3827 30.8835C24.216 29.3502 24.666 27.6168 24.666 25.8835C24.666 19.7835 19.4327 14.8168 12.9993 14.8168C11.6827 14.8168 10.3993 15.0168 9.19933 15.4168C8.58267 15.6168 7.98267 15.0502 8.13267 14.4168C9.64933 8.35016 15.4827 3.8335 22.4493 3.8335C30.5827 3.8335 37.166 9.9835 37.166 17.5668C37.166 22.0668 34.8493 26.0502 31.2827 28.5502Z"
                          fill="white"
                        />
                        <path
                          d="M22.1654 25.8831C22.1654 27.8664 21.432 29.6997 20.1987 31.1497C18.5487 33.1497 15.932 34.4331 12.9987 34.4331L8.6487 37.0164C7.91536 37.4664 6.98203 36.8497 7.08203 35.9997L7.4987 32.7164C5.26536 31.1664 3.83203 28.6831 3.83203 25.8831C3.83203 22.9497 5.3987 20.3664 7.7987 18.8331C9.28203 17.8664 11.0654 17.3164 12.9987 17.3164C18.0654 17.3164 22.1654 21.1497 22.1654 25.8831Z"
                          fill="white"
                        />
                      </svg>
                    </div>
                    <h4>Live Support</h4>
                    <p>
                      Live support from listing to post-<br />sale and sell your
                      cars.
                    </p>
                  </div>
                </div>
                <div
                  class="col-lg-3 col-sm-6 mt_20"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="100"
                >
                  <!-- advantage--card  -->
                  <div class="advantage--card">
                    <!-- icon  -->
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        viewBox="0 0 40 40"
                        fill="none"
                      >
                        <path
                          d="M33.6817 13.0332L20.8484 20.4666C20.3317 20.7666 19.6817 20.7666 19.1484 20.4666L6.31507 13.0332C5.3984 12.4999 5.16507 11.2499 5.86507 10.4666C6.3484 9.91657 6.8984 9.46657 7.48174 9.1499L16.5151 4.1499C18.4484 3.06657 21.5817 3.06657 23.5151 4.1499L32.5484 9.1499C33.1317 9.46657 33.6817 9.93323 34.1651 10.4666C34.8317 11.2499 34.5984 12.4999 33.6817 13.0332Z"
                          fill="white"
                        />
                        <path
                          d="M19.0482 23.5666V34.9333C19.0482 36.2 17.7648 37.0333 16.6315 36.4833C13.1982 34.8 7.41484 31.65 7.41484 31.65C5.38151 30.5 3.71484 27.6 3.71484 25.2166V16.6166C3.71484 15.3 5.09818 14.4666 6.23151 15.1166L18.2148 22.0666C18.7148 22.3833 19.0482 22.95 19.0482 23.5666Z"
                          fill="white"
                        />
                        <path
                          d="M20.9492 23.5666V34.9333C20.9492 36.2 22.2326 37.0333 23.3659 36.4833C26.7992 34.8 32.5826 31.65 32.5826 31.65C34.6159 30.5 36.2826 27.6 36.2826 25.2166V16.6166C36.2826 15.3 34.8992 14.4666 33.7659 15.1166L21.7826 22.0666C21.2826 22.3833 20.9492 22.95 20.9492 23.5666Z"
                          fill="white"
                        />
                      </svg>
                    </div>
                    <h4>Sell Faster</h4>
                    <p>
                      Sell your car faster and go from<br />
                      submission to auction in under a week
                    </p>
                  </div>
                </div>
                <div
                  class="col-lg-3 col-sm-6 mt_20"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                >
                  <!-- advantage--card  -->
                  <div class="advantage--card three">
                    <!-- icon  -->
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="41"
                        height="40"
                        viewBox="0 0 41 40"
                        fill="none"
                      >
                        <path
                          d="M31.4013 6.95023L22.2346 3.51689C21.2846 3.16689 19.7346 3.16689 18.7846 3.51689L9.61797 6.95023C7.8513 7.6169 6.41797 9.68356 6.41797 11.5669V25.0669C6.41797 26.4169 7.3013 28.2002 8.38463 29.0002L17.5513 35.8502C19.168 37.0669 21.818 37.0669 23.4346 35.8502L32.6013 29.0002C33.6846 28.1836 34.568 26.4169 34.568 25.0669V11.5669C34.5846 9.68356 33.1513 7.6169 31.4013 6.95023ZM21.7513 21.4502V25.8336C21.7513 26.5169 21.1846 27.0836 20.5013 27.0836C19.818 27.0836 19.2513 26.5169 19.2513 25.8336V21.4502C17.568 20.9169 16.3346 19.3502 16.3346 17.5002C16.3346 15.2002 18.2013 13.3336 20.5013 13.3336C22.8013 13.3336 24.668 15.2002 24.668 17.5002C24.668 19.3669 23.4346 20.9169 21.7513 21.4502Z"
                          fill="white"
                        />
                      </svg>
                    </div>
                    <h4>Easy Access</h4>
                    <p>
                      Access our huge audience of<br />
                      engaged enthusiasts
                    </p>
                  </div>
                </div>
                <div
                  class="col-lg-3 col-sm-6 mt_20"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="300"
                >
                  <!-- advantage--card  -->
                  <div class="advantage--card">
                    <!-- icon  -->
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="41"
                        viewBox="0 0 40 41"
                        fill="none"
                      >
                        <path
                          d="M36.5344 28.4168C35.9844 32.8502 32.3511 36.4835 27.9177 37.0335C25.2344 37.3668 22.7344 36.6335 20.7844 35.2002C19.6677 34.3835 19.9344 32.6502 21.2677 32.2502C26.2844 30.7335 30.2344 26.7668 31.7677 21.7502C32.1677 20.4335 33.9011 20.1668 34.7177 21.2668C36.1344 23.2335 36.8677 25.7335 36.5344 28.4168Z"
                          fill="white"
                        />
                        <path
                          d="M16.6487 3.8335C9.2987 3.8335 3.33203 9.80016 3.33203 17.1502C3.33203 24.5002 9.2987 30.4668 16.6487 30.4668C23.9987 30.4668 29.9654 24.5002 29.9654 17.1502C29.9487 9.80016 23.9987 3.8335 16.6487 3.8335ZM15.082 15.2835L19.0987 16.6835C20.5487 17.2002 21.2487 18.2168 21.2487 19.7835C21.2487 21.5835 19.8154 23.0668 18.0654 23.0668H17.9154V23.1502C17.9154 23.8335 17.3487 24.4002 16.6654 24.4002C15.982 24.4002 15.4154 23.8335 15.4154 23.1502V23.0502C13.5654 22.9668 12.082 21.4168 12.082 19.4835C12.082 18.8002 12.6487 18.2335 13.332 18.2335C14.0154 18.2335 14.582 18.8002 14.582 19.4835C14.582 20.0835 15.0154 20.5668 15.5487 20.5668H18.0487C18.432 20.5668 18.732 20.2168 18.732 19.7835C18.732 19.2002 18.632 19.1668 18.2487 19.0335L14.232 17.6335C12.7987 17.1335 12.082 16.1168 12.082 14.5335C12.082 12.7335 13.5154 11.2502 15.2654 11.2502H15.4154V11.1835C15.4154 10.5002 15.982 9.9335 16.6654 9.9335C17.3487 9.9335 17.9154 10.5002 17.9154 11.1835V11.2835C19.7654 11.3668 21.2487 12.9168 21.2487 14.8502C21.2487 15.5335 20.682 16.1002 19.9987 16.1002C19.3154 16.1002 18.7487 15.5335 18.7487 14.8502C18.7487 14.2502 18.3154 13.7668 17.782 13.7668H15.282C14.8987 13.7668 14.5987 14.1168 14.5987 14.5502C14.582 15.1168 14.682 15.1502 15.082 15.2835Z"
                          fill="white"
                        />
                      </svg>
                    </div>
                    <h4>Sell for Free</h4>
                    <p>
                      Sell for free and receive 100%<br />
                      of the sale price
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- advantage area :: end  -->
      <!-- recent sales area :: start  -->
      <section class="recent--sale--area">
        <div class="container">
          <!-- section title  -->
          <div class="section--title mb_30">
            <h3 class="sec--title" data-aos="fade-in" data-aos-duration="1500">
              Recent Sales
            </h3>
          </div>
          <div class="row">
            <div
              class="col-xxl-3 col-lg-4 col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <!-- car card  -->
              <div class="car--card">
                <div class="img--area">
                  <img class="w-100" src="./assets/images/car5.png" alt="" />
                </div>
                <div class="car--info">
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="23"
                        viewBox="0 0 23 23"
                        fill="none"
                      >
                        <path
                          d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p>
                      <span>Bid</span>
                      $10,000
                    </p>
                    <svg
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="star"
                    >
                      <path
                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                        stroke="#000000"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="car--model">
                    <a href="#">1987 Renault Alliance GTA Convertible</a>
                    <p>
                      1 Owner, Dual-Motor AWD, Florida-Owned, Mostly Unmodified
                    </p>
                    <div class="card--footer">
                      <p>Fort Lauderdale, FL 33315</p>
                      <a href="#" class="buttonv2 button">Place a Bid</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-xxl-3 col-lg-4 col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="100"
            >
              <!-- car card  -->
              <div class="car--card">
                <div class="img--area">
                  <img class="w-100" src="./assets/images/car6.png" alt="" />
                </div>
                <div class="car--info">
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="23"
                        viewBox="0 0 23 23"
                        fill="none"
                      >
                        <path
                          d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p>
                      <span>Bid</span>
                      $10,000
                    </p>
                    <svg
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="star"
                    >
                      <path
                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                        stroke="#000000"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="car--model">
                    <a href="#">1987 Renault Alliance GTA Convertible</a>
                    <p>
                      1 Owner, Dual-Motor AWD, Florida-Owned, Mostly Unmodified
                    </p>
                    <div class="card--footer">
                      <p>Fort Lauderdale, FL 33315</p>
                      <a href="#" class="buttonv2 button">Place a Bid</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-xxl-3 col-lg-4 col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="200"
            >
              <!-- car card  -->
              <div class="car--card">
                <div class="img--area">
                  <img class="w-100" src="./assets/images/car10.png" alt="" />
                </div>
                <div class="car--info">
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="23"
                        viewBox="0 0 23 23"
                        fill="none"
                      >
                        <path
                          d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p>
                      <span>Bid</span>
                      $10,000
                    </p>
                    <svg
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="star"
                    >
                      <path
                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                        stroke="#000000"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="car--model">
                    <a href="#">1987 Renault Alliance GTA Convertible</a>
                    <p>
                      1 Owner, Dual-Motor AWD, Florida-Owned, Mostly Unmodified
                    </p>
                    <div class="card--footer">
                      <p>Fort Lauderdale, FL 33315</p>
                      <a href="#" class="buttonv2 button">Place a Bid</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-xxl-3 col-lg-4 col-md-6 mt_20"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="300"
            >
              <!-- car card  -->
              <div class="car--card">
                <div class="img--area">
                  <img class="w-100" src="./assets/images/car11.png" alt="" />
                </div>
                <div class="car--info">
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="23"
                        viewBox="0 0 23 23"
                        fill="none"
                      >
                        <path
                          d="M11.7334 20.4663C6.7677 20.4663 2.74219 16.4408 2.74219 11.4751C2.74219 6.50939 6.7677 2.48389 11.7334 2.48389C16.6991 2.48389 20.7246 6.50939 20.7246 11.4751C20.7246 16.4408 16.6991 20.4663 11.7334 20.4663ZM11.7334 18.6681C15.706 18.6681 18.9264 15.4477 18.9264 11.4751C18.9264 7.50254 15.706 4.28213 11.7334 4.28213C7.76084 4.28213 4.54043 7.50254 4.54043 11.4751C4.54043 15.4477 7.76084 18.6681 11.7334 18.6681ZM12.6325 11.4751H16.229V13.2734H10.8343V6.9795H12.6325V11.4751Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p>
                      <span>Bid</span>
                      $10,000
                    </p>
                    <svg
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      class="star"
                    >
                      <path
                        d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                        stroke="#000000"
                        stroke-width="1"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="car--model">
                    <a href="#">1987 Renault Alliance GTA Convertible</a>
                    <p>
                      1 Owner, Dual-Motor AWD, Florida-Owned, Mostly Unmodified
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
      </section>
      <!-- recent sales area :: end  -->

      <!-- why cars and bids area :: start  -->
      <section
        class="cars--and--bids--area"
        style="background-image: url(./assets/images/car-and-bids-bg.png)"
      >
        <div class="container">
          <!-- section--title  -->
          <div
            class="text-center section--title"
            data-aos="fade-in"
            data-aos-duration="1500"
            data-aos-delay="100"
          >
            <h3 class="sec--title">Why Cars & Bids?</h3>
          </div>
          <div class="row">
            <div
              class="col-md-3 col-sm-6 mt_20"
              data-aos="fade-in"
              data-aos-duration="1200"
            >
              <!-- counter box  -->
              <div class="counter--box first">
                <h4>
                  <p class="counter">18000</p>
                  +
                </h4>
                <p>Auctions completed</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 mt_20"
              data-aos="fade-in"
              data-aos-duration="1200"
              data-aos-delay="100"
            >
              <!-- counter box  -->
              <div class="counter--box">
                <h4>
                  $
                  <p class="counter">415</p>
                  M+
                </h4>
                <p>Value of cars sold</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 mt_20"
              data-aos="fade-in"
              data-aos-duration="1200"
              data-aos-delay="200"
            >
              <!-- counter box  -->
              <div class="counter--box three">
                <h4>
                  <p class="counter">83</p>
                  %+
                </h4>
                <p>Sell-through rate</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 mt_20"
              data-aos="fade-in"
              data-aos-duration="1200"
              data-aos-delay="300"
            >
              <!-- counter box  -->
              <div class="counter--box">
                <h4>
                  <p class="counter">510</p>
                  K+
                </h4>
                <p>Registered members</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- why cars and bids area :: end  -->

      <!-- faq area :: start  -->
      <section class="faq--area">
        <div class="container">
          <!-- section title  -->
          <div
            class="text-center section--title mb_40"
            data-aos="fade-in"
            data-aos-duration="1500"
          >
            <h3 class="sec--title">Frequently Asked Questions</h3>
            <p>
              Find answers to commonly asked questions about our platform in our
              comprehensive FAQ section. Whether you're a user, fan, or creator,
              we've got you covered with helpful information
            </p>
          </div>
          <div class="row">
            <div class="col-lg-6 mt_20">
              <!-- faq--box  -->
              <div class="faq--box" data-aos="fade-up" data-aos-duration="1000">
                <div class="box--title">
                  <h4>For Fans</h4>
                </div>
                <div class="faq--questions">
                  <div class="accordion" id="accordionExample">
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq1"
                          aria-expanded="false"
                          aria-controls="faq1"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq1"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Similique ratione error totam magni! Sint est
                          inventore incidunt, sed fugiat in ipsam quo commodi
                          rem nemo ad nesciunt porro possimus mollitia!
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq2"
                          aria-expanded="false"
                          aria-controls="faq2"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq2"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Neque tenetur saepe suscipit nihil impedit in
                          consequatur eligendi debitis sapiente voluptatibus
                          reprehenderit numquam tempora, adipisci ratione sunt
                          ullam vero, perspiciatis unde.
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq4"
                          aria-expanded="false"
                          aria-controls="faq4"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq4"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq5"
                          aria-expanded="false"
                          aria-controls="faq5"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq5"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq6"
                          aria-expanded="false"
                          aria-controls="faq6"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq6"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- faq--box  -->
              <div class="faq--box" data-aos="fade-up" data-aos-duration="1000">
                <div class="box--title">
                  <h4>For Fans</h4>
                </div>
                <div class="faq--questions">
                  <div class="accordion" id="accordionExample3">
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq13"
                          aria-expanded="false"
                          aria-controls="faq13"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq13"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Similique ratione error totam magni! Sint est
                          inventore incidunt, sed fugiat in ipsam quo commodi
                          rem nemo ad nesciunt porro possimus mollitia!
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq14"
                          aria-expanded="false"
                          aria-controls="faq14"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq14"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Neque tenetur saepe suscipit nihil impedit in
                          consequatur eligendi debitis sapiente voluptatibus
                          reprehenderit numquam tempora, adipisci ratione sunt
                          ullam vero, perspiciatis unde.
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq15"
                          aria-expanded="false"
                          aria-controls="faq15"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq15"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq16"
                          aria-expanded="false"
                          aria-controls="faq16"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq16"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq17"
                          aria-expanded="false"
                          aria-controls="faq17"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq17"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq18"
                          aria-expanded="false"
                          aria-controls="faq18"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq18"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample3"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt_20">
              <!-- faq--box  -->
              <div class="faq--box" data-aos="fade-up" data-aos-duration="1000">
                <div class="box--title">
                  <h4>For Fans</h4>
                </div>
                <div class="faq--questions">
                  <div class="accordion" id="accordionExample2">
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq7"
                          aria-expanded="false"
                          aria-controls="faq7"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq7"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Similique ratione error totam magni! Sint est
                          inventore incidunt, sed fugiat in ipsam quo commodi
                          rem nemo ad nesciunt porro possimus mollitia!
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq8"
                          aria-expanded="false"
                          aria-controls="faq8"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq8"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Neque tenetur saepe suscipit nihil impedit in
                          consequatur eligendi debitis sapiente voluptatibus
                          reprehenderit numquam tempora, adipisci ratione sunt
                          ullam vero, perspiciatis unde.
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq9"
                          aria-expanded="false"
                          aria-controls="faq9"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq9"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq10"
                          aria-expanded="false"
                          aria-controls="faq10"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq10"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq11"
                          aria-expanded="false"
                          aria-controls="faq11"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq11"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                    <!-- item  -->
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq12"
                          aria-expanded="false"
                          aria-controls="faq12"
                        >
                          How do I subscribe to a creator?
                        </button>
                      </h2>
                      <div
                        id="faq12"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample2"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Iusto ad, reprehenderit nam possimus dolorem
                          doloribus. Doloremque, fugit deleniti repellat nobis
                          aliquid, necessitatibus at dolor quia optio voluptas,
                          eveniet aut et?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- contact box  -->
              <div
                class="faq--box contact--box"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <div class="box--title">
                  <h4>Can't Find Your Answer?</h4>
                </div>
                <a href="mailto:Heavyxxx@gmail.com">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"
                      fill="#FD7F54"
                    />
                  </svg>
                  Heavyxxx@gmail.com
                </a>
                <a href="tel:01458564">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"
                      fill="#FD7F54"
                    />
                  </svg>
                  +880 1458 564
                </a>
                <a href="#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"
                      fill="#FD7F54"
                    />
                  </svg>
                  Sunderland, Gmail, New york
                </a>
                <a href="#" class="button">Contact us</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- faq area :: end  -->

      <!-- Testimonial area :: start  -->
      <section class="testimonial--area">
        <!-- section--title  -->
        <div
          class="text-center section--title mb_95"
          data-aos="fade-in"
          data-aos-duration="1500"
        >
          <h3 class="sec--title">Our Customers Love Us !</h3>
        </div>
        <!-- testimonial carousel  -->
        <div
          class="owl-carousel testimonial--carousel"
          data-aos="fade-left"
          data-aos-duration="1000"
          data-aos-delay="100"
        >
          <div class="item">
            <!-- testimonial--card  -->
            <div class="testimonial--card">
              <p class="message">
                Great experience, from the listing to the post auction
                follow-up, I will definitely use Cars and Bids again and
                recommend it to all my friends!
              </p>
              <div class="client">
                <img src="./assets/images/client.png" alt="" />
                <div>
                  <p>Prateek Kukreja</p>
                  <span>28th May 2024</span>
                </div>
              </div>
              <!-- rating  -->
              <div class="rating">
                5.0
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="104"
                  height="19"
                  viewBox="0 0 104 19"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.35274 1.06264L11.816 6.29745L17.3223 7.1371C17.4649 7.15925 17.5831 7.26391 17.6275 7.40724C17.6719 7.55057 17.6348 7.70782 17.5317 7.81313L13.5481 11.887L14.4886 17.6405C14.5134 17.7888 14.4553 17.939 14.3388 18.0277C14.2223 18.1163 14.0678 18.1281 13.9403 18.0579L9.01495 15.342L4.08961 18.0587C3.9622 18.1291 3.80757 18.1176 3.69104 18.0289C3.57451 17.9403 3.5164 17.79 3.54127 17.6416L4.48182 11.887L0.49704 7.81313C0.393979 7.70782 0.35688 7.55057 0.401282 7.40724C0.445684 7.26391 0.563921 7.15925 0.706469 7.1371L6.21281 6.29745L8.67717 1.06264C8.73988 0.927282 8.87109 0.841309 9.01495 0.841309C9.15882 0.841309 9.29003 0.927282 9.35274 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.9309 1.06264L33.3941 6.29745L38.9004 7.1371C39.043 7.15925 39.1612 7.26391 39.2056 7.40724C39.25 7.55057 39.2129 7.70782 39.1099 7.81313L35.1262 11.887L36.0668 17.6405C36.0915 17.7888 36.0334 17.939 35.9169 18.0277C35.8005 18.1163 35.6459 18.1281 35.5184 18.0579L30.5931 15.342L25.6677 18.0587C25.5403 18.1291 25.3857 18.1176 25.2692 18.0289C25.1526 17.9403 25.0945 17.79 25.1194 17.6416L26.0599 11.887L22.0752 7.81313C21.9721 7.70782 21.935 7.55057 21.9794 7.40724C22.0238 7.26391 22.142 7.15925 22.2846 7.1371L27.7909 6.29745L30.2553 1.06264C30.318 0.927282 30.4492 0.841309 30.5931 0.841309C30.7369 0.841309 30.8682 0.927282 30.9309 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.509 1.06264L54.9722 6.29745L60.4786 7.1371C60.6211 7.15925 60.7393 7.26391 60.7837 7.40724C60.8282 7.55057 60.7911 7.70782 60.688 7.81313L56.7043 11.887L57.6449 17.6405C57.6696 17.7888 57.6115 17.939 57.495 18.0277C57.3786 18.1163 57.224 18.1281 57.0965 18.0579L52.1712 15.342L47.2459 18.0587C47.1185 18.1291 46.9638 18.1176 46.8473 18.0289C46.7308 17.9403 46.6727 17.79 46.6975 17.6416L47.6381 11.887L43.6533 7.81313C43.5502 7.70782 43.5131 7.55057 43.5575 7.40724C43.6019 7.26391 43.7202 7.15925 43.8627 7.1371L49.3691 6.29745L51.8334 1.06264C51.8961 0.927282 52.0273 0.841309 52.1712 0.841309C52.3151 0.841309 52.4463 0.927282 52.509 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M74.091 1.06264L76.5543 6.29745L82.0606 7.1371C82.2031 7.15925 82.3214 7.26391 82.3658 7.40724C82.4102 7.55057 82.3731 7.70782 82.27 7.81313L78.2864 11.887L79.2269 17.6405C79.2516 17.7888 79.1935 17.939 79.0771 18.0277C78.9606 18.1163 78.8061 18.1281 78.6786 18.0579L73.7532 15.342L68.8279 18.0587C68.7005 18.1291 68.5459 18.1176 68.4293 18.0289C68.3128 17.9403 68.2547 17.79 68.2796 17.6416L69.2201 11.887L65.2353 7.81313C65.1323 7.70782 65.0952 7.55057 65.1396 7.40724C65.184 7.26391 65.3022 7.15925 65.4448 7.1371L70.9511 6.29745L73.4154 1.06264C73.4782 0.927282 73.6094 0.841309 73.7532 0.841309C73.8971 0.841309 74.0283 0.927282 74.091 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M95.6691 1.06264L98.1324 6.29745L103.639 7.1371C103.781 7.15925 103.9 7.26391 103.944 7.40724C103.988 7.55057 103.951 7.70782 103.848 7.81313L99.8645 11.887L100.805 17.6405C100.83 17.7888 100.772 17.939 100.655 18.0277C100.539 18.1163 100.384 18.1281 100.257 18.0579L95.3314 15.342L90.406 18.0587C90.2786 18.1291 90.124 18.1176 90.0074 18.0289C89.8909 17.9403 89.8328 17.79 89.8577 17.6416L90.7982 11.887L86.8134 7.81313C86.7104 7.70782 86.6733 7.55057 86.7177 7.40724C86.7621 7.26391 86.8803 7.15925 87.0229 7.1371L92.5292 6.29745L94.9936 1.06264C95.0563 0.927282 95.1875 0.841309 95.3314 0.841309C95.4752 0.841309 95.6064 0.927282 95.6691 1.06264Z"
                    fill="#FFF0EB"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- testimonial--card  -->
            <div class="testimonial--card">
              <p class="message">
                Great experience, from the listing to the post auction
                follow-up, I will definitely use Cars and Bids again and
                recommend it to all my friends!
              </p>
              <div class="client">
                <img src="./assets/images/client.png" alt="" />
                <div>
                  <p>Prateek Kukreja</p>
                  <span>28th May 2024</span>
                </div>
              </div>
              <!-- rating  -->
              <div class="rating">
                5.0
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="104"
                  height="19"
                  viewBox="0 0 104 19"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.35274 1.06264L11.816 6.29745L17.3223 7.1371C17.4649 7.15925 17.5831 7.26391 17.6275 7.40724C17.6719 7.55057 17.6348 7.70782 17.5317 7.81313L13.5481 11.887L14.4886 17.6405C14.5134 17.7888 14.4553 17.939 14.3388 18.0277C14.2223 18.1163 14.0678 18.1281 13.9403 18.0579L9.01495 15.342L4.08961 18.0587C3.9622 18.1291 3.80757 18.1176 3.69104 18.0289C3.57451 17.9403 3.5164 17.79 3.54127 17.6416L4.48182 11.887L0.49704 7.81313C0.393979 7.70782 0.35688 7.55057 0.401282 7.40724C0.445684 7.26391 0.563921 7.15925 0.706469 7.1371L6.21281 6.29745L8.67717 1.06264C8.73988 0.927282 8.87109 0.841309 9.01495 0.841309C9.15882 0.841309 9.29003 0.927282 9.35274 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.9309 1.06264L33.3941 6.29745L38.9004 7.1371C39.043 7.15925 39.1612 7.26391 39.2056 7.40724C39.25 7.55057 39.2129 7.70782 39.1099 7.81313L35.1262 11.887L36.0668 17.6405C36.0915 17.7888 36.0334 17.939 35.9169 18.0277C35.8005 18.1163 35.6459 18.1281 35.5184 18.0579L30.5931 15.342L25.6677 18.0587C25.5403 18.1291 25.3857 18.1176 25.2692 18.0289C25.1526 17.9403 25.0945 17.79 25.1194 17.6416L26.0599 11.887L22.0752 7.81313C21.9721 7.70782 21.935 7.55057 21.9794 7.40724C22.0238 7.26391 22.142 7.15925 22.2846 7.1371L27.7909 6.29745L30.2553 1.06264C30.318 0.927282 30.4492 0.841309 30.5931 0.841309C30.7369 0.841309 30.8682 0.927282 30.9309 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.509 1.06264L54.9722 6.29745L60.4786 7.1371C60.6211 7.15925 60.7393 7.26391 60.7837 7.40724C60.8282 7.55057 60.7911 7.70782 60.688 7.81313L56.7043 11.887L57.6449 17.6405C57.6696 17.7888 57.6115 17.939 57.495 18.0277C57.3786 18.1163 57.224 18.1281 57.0965 18.0579L52.1712 15.342L47.2459 18.0587C47.1185 18.1291 46.9638 18.1176 46.8473 18.0289C46.7308 17.9403 46.6727 17.79 46.6975 17.6416L47.6381 11.887L43.6533 7.81313C43.5502 7.70782 43.5131 7.55057 43.5575 7.40724C43.6019 7.26391 43.7202 7.15925 43.8627 7.1371L49.3691 6.29745L51.8334 1.06264C51.8961 0.927282 52.0273 0.841309 52.1712 0.841309C52.3151 0.841309 52.4463 0.927282 52.509 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M74.091 1.06264L76.5543 6.29745L82.0606 7.1371C82.2031 7.15925 82.3214 7.26391 82.3658 7.40724C82.4102 7.55057 82.3731 7.70782 82.27 7.81313L78.2864 11.887L79.2269 17.6405C79.2516 17.7888 79.1935 17.939 79.0771 18.0277C78.9606 18.1163 78.8061 18.1281 78.6786 18.0579L73.7532 15.342L68.8279 18.0587C68.7005 18.1291 68.5459 18.1176 68.4293 18.0289C68.3128 17.9403 68.2547 17.79 68.2796 17.6416L69.2201 11.887L65.2353 7.81313C65.1323 7.70782 65.0952 7.55057 65.1396 7.40724C65.184 7.26391 65.3022 7.15925 65.4448 7.1371L70.9511 6.29745L73.4154 1.06264C73.4782 0.927282 73.6094 0.841309 73.7532 0.841309C73.8971 0.841309 74.0283 0.927282 74.091 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M95.6691 1.06264L98.1324 6.29745L103.639 7.1371C103.781 7.15925 103.9 7.26391 103.944 7.40724C103.988 7.55057 103.951 7.70782 103.848 7.81313L99.8645 11.887L100.805 17.6405C100.83 17.7888 100.772 17.939 100.655 18.0277C100.539 18.1163 100.384 18.1281 100.257 18.0579L95.3314 15.342L90.406 18.0587C90.2786 18.1291 90.124 18.1176 90.0074 18.0289C89.8909 17.9403 89.8328 17.79 89.8577 17.6416L90.7982 11.887L86.8134 7.81313C86.7104 7.70782 86.6733 7.55057 86.7177 7.40724C86.7621 7.26391 86.8803 7.15925 87.0229 7.1371L92.5292 6.29745L94.9936 1.06264C95.0563 0.927282 95.1875 0.841309 95.3314 0.841309C95.4752 0.841309 95.6064 0.927282 95.6691 1.06264Z"
                    fill="#FFF0EB"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- testimonial--card  -->
            <div class="testimonial--card">
              <p class="message">
                Great experience, from the listing to the post auction
                follow-up, I will definitely use Cars and Bids again and
                recommend it to all my friends!
              </p>
              <div class="client">
                <img src="./assets/images/client.png" alt="" />
                <div>
                  <p>Prateek Kukreja</p>
                  <span>28th May 2024</span>
                </div>
              </div>
              <!-- rating  -->
              <div class="rating">
                5.0
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="104"
                  height="19"
                  viewBox="0 0 104 19"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.35274 1.06264L11.816 6.29745L17.3223 7.1371C17.4649 7.15925 17.5831 7.26391 17.6275 7.40724C17.6719 7.55057 17.6348 7.70782 17.5317 7.81313L13.5481 11.887L14.4886 17.6405C14.5134 17.7888 14.4553 17.939 14.3388 18.0277C14.2223 18.1163 14.0678 18.1281 13.9403 18.0579L9.01495 15.342L4.08961 18.0587C3.9622 18.1291 3.80757 18.1176 3.69104 18.0289C3.57451 17.9403 3.5164 17.79 3.54127 17.6416L4.48182 11.887L0.49704 7.81313C0.393979 7.70782 0.35688 7.55057 0.401282 7.40724C0.445684 7.26391 0.563921 7.15925 0.706469 7.1371L6.21281 6.29745L8.67717 1.06264C8.73988 0.927282 8.87109 0.841309 9.01495 0.841309C9.15882 0.841309 9.29003 0.927282 9.35274 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.9309 1.06264L33.3941 6.29745L38.9004 7.1371C39.043 7.15925 39.1612 7.26391 39.2056 7.40724C39.25 7.55057 39.2129 7.70782 39.1099 7.81313L35.1262 11.887L36.0668 17.6405C36.0915 17.7888 36.0334 17.939 35.9169 18.0277C35.8005 18.1163 35.6459 18.1281 35.5184 18.0579L30.5931 15.342L25.6677 18.0587C25.5403 18.1291 25.3857 18.1176 25.2692 18.0289C25.1526 17.9403 25.0945 17.79 25.1194 17.6416L26.0599 11.887L22.0752 7.81313C21.9721 7.70782 21.935 7.55057 21.9794 7.40724C22.0238 7.26391 22.142 7.15925 22.2846 7.1371L27.7909 6.29745L30.2553 1.06264C30.318 0.927282 30.4492 0.841309 30.5931 0.841309C30.7369 0.841309 30.8682 0.927282 30.9309 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.509 1.06264L54.9722 6.29745L60.4786 7.1371C60.6211 7.15925 60.7393 7.26391 60.7837 7.40724C60.8282 7.55057 60.7911 7.70782 60.688 7.81313L56.7043 11.887L57.6449 17.6405C57.6696 17.7888 57.6115 17.939 57.495 18.0277C57.3786 18.1163 57.224 18.1281 57.0965 18.0579L52.1712 15.342L47.2459 18.0587C47.1185 18.1291 46.9638 18.1176 46.8473 18.0289C46.7308 17.9403 46.6727 17.79 46.6975 17.6416L47.6381 11.887L43.6533 7.81313C43.5502 7.70782 43.5131 7.55057 43.5575 7.40724C43.6019 7.26391 43.7202 7.15925 43.8627 7.1371L49.3691 6.29745L51.8334 1.06264C51.8961 0.927282 52.0273 0.841309 52.1712 0.841309C52.3151 0.841309 52.4463 0.927282 52.509 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M74.091 1.06264L76.5543 6.29745L82.0606 7.1371C82.2031 7.15925 82.3214 7.26391 82.3658 7.40724C82.4102 7.55057 82.3731 7.70782 82.27 7.81313L78.2864 11.887L79.2269 17.6405C79.2516 17.7888 79.1935 17.939 79.0771 18.0277C78.9606 18.1163 78.8061 18.1281 78.6786 18.0579L73.7532 15.342L68.8279 18.0587C68.7005 18.1291 68.5459 18.1176 68.4293 18.0289C68.3128 17.9403 68.2547 17.79 68.2796 17.6416L69.2201 11.887L65.2353 7.81313C65.1323 7.70782 65.0952 7.55057 65.1396 7.40724C65.184 7.26391 65.3022 7.15925 65.4448 7.1371L70.9511 6.29745L73.4154 1.06264C73.4782 0.927282 73.6094 0.841309 73.7532 0.841309C73.8971 0.841309 74.0283 0.927282 74.091 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M95.6691 1.06264L98.1324 6.29745L103.639 7.1371C103.781 7.15925 103.9 7.26391 103.944 7.40724C103.988 7.55057 103.951 7.70782 103.848 7.81313L99.8645 11.887L100.805 17.6405C100.83 17.7888 100.772 17.939 100.655 18.0277C100.539 18.1163 100.384 18.1281 100.257 18.0579L95.3314 15.342L90.406 18.0587C90.2786 18.1291 90.124 18.1176 90.0074 18.0289C89.8909 17.9403 89.8328 17.79 89.8577 17.6416L90.7982 11.887L86.8134 7.81313C86.7104 7.70782 86.6733 7.55057 86.7177 7.40724C86.7621 7.26391 86.8803 7.15925 87.0229 7.1371L92.5292 6.29745L94.9936 1.06264C95.0563 0.927282 95.1875 0.841309 95.3314 0.841309C95.4752 0.841309 95.6064 0.927282 95.6691 1.06264Z"
                    fill="#FFF0EB"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- testimonial--card  -->
            <div class="testimonial--card">
              <p class="message">
                Great experience, from the listing to the post auction
                follow-up, I will definitely use Cars and Bids again and
                recommend it to all my friends!
              </p>
              <div class="client">
                <img src="./assets/images/client.png" alt="" />
                <div>
                  <p>Prateek Kukreja</p>
                  <span>28th May 2024</span>
                </div>
              </div>
              <!-- rating  -->
              <div class="rating">
                5.0
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="104"
                  height="19"
                  viewBox="0 0 104 19"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.35274 1.06264L11.816 6.29745L17.3223 7.1371C17.4649 7.15925 17.5831 7.26391 17.6275 7.40724C17.6719 7.55057 17.6348 7.70782 17.5317 7.81313L13.5481 11.887L14.4886 17.6405C14.5134 17.7888 14.4553 17.939 14.3388 18.0277C14.2223 18.1163 14.0678 18.1281 13.9403 18.0579L9.01495 15.342L4.08961 18.0587C3.9622 18.1291 3.80757 18.1176 3.69104 18.0289C3.57451 17.9403 3.5164 17.79 3.54127 17.6416L4.48182 11.887L0.49704 7.81313C0.393979 7.70782 0.35688 7.55057 0.401282 7.40724C0.445684 7.26391 0.563921 7.15925 0.706469 7.1371L6.21281 6.29745L8.67717 1.06264C8.73988 0.927282 8.87109 0.841309 9.01495 0.841309C9.15882 0.841309 9.29003 0.927282 9.35274 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.9309 1.06264L33.3941 6.29745L38.9004 7.1371C39.043 7.15925 39.1612 7.26391 39.2056 7.40724C39.25 7.55057 39.2129 7.70782 39.1099 7.81313L35.1262 11.887L36.0668 17.6405C36.0915 17.7888 36.0334 17.939 35.9169 18.0277C35.8005 18.1163 35.6459 18.1281 35.5184 18.0579L30.5931 15.342L25.6677 18.0587C25.5403 18.1291 25.3857 18.1176 25.2692 18.0289C25.1526 17.9403 25.0945 17.79 25.1194 17.6416L26.0599 11.887L22.0752 7.81313C21.9721 7.70782 21.935 7.55057 21.9794 7.40724C22.0238 7.26391 22.142 7.15925 22.2846 7.1371L27.7909 6.29745L30.2553 1.06264C30.318 0.927282 30.4492 0.841309 30.5931 0.841309C30.7369 0.841309 30.8682 0.927282 30.9309 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.509 1.06264L54.9722 6.29745L60.4786 7.1371C60.6211 7.15925 60.7393 7.26391 60.7837 7.40724C60.8282 7.55057 60.7911 7.70782 60.688 7.81313L56.7043 11.887L57.6449 17.6405C57.6696 17.7888 57.6115 17.939 57.495 18.0277C57.3786 18.1163 57.224 18.1281 57.0965 18.0579L52.1712 15.342L47.2459 18.0587C47.1185 18.1291 46.9638 18.1176 46.8473 18.0289C46.7308 17.9403 46.6727 17.79 46.6975 17.6416L47.6381 11.887L43.6533 7.81313C43.5502 7.70782 43.5131 7.55057 43.5575 7.40724C43.6019 7.26391 43.7202 7.15925 43.8627 7.1371L49.3691 6.29745L51.8334 1.06264C51.8961 0.927282 52.0273 0.841309 52.1712 0.841309C52.3151 0.841309 52.4463 0.927282 52.509 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M74.091 1.06264L76.5543 6.29745L82.0606 7.1371C82.2031 7.15925 82.3214 7.26391 82.3658 7.40724C82.4102 7.55057 82.3731 7.70782 82.27 7.81313L78.2864 11.887L79.2269 17.6405C79.2516 17.7888 79.1935 17.939 79.0771 18.0277C78.9606 18.1163 78.8061 18.1281 78.6786 18.0579L73.7532 15.342L68.8279 18.0587C68.7005 18.1291 68.5459 18.1176 68.4293 18.0289C68.3128 17.9403 68.2547 17.79 68.2796 17.6416L69.2201 11.887L65.2353 7.81313C65.1323 7.70782 65.0952 7.55057 65.1396 7.40724C65.184 7.26391 65.3022 7.15925 65.4448 7.1371L70.9511 6.29745L73.4154 1.06264C73.4782 0.927282 73.6094 0.841309 73.7532 0.841309C73.8971 0.841309 74.0283 0.927282 74.091 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M95.6691 1.06264L98.1324 6.29745L103.639 7.1371C103.781 7.15925 103.9 7.26391 103.944 7.40724C103.988 7.55057 103.951 7.70782 103.848 7.81313L99.8645 11.887L100.805 17.6405C100.83 17.7888 100.772 17.939 100.655 18.0277C100.539 18.1163 100.384 18.1281 100.257 18.0579L95.3314 15.342L90.406 18.0587C90.2786 18.1291 90.124 18.1176 90.0074 18.0289C89.8909 17.9403 89.8328 17.79 89.8577 17.6416L90.7982 11.887L86.8134 7.81313C86.7104 7.70782 86.6733 7.55057 86.7177 7.40724C86.7621 7.26391 86.8803 7.15925 87.0229 7.1371L92.5292 6.29745L94.9936 1.06264C95.0563 0.927282 95.1875 0.841309 95.3314 0.841309C95.4752 0.841309 95.6064 0.927282 95.6691 1.06264Z"
                    fill="#FFF0EB"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- testimonial--card  -->
            <div class="testimonial--card">
              <p class="message">
                Great experience, from the listing to the post auction
                follow-up, I will definitely use Cars and Bids again and
                recommend it to all my friends!
              </p>
              <div class="client">
                <img src="./assets/images/client.png" alt="" />
                <div>
                  <p>Prateek Kukreja</p>
                  <span>28th May 2024</span>
                </div>
              </div>
              <!-- rating  -->
              <div class="rating">
                5.0
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="104"
                  height="19"
                  viewBox="0 0 104 19"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M9.35274 1.06264L11.816 6.29745L17.3223 7.1371C17.4649 7.15925 17.5831 7.26391 17.6275 7.40724C17.6719 7.55057 17.6348 7.70782 17.5317 7.81313L13.5481 11.887L14.4886 17.6405C14.5134 17.7888 14.4553 17.939 14.3388 18.0277C14.2223 18.1163 14.0678 18.1281 13.9403 18.0579L9.01495 15.342L4.08961 18.0587C3.9622 18.1291 3.80757 18.1176 3.69104 18.0289C3.57451 17.9403 3.5164 17.79 3.54127 17.6416L4.48182 11.887L0.49704 7.81313C0.393979 7.70782 0.35688 7.55057 0.401282 7.40724C0.445684 7.26391 0.563921 7.15925 0.706469 7.1371L6.21281 6.29745L8.67717 1.06264C8.73988 0.927282 8.87109 0.841309 9.01495 0.841309C9.15882 0.841309 9.29003 0.927282 9.35274 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.9309 1.06264L33.3941 6.29745L38.9004 7.1371C39.043 7.15925 39.1612 7.26391 39.2056 7.40724C39.25 7.55057 39.2129 7.70782 39.1099 7.81313L35.1262 11.887L36.0668 17.6405C36.0915 17.7888 36.0334 17.939 35.9169 18.0277C35.8005 18.1163 35.6459 18.1281 35.5184 18.0579L30.5931 15.342L25.6677 18.0587C25.5403 18.1291 25.3857 18.1176 25.2692 18.0289C25.1526 17.9403 25.0945 17.79 25.1194 17.6416L26.0599 11.887L22.0752 7.81313C21.9721 7.70782 21.935 7.55057 21.9794 7.40724C22.0238 7.26391 22.142 7.15925 22.2846 7.1371L27.7909 6.29745L30.2553 1.06264C30.318 0.927282 30.4492 0.841309 30.5931 0.841309C30.7369 0.841309 30.8682 0.927282 30.9309 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.509 1.06264L54.9722 6.29745L60.4786 7.1371C60.6211 7.15925 60.7393 7.26391 60.7837 7.40724C60.8282 7.55057 60.7911 7.70782 60.688 7.81313L56.7043 11.887L57.6449 17.6405C57.6696 17.7888 57.6115 17.939 57.495 18.0277C57.3786 18.1163 57.224 18.1281 57.0965 18.0579L52.1712 15.342L47.2459 18.0587C47.1185 18.1291 46.9638 18.1176 46.8473 18.0289C46.7308 17.9403 46.6727 17.79 46.6975 17.6416L47.6381 11.887L43.6533 7.81313C43.5502 7.70782 43.5131 7.55057 43.5575 7.40724C43.6019 7.26391 43.7202 7.15925 43.8627 7.1371L49.3691 6.29745L51.8334 1.06264C51.8961 0.927282 52.0273 0.841309 52.1712 0.841309C52.3151 0.841309 52.4463 0.927282 52.509 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M74.091 1.06264L76.5543 6.29745L82.0606 7.1371C82.2031 7.15925 82.3214 7.26391 82.3658 7.40724C82.4102 7.55057 82.3731 7.70782 82.27 7.81313L78.2864 11.887L79.2269 17.6405C79.2516 17.7888 79.1935 17.939 79.0771 18.0277C78.9606 18.1163 78.8061 18.1281 78.6786 18.0579L73.7532 15.342L68.8279 18.0587C68.7005 18.1291 68.5459 18.1176 68.4293 18.0289C68.3128 17.9403 68.2547 17.79 68.2796 17.6416L69.2201 11.887L65.2353 7.81313C65.1323 7.70782 65.0952 7.55057 65.1396 7.40724C65.184 7.26391 65.3022 7.15925 65.4448 7.1371L70.9511 6.29745L73.4154 1.06264C73.4782 0.927282 73.6094 0.841309 73.7532 0.841309C73.8971 0.841309 74.0283 0.927282 74.091 1.06264Z"
                    fill="#FFF0EB"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M95.6691 1.06264L98.1324 6.29745L103.639 7.1371C103.781 7.15925 103.9 7.26391 103.944 7.40724C103.988 7.55057 103.951 7.70782 103.848 7.81313L99.8645 11.887L100.805 17.6405C100.83 17.7888 100.772 17.939 100.655 18.0277C100.539 18.1163 100.384 18.1281 100.257 18.0579L95.3314 15.342L90.406 18.0587C90.2786 18.1291 90.124 18.1176 90.0074 18.0289C89.8909 17.9403 89.8328 17.79 89.8577 17.6416L90.7982 11.887L86.8134 7.81313C86.7104 7.70782 86.6733 7.55057 86.7177 7.40724C86.7621 7.26391 86.8803 7.15925 87.0229 7.1371L92.5292 6.29745L94.9936 1.06264C95.0563 0.927282 95.1875 0.841309 95.3314 0.841309C95.4752 0.841309 95.6064 0.927282 95.6691 1.06264Z"
                    fill="#FFF0EB"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonial area :: end  -->

      <!-- car sell step form popup :: start  -->
      <div class="car--stepform--popup">
        <!-- top logo area  -->
        <div class="top--logo--area">
          <img src="./assets/images/logo.svg" alt="logo" />
          <div class="text--content mt_25">
            <h3>Tell us about your car</h3>
            <p>
              Please give us some basics about yourself and the car you’d like
              to sell. We’ll also need details about the car’s title status as
              well as 6 photos that highlight the car’s exterior and interior
              condition.
            </p>
          </div>
        </div>
        <!-- steps indicators -->
        <div class="steps--indicators">
          <img src="./assets/images/steps--line.png" alt="" />
          <!-- indicator  -->
          <div class="indicator active">
            <div class="indicator-circle">1</div>
            <p>Step 01</p>
          </div>
          <!-- indicator  -->
          <div class="indicator">
            <div class="indicator-circle">2</div>
            <p>Step 02</p>
          </div>
        </div>
        <form action="#" id="sellForm">
          <!-- from step  -->
          <div class="form--step">
            <!-- your info  -->
            <div class="your--info">
              <h4>Your Info</h4>
              <div class="info--box">
                <div class="row">
                  <div class="col-md-6 mt_25">
                    <!-- input group  -->
                    <div class="input--group">
                      <label for="fname">Full Name</label>
                      <input
                        id="fname"
                        type="text"
                        placeholder="Enter your card name"
                        required
                      />
                      <!-- invalid message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-6 mt_25">
                    <!-- input group  -->
                    <div class="input--group">
                      <label for="num">Contact Number</label>
                      <input
                        id="num"
                        type="text"
                        placeholder="Enter your contact number"
                        required
                      />
                      <!-- invalid message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- car details  -->
            <div class="car--details">
              <h4>Car Details</h4>
              <div class="info--box">
                <!-- vin number  -->
                <div class="vin--number">
                  <!-- input--group  -->
                  <div class="input--group mt_25">
                    <label for="vin-number">VIN Number</label>
                    <input
                      id="vin-number"
                      type="number"
                      placeholder="Enter VIN number"
                      required
                    />
                    <!-- invalid message  -->
                    <p class="error"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 mt_25">
                    <div class="year">
                      <!-- input--group  -->
                      <div class="input--group">
                        <label for="year">Year</label>
                        <select required>
                          <option value="1" selected>2024</option>
                          <option value="1">2023</option>
                          <option value="1">2022</option>
                          <option value="1">2021</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mt_25">
                    <!-- input--group  -->
                    <div class="input--group">
                      <label for="make">Make</label>
                      <input
                        id="make"
                        type="text"
                        placeholder="Make"
                        required
                      />
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-5 mt_25">
                    <!-- input--group  -->
                    <div class="input--group">
                      <label for="model">Model</label>
                      <input
                        id="model"
                        type="text"
                        placeholder="Model"
                        required
                      />
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-5 mt_25">
                    <!-- input--group  -->
                    <div class="input--group">
                      <label for="transmission">Transmission</label>
                      <select>
                        <option value="1" selected>Manual Transmission</option>
                        <option value="2">Automatic Transmission</option>
                        <option value="3">
                          Continuously Variable Transmission
                        </option>
                        <option value="4">Dual-Clutch Transmission</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-7 mt_25">
                    <!-- input--group  -->
                    <div class="input--group">
                      <label for="mileage"
                        >Mileage <span>(in miles)</span></label
                      >
                      <input
                        id="mileage"
                        type="text"
                        placeholder="Enter your car mileage"
                        required
                      />
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-12 mt_25">
                    <!-- input--group  -->
                    <div class="input--group">
                      <label for="equipment">Special Options/Equipment</label>
                      <textarea
                        id="equipment"
                        placeholder="For example: sport package, long-range battery, FSD or other important factory-installed features "
                        required
                      ></textarea>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>

                  <div class="col-xl-4 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>Has the car been modified</h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="completely-stock"
                            type="radio"
                            name="isModified"
                            required
                          />
                          <label for="completely-stock">
                            Completely Stock
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="modified"
                            type="radio"
                            name="isModified"
                            required
                          />
                          <label for="modified">
                            Modified
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-xl-8 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>
                        Are there any significant mechanical or cosmetic flaws
                        that we should know about?
                      </h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="sag-yes"
                            type="radio"
                            name="significant"
                            required
                          />
                          <label for="sag-yes">
                            Yes
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="sag-no"
                            type="radio"
                            name="significant"
                            required
                          />
                          <label for="sag-no">
                            No
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-12">
                    <!-- modification--textarea  -->
                    <div class="modification--textarea mt_25">
                      <label for="modi-textarea"
                        >List any modifications, including modification or
                        removal of the catalytic converters.
                      </label>
                      <textarea
                        id="modi-textarea"
                        placeholder="Write here....."
                      ></textarea>
                    </div>
                    <!-- sagnificant mechanical textarea  -->
                    <div class="sagnificant--textarea mt_25">
                      <label for="sagnificant-textarea"
                        >Please give details
                      </label>
                      <textarea
                        id="sagnificant-textarea"
                        placeholder="Write here....."
                      ></textarea>
                    </div>
                  </div>

                  <div class="col-lg-4 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>Where is the car located</h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="locate-saudi"
                            type="radio"
                            name="locate"
                            required
                          />
                          <label for="locate-saudi">
                            Saudi
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="locate-arab"
                            type="radio"
                            name="locate"
                            required
                          />
                          <label for="locate-arab">
                            Arab Amirat
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-lg-8 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>Is this car for sale elsewhere?</h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="sale-yes"
                            type="radio"
                            name="isForSale"
                            required
                          />
                          <label for="sale-yes">
                            Yes
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="sale-no"
                            type="radio"
                            name="isForSale"
                            required
                          />
                          <label for="sale-no">
                            No
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <!-- next btn  -->
                  <p class="error"></p>
                  <div class="btn--area">
                    <a href="#" class="next-btn form--btn button w-100">
                      Next
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="16"
                        viewBox="0 0 18 16"
                        fill="none"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M0.707159 7.17715C0.307804 7.23213 0 7.57953 0 7.99989C0 8.45846 0.366312 8.83021 0.818182 8.83021L15.1999 8.83021L10.0047 14.0813L9.92528 14.1743C9.68696 14.4989 9.71243 14.9602 10.0023 15.2556C10.3212 15.5805 10.8392 15.5816 11.1594 15.258L17.7477 8.59955C17.787 8.56142 17.8224 8.51937 17.8536 8.47401C18.0766 8.14976 18.0452 7.69994 17.7593 7.41106L11.1593 0.741932L11.0674 0.661737C10.7466 0.421253 10.2921 0.449045 10.0023 0.744461C9.68342 1.06942 9.68454 1.59515 10.0047 1.91871L15.2012 7.16957L0.818182 7.16957L0.707159 7.17715Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- from step  -->
          <div class="form--step">
            <!-- title info  -->
            <div class="title--info">
              <h4>Title Info</h4>
              <!-- info box  -->
              <div class="info--box">
                <div class="row">
                  <div class="col-md-4 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>Where is the car titled?</h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="audi-car"
                            type="radio"
                            name="car-titled"
                            required
                          />
                          <label for="audi-car">
                            Audi R817
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="toyota"
                            type="radio"
                            name="car-titled"
                            required
                          />
                          <label for="toyota">
                            Toyota Supra
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-8 mt_25">
                    <div class="input--group">
                      <label for="state">State</label>
                      <select>
                        <option value="1" selected>State 1</option>
                        <option value="2">State 2</option>
                        <option value="3">State 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>Is the Vehicle titled in your name?</h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="named-yes"
                            type="radio"
                            name="vehicle--titled"
                            required
                          />
                          <label for="named-yes">
                            Yes
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="named-no"
                            type="radio"
                            name="vehicle--titled"
                            required
                          />
                          <label for="named-no">
                            No
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <div class="col-md-8 mt_25">
                    <div class="input--group">
                      <label for="state">What is the title’s status?</label>
                      <select>
                        <option value="1" selected>State 1</option>
                        <option value="2">State 2</option>
                        <option value="3">State 3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- reserve price  -->
            <div class="reserve--price mt_35">
              <h4>Reserve Price</h4>
              <!-- info box  -->
              <div class="info--box">
                <div class="row">
                  <div class="col-12 mt_25">
                    <!-- radio--box  -->
                    <div class="radio--box">
                      <h5>
                        Do you want to set a minimum price required for your
                        vehicle to sell?
                      </h5>
                      <div class="radio--options">
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="minimum-yes"
                            type="radio"
                            name="minimum"
                            required
                          />
                          <label for="minimum-yes">
                            Yes
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                        <!-- input group  -->
                        <div class="input--group">
                          <input
                            id="minimum-no"
                            type="radio"
                            name="minimum"
                            required
                          />
                          <label for="minimum-no">
                            No
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="9.87132"
                                cy="9.87132"
                                r="8.87132"
                                fill="#FD7F54"
                                stroke="white"
                                stroke-width="2"
                              />
                              <path
                                d="M14.0525 8.11854L9.3025 12.8685C9.1325 13.0385 8.9125 13.1185 8.6825 13.1185C8.4625 13.1185 8.2425 13.0385 8.0725 12.8685L5.6925 10.4985C5.3525 10.1485 5.3525 9.59854 5.6925 9.25854C6.0325 8.91854 6.5925 8.91854 6.9325 9.25854L8.6825 11.0085L12.8125 6.87854C13.1525 6.53854 13.7125 6.53854 14.0525 6.87854C14.3925 7.22854 14.3925 7.77854 14.0525 8.11854Z"
                                fill="white"
                              />
                            </svg>
                          </label>
                        </div>
                      </div>
                      <!-- error message  -->
                      <p class="error"></p>
                    </div>
                  </div>
                  <!-- set price  -->
                  <div class="input--group mt_25">
                    <label for="set-price"
                      >Set Price
                      <span
                        >(Minimum bid increment is $250. All bids in USD)</span
                      ></label
                    >
                    <div class="set-inputs">
                      <input type="text" placeholder="USD ($)" />
                      <input type="text" value="25,0000" required />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- photos  -->
            <div class="photos mt_35">
              <h4>Upload Photos & Videos</h4>
              <!-- info box  -->
              <div class="info--box">
                <h5 class="mt_25">
                  Please upload at last 6 photos and one videos of the Exterior and Interior of
                  the car
                </h5>
                <!-- upload box  -->
                <div class="dash--upload--box">
                  <form action="print-demo.html">
                    <label for="dash-upload">
                      <input
                        type="file"
                        class="form-control dropify"
                        name="dash-upload"
                        id="dash-upload"
                      />
                    </label>
                  </form>
                </div>
                <p>
                  To learn more about taking great car photos,
                  <a href="#">Check out our photo guide</a>
                </p>
                <p class="error"></p>
                <div class="buttons mt_70">
                  <a href="#" class="button prev--btn">
                    Prev
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2945 8.7976C18.6937 8.74142 19.0005 8.39309 18.9992 7.97273C18.9978 7.51416 18.6304 7.14352 18.1785 7.14489L3.79684 7.18831L8.9762 1.92152L9.05533 1.82832C9.29267 1.50304 9.26581 1.04178 8.97505 0.747269C8.65521 0.423302 8.13717 0.423778 7.81796 0.748331L1.24974 7.42666C1.21064 7.46491 1.17528 7.50707 1.14427 7.55252C0.922203 7.87745 0.954981 8.32717 1.24174 8.61518L7.86184 15.2644L7.95402 15.3443C8.27556 15.5838 8.72996 15.5546 9.01891 15.2583C9.33676 14.9324 9.33406 14.4067 9.01287 14.0841L3.80056 8.84895L18.1835 8.80552L18.2945 8.7976Z" fill="white"/>
                    </svg>
                  </a>
                  <button class="button w-100 form--btn submit-btn">
                    Submit
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="16"
                      viewBox="0 0 18 16"
                      fill="none"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.707159 7.17715C0.307804 7.23213 0 7.57953 0 7.99989C0 8.45846 0.366312 8.83021 0.818182 8.83021L15.1999 8.83021L10.0047 14.0813L9.92528 14.1743C9.68696 14.4989 9.71243 14.9602 10.0023 15.2556C10.3212 15.5805 10.8392 15.5816 11.1594 15.258L17.7477 8.59955C17.787 8.56142 17.8224 8.51937 17.8536 8.47401C18.0766 8.14976 18.0452 7.69994 17.7593 7.41106L11.1593 0.741932L11.0674 0.661737C10.7466 0.421253 10.2921 0.449045 10.0023 0.744461C9.68342 1.06942 9.68454 1.59515 10.0047 1.91871L15.2012 7.16957L0.818182 7.16957L0.707159 7.17715Z"
                        fill="white"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- popup close  -->
          <div class="pop--close">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="37"
              height="37"
              viewBox="0 0 37 37"
              fill="none"
            >
              <path
                d="M18.4986 16.3209L26.1295 8.68994L28.3098 10.8702L20.6788 18.5011L28.3098 26.1319L26.1295 28.3121L18.4986 20.6813L10.8678 28.3121L8.6875 26.1319L16.3184 18.5011L8.6875 10.8702L10.8678 8.68994L18.4986 16.3209Z"
                fill="#141414"
              />
            </svg>
          </div>
        </form>
      </div>
      <!-- car sell step form popup :: end  -->
    </main>

    <!-- footer :: start  -->
    <footer data-aos="fade-in" data-aos-duration="1200">
      <div class="container">
        <div class="custom--row">
          <!-- footer box  -->
          <div class="footer--box logo-box">
            <!-- footer logo  -->
            <a href="index.html">
              <img src="./assets/images/logo.svg" alt="" />
            </a>
            <!-- social icons  -->
            <ul class="social--icons">
              <li>
                <a href="#">
                  <svg
                    width="15"
                    height="13"
                    viewBox="0 0 15 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.8608 1.91289C14.3041 2.16564 13.7165 2.3236 13.098 2.41838C13.7165 2.03927 14.2113 1.439 14.4278 0.712362C13.8402 1.05988 13.1907 1.31263 12.4794 1.47059C11.9227 0.870326 11.1186 0.491211 10.2526 0.491211C8.58254 0.491211 7.22173 1.8813 7.22173 3.58732C7.22173 3.84006 7.25266 4.06121 7.31452 4.28237C4.80939 4.15599 2.55168 2.92387 1.03623 1.02829C0.788812 1.50219 0.634175 2.00767 0.634175 2.57635C0.634175 3.65051 1.15994 4.5983 1.99498 5.16697C1.50015 5.13538 1.03623 5.009 0.603248 4.78785V4.81945C0.603248 6.33591 1.65478 7.59963 3.04652 7.88396C2.7991 7.94715 2.52075 7.97874 2.2424 7.97874C2.05684 7.97874 1.84035 7.94715 1.65478 7.91556C2.05684 9.14768 3.17023 10.0639 4.50011 10.0639C3.44858 10.8853 2.14962 11.3908 0.726957 11.3908C0.479537 11.3908 0.232118 11.3908 0.015625 11.3592C1.37644 12.2438 2.95374 12.7493 4.68568 12.7493C10.2836 12.7493 13.3454 8.01033 13.3454 3.90325C13.3454 3.77688 13.3454 3.61891 13.3454 3.49254C13.933 3.08183 14.4588 2.54475 14.8608 1.91289Z"
                      fill="white"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg
                    width="9"
                    height="17"
                    viewBox="0 0 9 17"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2.48292 16.5612V9.02422H0V6.08691H2.48292V3.92074C2.48292 1.40691 3.98594 0.0380859 6.18121 0.0380859C7.23277 0.0380859 8.13653 0.118061 8.39991 0.153808V2.78091L6.87737 2.78161C5.68346 2.78161 5.45229 3.36115 5.45229 4.21158V6.08691H8.29966L7.92892 9.02422H5.45228V16.5612H2.48292Z"
                      fill="#FD7F54"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg
                    width="19"
                    height="20"
                    viewBox="0 0 19 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.8051 2.46323C12.2082 2.46323 12.4928 2.47242 13.4421 2.51664C14.0129 2.52378 14.5783 2.63083 15.1136 2.83316C15.5019 2.9861 15.8544 3.22038 16.1487 3.52093C16.4429 3.82147 16.6723 4.18162 16.822 4.57818C17.0201 5.12503 17.1249 5.70252 17.1319 6.28556C17.1747 7.25526 17.1842 7.54595 17.1842 10.0006C17.1842 12.4553 17.1751 12.746 17.1319 13.7157C17.1249 14.2987 17.0201 14.8762 16.822 15.4231C16.6723 15.8196 16.4429 16.1798 16.1487 16.4803C15.8544 16.7809 15.5019 17.0152 15.1136 17.1681C14.5783 17.3704 14.0129 17.4775 13.4421 17.4846C12.4932 17.5284 12.2086 17.538 9.8051 17.538C7.40156 17.538 7.11698 17.5288 6.16808 17.4846C5.59729 17.4775 5.03193 17.3704 4.49657 17.1681C4.10834 17.0152 3.75575 16.7809 3.46152 16.4803C3.16729 16.1798 2.93793 15.8196 2.78821 15.4231C2.59013 14.8762 2.48532 14.2987 2.47834 13.7157C2.43548 12.746 2.42605 12.4553 2.42605 10.0006C2.42605 7.54595 2.43505 7.25526 2.47834 6.28556C2.48532 5.70252 2.59013 5.12503 2.78821 4.57818C2.93793 4.18162 3.16729 3.82147 3.46152 3.52093C3.75575 3.22038 4.10834 2.9861 4.49657 2.83316C5.03193 2.63083 5.59729 2.52378 6.16808 2.51664C7.1174 2.47286 7.40199 2.46323 9.8051 2.46323ZM9.8051 0.806641C7.36213 0.806641 7.0544 0.817148 6.09436 0.861802C5.34734 0.876979 4.60826 1.02145 3.90854 1.28908C3.3083 1.52009 2.76463 1.88209 2.31547 2.34984C1.85714 2.80881 1.50243 3.36446 1.27614 3.97798C1.01413 4.69271 0.872691 5.44765 0.857833 6.2107C0.814974 7.19046 0.804688 7.5048 0.804688 10.0002C0.804688 12.4956 0.814974 12.8099 0.85869 13.7906C0.873548 14.5536 1.01499 15.3085 1.27699 16.0233C1.50304 16.6367 1.85744 17.1924 2.31547 17.6514C2.76488 18.1193 3.30885 18.4813 3.9094 18.7122C4.60912 18.9798 5.3482 19.1243 6.09521 19.1395C7.05526 19.1832 7.3617 19.1946 9.80596 19.1946C12.2502 19.1946 12.5567 19.1841 13.5167 19.1395C14.2637 19.1243 15.0028 18.9798 15.7025 18.7122C16.3002 18.4755 16.843 18.114 17.2961 17.6509C17.7492 17.1877 18.1028 16.6331 18.3341 16.0224C18.5961 15.3077 18.7375 14.5527 18.7524 13.7897C18.7952 12.8099 18.8055 12.4956 18.8055 10.0002C18.8055 7.5048 18.7952 7.19046 18.7515 6.20982C18.7366 5.44678 18.5952 4.69183 18.3332 3.9771C18.1072 3.36366 17.7528 2.80802 17.2947 2.34897C16.8453 1.88111 16.3013 1.5191 15.7008 1.28821C15.0011 1.02058 14.262 0.876104 13.515 0.860926C12.5558 0.817148 12.2481 0.806641 9.8051 0.806641Z"
                      fill="white"
                    />
                    <path
                      d="M9.80135 5.28271C8.88728 5.28271 7.99372 5.5596 7.23369 6.07837C6.47367 6.59713 5.8813 7.33446 5.53149 8.19713C5.18169 9.0598 5.09017 10.0091 5.26849 10.9249C5.44682 11.8407 5.88699 12.6819 6.53334 13.3421C7.1797 14.0024 8.0032 14.452 8.89971 14.6342C9.79623 14.8164 10.7255 14.7229 11.57 14.3656C12.4145 14.0082 13.1363 13.4031 13.6441 12.6267C14.152 11.8503 14.423 10.9376 14.423 10.0038C14.423 8.75171 13.9361 7.55087 13.0694 6.6655C12.2026 5.78012 11.0271 5.28271 9.80135 5.28271ZM9.80135 13.0683C9.20802 13.0683 8.628 12.8886 8.13466 12.5519C7.64132 12.2151 7.25681 11.7365 7.02975 11.1766C6.80268 10.6166 6.74328 10.0004 6.85903 9.40596C6.97478 8.81151 7.2605 8.26546 7.68006 7.83688C8.09961 7.4083 8.63415 7.11643 9.21609 6.99819C9.79803 6.87994 10.4012 6.94063 10.9494 7.17258C11.4976 7.40452 11.9661 7.79731 12.2957 8.30127C12.6254 8.80522 12.8013 9.39772 12.8013 10.0038C12.8013 10.8166 12.4853 11.5961 11.9227 12.1708C11.36 12.7455 10.597 13.0683 9.80135 13.0683Z"
                      fill="white"
                    />
                    <path
                      d="M14.6034 6.19376C15.1999 6.19376 15.6834 5.69983 15.6834 5.09053C15.6834 4.48124 15.1999 3.9873 14.6034 3.9873C14.007 3.9873 13.5234 4.48124 13.5234 5.09053C13.5234 5.69983 14.007 6.19376 14.6034 6.19376Z"
                      fill="white"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.20266 0.806641C4.43189 0.806641 0.59375 4.72736 0.59375 9.60079C0.59375 13.4849 3.06881 16.7827 6.47651 17.9552C6.90695 18.0285 7.05043 17.772 7.05043 17.5155C7.05043 17.2957 7.05043 16.746 7.05043 16.0132C4.64711 16.5628 4.14493 14.8406 4.14493 14.8406C3.75035 13.8147 3.17642 13.5582 3.17642 13.5582C2.38727 13.0085 3.24816 13.0085 3.24816 13.0085C4.10906 13.0818 4.57537 13.9246 4.57537 13.9246C5.32865 15.2803 6.58412 14.8773 7.0863 14.6574C7.15804 14.0711 7.37327 13.7047 7.62436 13.4849C5.72323 13.265 3.71448 12.4955 3.71448 9.12444C3.71448 8.17174 4.03731 7.36561 4.61124 6.77933C4.5395 6.55948 4.21667 5.68006 4.68298 4.43423C4.68298 4.43423 5.40039 4.21437 7.05043 5.35028C7.73197 5.16707 8.48525 5.05714 9.20266 5.05714C9.92007 5.05714 10.6733 5.16707 11.3549 5.35028C13.0049 4.21437 13.7223 4.43423 13.7223 4.43423C14.1887 5.64342 13.9017 6.52284 13.7941 6.77933C14.3321 7.40225 14.6908 8.17174 14.6908 9.12444C14.6908 12.4955 12.6821 13.2284 10.7451 13.4482C11.0679 13.7047 11.319 14.2544 11.319 15.0605C11.319 16.233 11.319 17.1857 11.319 17.4789C11.319 17.6987 11.4625 17.9919 11.9288 17.9186C15.3365 16.7827 17.8116 13.4849 17.8116 9.60079C17.8116 4.72736 13.9734 0.806641 9.20266 0.806641Z"
                      fill="white"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <!-- footer box  -->
          <div class="footer--box">
            <h4>How It Works</h4>
            <ul>
              <li>
                <a href="#">Buying a Car</a>
              </li>
              <li>
                <a href="#">Selling a car</a>
              </li>
              <li>
                <a href="#">Finalizing the Sale</a>
              </li>
              <li>
                <a href="#">FAQs</a>
              </li>
            </ul>
          </div>
          <!-- footer box  -->
          <div class="footer--box">
            <h4>Sellers</h4>
            <ul>
              <li>
                <a href="#">Submit Your car</a>
              </li>
              <li>
                <a href="#">Photography Guide</a>
              </li>
              <li>
                <a href="#">Inspections</a>
              </li>
              <li>
                <a href="#">Concierge Sales</a>
              </li>
            </ul>
          </div>
          <!-- footer box  -->
          <div class="footer--box">
            <h4>Helpful Links</h4>
            <ul>
              <li>
                <a href="#">Community</a>
              </li>
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Shipping</a>
              </li>
              <li>
                <a href="#">Shop C&B Merch</a>
              </li>
              <li>
                <a href="#">Careers</a>
              </li>
            </ul>
          </div>
          <!-- footer box  -->
          <div class="footer--box">
            <h4>Subscribe to Newsletter</h4>
            <form action="#">
              <input type="email" placeholder="Enter email address" required />
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <!-- footer bottom  -->
      <div class="footer--bottom">
        © Copyright 2024, All Rights Reserved by SCH
      </div>
    </footer>
    <!-- footer :: end  -->

    @include('frontend.partial.js')
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
      integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

  </body>
</html>
