<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bidder Profile</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" type="image/png" href="assets/images/logo-sm.svg" />
    <!-- ==== All Css Links ==== -->
    @include('frontend.partial.style')
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
      <!-- Profile Area :: Start  -->
      <section class="profile--area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="profile--contents--wrap"
                data-aos="fade-in"
                data-aos-duration="1500"
              >
                <!-- profile--contents  -->
                <div class="profile--contents">
                  <!-- preview--img  -->
                  <form action="#" data-aos="fade-up" data-aos-duration="1000">
                    <div class="preview--img">
                      <img
                        id="image-preview"
                        src="./assets/images/profile.png"
                        alt=""
                      />
                    </div>
                  </form>
                  <!-- profile--name  -->
                  <div class="profile--name">
                    <h1
                      data-aos="fade-up"
                      data-aos-duration="1000"
                      data-aos-delay="100"
                    >
                      Jason Mark
                    </h1>
                    <ul
                      data-aos="fade-up"
                      data-aos-duration="1000"
                      data-aos-delay="200"
                    >
                      <li>Contact Number : +880 1458 564</li>
                      <li>Address : Sunderland, Gmail, New york</li>
                    </ul>
                    <p
                      data-aos="fade-up"
                      data-aos-duration="1000"
                      data-aos-delay="300"
                    >
                      Lorem ipsum dolor sit amet consectetur. Morbi montes
                      malesuada eu in enim. Viverra ultricies tellus dolor
                      maecenas dui sit. Amet integer consequat sed tincidunt
                      vitae ut. Fringilla eu augue massa nunc.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Profile Area :: End  -->

      <!-- Bidder Profile History Area :: Start  -->
      <section class="bidder--profile--history">
        <div class="container">
          <!-- car--auctioned  -->
          <div class="car--auctioned">
            <h4 data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
              Cars Auctioned <span>(Listed 3 car, Sold 1) </span>
            </h4>
            <div class="row">
              <div
                class="col-xxl-3 col-lg-4 col-md-6 mt_20"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
                data-aos-offset="0"
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
                      <a href="car-single.html"
                        >1987 Renault Alliance GTA Convertible</a
                      >
                      <p>
                        1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                        Unmodified
                      </p>
                      <div class="card--footer">
                        <p>Fort Lauderdale, FL 33315</p>
                        <a href="car-single.html" class="buttonv2 button"
                          >Place a Bid</a
                        >
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
                data-aos-offset="0"
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
                      <a href="car-single.html"
                        >1987 Renault Alliance GTA Convertible</a
                      >
                      <p>
                        1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                        Unmodified
                      </p>
                      <div class="card--footer">
                        <p>Fort Lauderdale, FL 33315</p>
                        <a href="car-single.html" class="buttonv2 button"
                          >Place a Bid</a
                        >
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
                data-aos-offset="0"
              >
                <!-- car card  -->
                <div class="car--card">
                  <div class="img--area">
                    <img class="w-100" src="./assets/images/car8.png" alt="" />
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
              <div
                class="col-xxl-3 col-lg-4 col-md-6 mt_20"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
                data-aos-offset="0"
              >
                <!-- car card  -->
                <div class="car--card">
                  <div class="img--area">
                    <img class="w-100" src="./assets/images/car11.png" alt="" />
                  </div>
                  <div class="car--info">
                    <div class="bid--info">
                      <p>Sold for $10,000</p>
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
                        1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                        Unmodified
                      </p>
                      <div class="card--footer">
                        <p>Fort Lauderdale, FL 33315</p>
                        <p>May 4, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- bid--history -->
          <div class="bid--history mt_60">
            <h4 data-aos="fade-up" data-aos-duration="1000">
              Bid History <span>(Bid on 2 cars, 1 win)</span>
            </h4>
            <div class="row">
              <div
                class="col-xxl-3 col-lg-4 col-md-6 mt_20"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="50"
              >
                <!-- car card  -->
                <div class="car--card bid">
                  <div class="img--area">
                    <img class="w-100" src="./assets/images/car10.png" alt="" />
                  </div>
                  <div class="car--info">
                    <div class="bid--info">
                      <p>3 Bids to $21,000</p>
                      <p>
                        <span>Bid</span>
                        $10,000
                      </p>
                    </div>
                    <div class="car--model">
                      <a href="car-single.html"
                        >1987 Renault Alliance GTA Convertible</a
                      >
                      <p>
                        1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                        Unmodified
                      </p>
                      <div class="card--footer">
                        <p>Fort Lauderdale, FL 33315</p>
                        <p>May 4, 2024</p>
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
                <div class="car--card bid winner">
                  <div class="img--area">
                    <img class="w-100" src="./assets/images/car12.png" alt="" />
                  </div>
                  <div class="car--info">
                    <div class="bid--info">
                      <p>3 Bids to $21,000</p>
                      <p>Winner</p>
                    </div>
                    <div class="car--model">
                      <a href="car-single.html"
                        >1987 Renault Alliance GTA Convertible</a
                      >
                      <p>
                        1 Owner, Dual-Motor AWD, Florida-Owned, Mostly
                        Unmodified
                      </p>
                      <div class="card--footer">
                        <p>Fort Lauderdale, FL 33315</p>
                        <p>May 4, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- auction--comments  -->
          <div class="auction--comments mt_45">
            <h4 data-aos="fade-up" data-aos-duration="1000">
              Auction Comments <span>(25 comments)</span>
            </h4>
            <div class="col-12">
              <!-- single auction comments card  -->
              <div
                class="auction--comment--card"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <!-- img area  -->
                <div class="img--area">
                  <img src="./assets/images/car12.png" alt="" />
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="22"
                        viewBox="0 0 23 22"
                        fill="none"
                      >
                        <path
                          d="M11.7334 19.9131C6.7677 19.9131 2.74219 15.8876 2.74219 10.9219C2.74219 5.95617 6.7677 1.93066 11.7334 1.93066C16.6991 1.93066 20.7246 5.95617 20.7246 10.9219C20.7246 15.8876 16.6991 19.9131 11.7334 19.9131ZM11.7334 18.1149C15.706 18.1149 18.9264 14.8945 18.9264 10.9219C18.9264 6.94932 15.706 3.72891 11.7334 3.72891C7.76084 3.72891 4.54043 6.94932 4.54043 10.9219C4.54043 14.8945 7.76084 18.1149 11.7334 18.1149ZM12.6325 10.9219H16.229V12.7201H10.8343V6.42628H12.6325V10.9219Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p><span>Bid:</span> $10,000</p>
                  </div>
                </div>
                <!-- details area  -->
                <div class="details--area">
                  <h3>1987 Toyota Cressida</h3>
                  <p class="date">May 8, 2024 6:19 AM</p>
                  <span
                    >Re: 911Astonguy Porsche/Audi Fresno bought it on BaT for
                    their inventory. I bought it from them. It hasn’t changed
                    hands quite a few times in the past year.</span
                  >
                  <div class="replay">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="27"
                        height="27"
                        viewBox="0 0 27 27"
                        fill="none"
                      >
                        <path
                          d="M19.2266 10.3289C19.2266 14.5214 15.5866 17.9123 11.1016 17.9123L10.0941 19.1256L9.49823 19.8406C8.98907 20.4473 8.01406 20.3173 7.67823 19.5914L6.22656 16.3956C4.2549 15.0089 2.97656 12.8098 2.97656 10.3289C2.97656 6.13644 6.61656 2.74561 11.1016 2.74561C14.3732 2.74561 17.2007 4.55478 18.4682 7.15478C18.9557 8.11895 19.2266 9.19144 19.2266 10.3289Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M24.6429 14.5106C24.6429 16.9914 23.3646 19.1906 21.3929 20.5773L19.9412 23.7731C19.6054 24.4989 18.6304 24.6398 18.1212 24.0223L16.5179 22.0939C13.8962 22.0939 11.5562 20.9348 10.0938 19.1256L11.1012 17.9123C15.5862 17.9123 19.2262 14.5214 19.2262 10.3289C19.2262 9.19144 18.9554 8.11895 18.4679 7.15479C22.0104 7.96729 24.6429 10.9573 24.6429 14.5106Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M8.39844 10.3291H13.8151"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <p>Replay <span>02</span></p>
                  </div>
                </div>
              </div>
              <!-- single auction comments card  -->
              <div
                class="auction--comment--card"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <!-- img area  -->
                <div class="img--area">
                  <img src="./assets/images/car12.png" alt="" />
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="22"
                        viewBox="0 0 23 22"
                        fill="none"
                      >
                        <path
                          d="M11.7334 19.9131C6.7677 19.9131 2.74219 15.8876 2.74219 10.9219C2.74219 5.95617 6.7677 1.93066 11.7334 1.93066C16.6991 1.93066 20.7246 5.95617 20.7246 10.9219C20.7246 15.8876 16.6991 19.9131 11.7334 19.9131ZM11.7334 18.1149C15.706 18.1149 18.9264 14.8945 18.9264 10.9219C18.9264 6.94932 15.706 3.72891 11.7334 3.72891C7.76084 3.72891 4.54043 6.94932 4.54043 10.9219C4.54043 14.8945 7.76084 18.1149 11.7334 18.1149ZM12.6325 10.9219H16.229V12.7201H10.8343V6.42628H12.6325V10.9219Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p><span>Bid:</span> $10,000</p>
                  </div>
                </div>
                <!-- details area  -->
                <div class="details--area">
                  <h3>1987 Toyota Cressida</h3>
                  <p class="date">May 8, 2024 6:19 AM</p>
                  <span
                    >Re: 911Astonguy Porsche/Audi Fresno bought it on BaT for
                    their inventory. I bought it from them. It hasn’t changed
                    hands quite a few times in the past year.</span
                  >
                  <div class="replay">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="27"
                        height="27"
                        viewBox="0 0 27 27"
                        fill="none"
                      >
                        <path
                          d="M19.2266 10.3289C19.2266 14.5214 15.5866 17.9123 11.1016 17.9123L10.0941 19.1256L9.49823 19.8406C8.98907 20.4473 8.01406 20.3173 7.67823 19.5914L6.22656 16.3956C4.2549 15.0089 2.97656 12.8098 2.97656 10.3289C2.97656 6.13644 6.61656 2.74561 11.1016 2.74561C14.3732 2.74561 17.2007 4.55478 18.4682 7.15478C18.9557 8.11895 19.2266 9.19144 19.2266 10.3289Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M24.6429 14.5106C24.6429 16.9914 23.3646 19.1906 21.3929 20.5773L19.9412 23.7731C19.6054 24.4989 18.6304 24.6398 18.1212 24.0223L16.5179 22.0939C13.8962 22.0939 11.5562 20.9348 10.0938 19.1256L11.1012 17.9123C15.5862 17.9123 19.2262 14.5214 19.2262 10.3289C19.2262 9.19144 18.9554 8.11895 18.4679 7.15479C22.0104 7.96729 24.6429 10.9573 24.6429 14.5106Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M8.39844 10.3291H13.8151"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <p>Replay <span>02</span></p>
                  </div>
                </div>
              </div>
              <!-- single auction comments card  -->
              <div
                class="auction--comment--card"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <!-- img area  -->
                <div class="img--area">
                  <img src="./assets/images/car12.png" alt="" />
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="22"
                        viewBox="0 0 23 22"
                        fill="none"
                      >
                        <path
                          d="M11.7334 19.9131C6.7677 19.9131 2.74219 15.8876 2.74219 10.9219C2.74219 5.95617 6.7677 1.93066 11.7334 1.93066C16.6991 1.93066 20.7246 5.95617 20.7246 10.9219C20.7246 15.8876 16.6991 19.9131 11.7334 19.9131ZM11.7334 18.1149C15.706 18.1149 18.9264 14.8945 18.9264 10.9219C18.9264 6.94932 15.706 3.72891 11.7334 3.72891C7.76084 3.72891 4.54043 6.94932 4.54043 10.9219C4.54043 14.8945 7.76084 18.1149 11.7334 18.1149ZM12.6325 10.9219H16.229V12.7201H10.8343V6.42628H12.6325V10.9219Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p><span>Bid:</span> $10,000</p>
                  </div>
                </div>
                <!-- details area  -->
                <div class="details--area">
                  <h3>1987 Toyota Cressida</h3>
                  <p class="date">May 8, 2024 6:19 AM</p>
                  <span
                    >Re: 911Astonguy Porsche/Audi Fresno bought it on BaT for
                    their inventory. I bought it from them. It hasn’t changed
                    hands quite a few times in the past year.</span
                  >
                  <div class="replay">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="27"
                        height="27"
                        viewBox="0 0 27 27"
                        fill="none"
                      >
                        <path
                          d="M19.2266 10.3289C19.2266 14.5214 15.5866 17.9123 11.1016 17.9123L10.0941 19.1256L9.49823 19.8406C8.98907 20.4473 8.01406 20.3173 7.67823 19.5914L6.22656 16.3956C4.2549 15.0089 2.97656 12.8098 2.97656 10.3289C2.97656 6.13644 6.61656 2.74561 11.1016 2.74561C14.3732 2.74561 17.2007 4.55478 18.4682 7.15478C18.9557 8.11895 19.2266 9.19144 19.2266 10.3289Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M24.6429 14.5106C24.6429 16.9914 23.3646 19.1906 21.3929 20.5773L19.9412 23.7731C19.6054 24.4989 18.6304 24.6398 18.1212 24.0223L16.5179 22.0939C13.8962 22.0939 11.5562 20.9348 10.0938 19.1256L11.1012 17.9123C15.5862 17.9123 19.2262 14.5214 19.2262 10.3289C19.2262 9.19144 18.9554 8.11895 18.4679 7.15479C22.0104 7.96729 24.6429 10.9573 24.6429 14.5106Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M8.39844 10.3291H13.8151"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <p>Replay <span>02</span></p>
                  </div>
                </div>
              </div>
              <!-- single auction comments card  -->
              <div
                class="auction--comment--card"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <!-- img area  -->
                <div class="img--area">
                  <img src="./assets/images/car12.png" alt="" />
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="22"
                        viewBox="0 0 23 22"
                        fill="none"
                      >
                        <path
                          d="M11.7334 19.9131C6.7677 19.9131 2.74219 15.8876 2.74219 10.9219C2.74219 5.95617 6.7677 1.93066 11.7334 1.93066C16.6991 1.93066 20.7246 5.95617 20.7246 10.9219C20.7246 15.8876 16.6991 19.9131 11.7334 19.9131ZM11.7334 18.1149C15.706 18.1149 18.9264 14.8945 18.9264 10.9219C18.9264 6.94932 15.706 3.72891 11.7334 3.72891C7.76084 3.72891 4.54043 6.94932 4.54043 10.9219C4.54043 14.8945 7.76084 18.1149 11.7334 18.1149ZM12.6325 10.9219H16.229V12.7201H10.8343V6.42628H12.6325V10.9219Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p><span>Bid:</span> $10,000</p>
                  </div>
                </div>
                <!-- details area  -->
                <div class="details--area">
                  <h3>1987 Toyota Cressida</h3>
                  <p class="date">May 8, 2024 6:19 AM</p>
                  <span
                    >Re: 911Astonguy Porsche/Audi Fresno bought it on BaT for
                    their inventory. I bought it from them. It hasn’t changed
                    hands quite a few times in the past year.</span
                  >
                  <div class="replay">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="27"
                        height="27"
                        viewBox="0 0 27 27"
                        fill="none"
                      >
                        <path
                          d="M19.2266 10.3289C19.2266 14.5214 15.5866 17.9123 11.1016 17.9123L10.0941 19.1256L9.49823 19.8406C8.98907 20.4473 8.01406 20.3173 7.67823 19.5914L6.22656 16.3956C4.2549 15.0089 2.97656 12.8098 2.97656 10.3289C2.97656 6.13644 6.61656 2.74561 11.1016 2.74561C14.3732 2.74561 17.2007 4.55478 18.4682 7.15478C18.9557 8.11895 19.2266 9.19144 19.2266 10.3289Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M24.6429 14.5106C24.6429 16.9914 23.3646 19.1906 21.3929 20.5773L19.9412 23.7731C19.6054 24.4989 18.6304 24.6398 18.1212 24.0223L16.5179 22.0939C13.8962 22.0939 11.5562 20.9348 10.0938 19.1256L11.1012 17.9123C15.5862 17.9123 19.2262 14.5214 19.2262 10.3289C19.2262 9.19144 18.9554 8.11895 18.4679 7.15479C22.0104 7.96729 24.6429 10.9573 24.6429 14.5106Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M8.39844 10.3291H13.8151"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <p>Replay <span>02</span></p>
                  </div>
                </div>
              </div>
              <!-- single auction comments card  -->
              <div
                class="auction--comment--card"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <!-- img area  -->
                <div class="img--area">
                  <img src="./assets/images/car12.png" alt="" />
                  <div class="bid--info">
                    <p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="22"
                        viewBox="0 0 23 22"
                        fill="none"
                      >
                        <path
                          d="M11.7334 19.9131C6.7677 19.9131 2.74219 15.8876 2.74219 10.9219C2.74219 5.95617 6.7677 1.93066 11.7334 1.93066C16.6991 1.93066 20.7246 5.95617 20.7246 10.9219C20.7246 15.8876 16.6991 19.9131 11.7334 19.9131ZM11.7334 18.1149C15.706 18.1149 18.9264 14.8945 18.9264 10.9219C18.9264 6.94932 15.706 3.72891 11.7334 3.72891C7.76084 3.72891 4.54043 6.94932 4.54043 10.9219C4.54043 14.8945 7.76084 18.1149 11.7334 18.1149ZM12.6325 10.9219H16.229V12.7201H10.8343V6.42628H12.6325V10.9219Z"
                          fill="#141414"
                        />
                      </svg>
                      2 day left
                    </p>
                    <p><span>Bid:</span> $10,000</p>
                  </div>
                </div>
                <!-- details area  -->
                <div class="details--area">
                  <h3>1987 Toyota Cressida</h3>
                  <p class="date">May 8, 2024 6:19 AM</p>
                  <span
                    >Re: 911Astonguy Porsche/Audi Fresno bought it on BaT for
                    their inventory. I bought it from them. It hasn’t changed
                    hands quite a few times in the past year.</span
                  >
                  <div class="replay">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="27"
                        height="27"
                        viewBox="0 0 27 27"
                        fill="none"
                      >
                        <path
                          d="M19.2266 10.3289C19.2266 14.5214 15.5866 17.9123 11.1016 17.9123L10.0941 19.1256L9.49823 19.8406C8.98907 20.4473 8.01406 20.3173 7.67823 19.5914L6.22656 16.3956C4.2549 15.0089 2.97656 12.8098 2.97656 10.3289C2.97656 6.13644 6.61656 2.74561 11.1016 2.74561C14.3732 2.74561 17.2007 4.55478 18.4682 7.15478C18.9557 8.11895 19.2266 9.19144 19.2266 10.3289Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M24.6429 14.5106C24.6429 16.9914 23.3646 19.1906 21.3929 20.5773L19.9412 23.7731C19.6054 24.4989 18.6304 24.6398 18.1212 24.0223L16.5179 22.0939C13.8962 22.0939 11.5562 20.9348 10.0938 19.1256L11.1012 17.9123C15.5862 17.9123 19.2262 14.5214 19.2262 10.3289C19.2262 9.19144 18.9554 8.11895 18.4679 7.15479C22.0104 7.96729 24.6429 10.9573 24.6429 14.5106Z"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M8.39844 10.3291H13.8151"
                          stroke="#FD7F54"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <p>Replay <span>02</span></p>
                  </div>
                </div>
              </div>
              <div
                class="buttons mt_55"
                data-aos="fade-in"
                data-aos-duration="1500"
              >
                <a href="#" class="button">Load More Comments</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Bidder Profile History Area :: End  -->
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
  </body>
</html>
