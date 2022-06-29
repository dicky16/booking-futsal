<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="{{asset('temauser/css/swiper-bundle.min.css')}}">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('temauser/css/styles.css')}}">

        <title>Futsal</title>
        
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Futsal
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#celebrate" class="nav__link">About Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/login')}}" class="nav__link">Register/Login</a>
                        </li>
                    </ul>
                    

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>

                    <!-- <img src="assets/img/nav-light.png" alt="" class="nav__img"> -->
                </div>
                <div class="nav__btns">

                    <!-- Toggle button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="{{asset('temauser/img/lapangan.png')}}" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">Sewa Lapangan Futsal<br> Magetan</h1>
                        <a href="{{url('user/login')}}" class="button">Get Started</a>
                    </div>
                </div>
            </section>

            <!--==================== GIVING ====================-->
            <section class="giving section container" id="celebrate">
                <h2 class="section__title">
                    Kelebihan Kami
                </h2>

                <div class="giving__container grid">
                    <div class="giving__content">
                        <img src="{{asset('temauser/img/shield.gif')}}" alt="" class="giving__img">
                        <h3 class="giving__title">Akurat</h3>
                        <p class="giving__description">Sangat Akurat Informasinya.</p>
                    </div>

                    <div class="giving__content">
                        <img src="{{asset('temauser/img/stopwatch.gif')}}" alt="" class="giving__img">
                        <h3 class="giving__title">Cepat</h3>
                        <p class="giving__description">Sangat Cepat Pelayanannya.</p>
                    </div>

                    <div class="giving__content">
                        <img src="{{asset('temauser/img/handshake.gif')}}" alt="" class="giving__img">
                        <h3 class="giving__title">Mudah</h3>
                        <p class="giving__description">Sangat Mudah Peggunaannya.</p>
                    </div>
                </div>
            </section>

            <!--==================== CELEBRATE ====================-->
            <section class="celebrate section container">
                <div class="celebrate__container grid">
                    <div class="celebrate__data">
                        <h2 class="section__title celebrate__title">
                            Pengalaman Olahraga, Lebih Baik
                        </h2>
                        <p class="celebrate__description">
                            Kami di sini untuk memastikan keringat hasil jerih payah Anda tidak akan luput dari perhatian.
                            Karena anda pantas mendapatkan yang lebih baik.
                        </p>
                        <a href="{{url('user/login')}}" class="button">Booking Sekarang</a>
                    </div>

                    <img src="{{asset('temauser/img/lapangan.png')}}" alt="" class="celebrate__img">
                </div>
            </section>

            <!--==================== MESSAGE ====================-->
            <section class="message section container">
                <div class="message__container grid" style="column-gap: 0rem;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.094891690689!2d111.3371806139863!3d-7.672947278073084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79917a37f17d83%3A0x1ba9597f3887eaf8!2sMagetan%20Futsal!5e0!3m2!1sid!2sid!4v1655910884884!5m2!1sid!2sid" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border-radius: 1.25rem;"></iframe>
                </div>
            </section>
        </main>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="{{asset('temauser/js/scrollreveal.min.js')}}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{asset('temauser/js/swiper-bundle.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('temauser/js/main.js')}}"></script>
    </body>
</html>