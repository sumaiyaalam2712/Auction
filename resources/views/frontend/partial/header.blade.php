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
                        <a href="{{ route('auction.index') }}">Auctions</a>
                    </li>

                    <li>
                        <a href="{{ route('car_bid.index') }}">What’s Cars & Bids ?</a>
                    </li>

                    <li class="d-none mobile--login--btn">
                        <a href="{{ route('login.index') }}">Sign in</a>
                    </li>
                </ul>
                <!-- search   -->
                <form action="#">
                    <input type="text" placeholder="Search cars (Ex: Audi, Honda,Toyota)" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"
                        fill="none" ] class="search">
                        <path
                            d="M13.5233 12.9626L16.7353 16.1746L15.6746 17.2353L12.4626 14.0233C11.3077 14.9473 9.843 15.5 8.25 15.5C4.524 15.5 1.5 12.476 1.5 8.75C1.5 5.024 4.524 2 8.25 2C11.976 2 15 5.024 15 8.75C15 10.343 14.4473 11.8077 13.5233 12.9626ZM12.0185 12.4061C12.9356 11.4609 13.5 10.1717 13.5 8.75C13.5 5.84938 11.1506 3.5 8.25 3.5C5.34938 3.5 3 5.84938 3 8.75C3 11.6506 5.34938 14 8.25 14C9.6717 14 10.9609 13.4356 11.9061 12.5185L12.0185 12.4061Z"
                            fill="#5A5C5F" />
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
                <a href="{{ route('sell_car.index') }}" class="buttonv2 button">Sell a Car</a>
                <a href="{{ route('login.index') }}" class="button login-btn">Sign In</a>
                <a href="{{ route('logout') }}" class="hum_log-out_btn"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-light fa-power-off"></i> Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
