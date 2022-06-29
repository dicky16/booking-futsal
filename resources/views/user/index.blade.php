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
                            <a href="{{url('user/index')}}" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/booking')}}" class="nav__link">Booking</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/pesanan')}}" class="nav__link">Pesanan</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('user/profil')}}" class="nav__link">Profil</a>
                        </li>
                        <li class="nav__item">
                            <a href="" class="nav__link">Logout</a>
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
                <div class="home__container container grid" style="text-align-last: center; grid-template-columns: repeat(1, 1fr); margin-top: 10%;">
                    <div class="home__data">
                        <h1 class="home__title">Selamat Datang di<br>  Sewa Lapangan Futsal Magetan</h1>
                    </div>
                </div>
            </section>

            <!--==================== GIVING ====================-->
            <section class="celebrate section container" style="margin-top: 10%;">
                <div class="celebrate__container grid">                    
                    <img src="{{asset('temauser/img/lapangan.png')}}" alt="" class="celebrate__img">

                    <div class="celebrate__data">
                        <h2 class="section__title celebrate__title">
                            Lapangan 1
                        </h2>
                        <p class="celebrate__description">
                            Kami di sini untuk memastikan keringat hasil jerih payah Anda tidak akan luput dari perhatian.
                            Karena anda pantas mendapatkan yang lebih baik.
                        </p>
                    </div>
                </div>
            </section>

            <!--==================== CELEBRATE ====================-->
            <section class="celebrate section container">
                <div class="celebrate__container grid">
                    <div class="celebrate__data">
                        <h2 class="section__title celebrate__title">
                            Lapangan 2
                        </h2>
                        <p class="celebrate__description">
                            Kami di sini untuk memastikan keringat hasil jerih payah Anda tidak akan luput dari perhatian.
                            Karena anda pantas mendapatkan yang lebih baik.
                        </p>
                    </div>

                    <img src="{{asset('temauser/img/lapangan.png')}}" alt="" class="celebrate__img">
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