<?php
    $root_path = "";
    $page = "homepage";
    $title = "Homepage | Gcar";
?>

<!-- HEADER -->
<?php require_once $root_path.'header.php'; ?>
<!-- //HEADER -->

<body>

    <div class="c-page-bg  js-page-bg js-gradient-bg">
        <i class="c-page-bg__bg js-page-bg-bg"></i>
    </div>

    <div class="c-loader js-loader">
        <ul class="c-loader__lines js-loader-lines">
            <li class="c-loader-line c-loader-line--left js-loader-line">
                <i></i>
            </li>
            <li class="c-loader-line c-loader-line--center js-loader-line">
                <i></i>
            </li>
            <li class="c-loader-line c-loader-line--right js-loader-line">
                <i></i>
            </li>
        </ul>
    </div>

    <!-- NAVIGATION -->
    <?php require_once $root_path.'navigation.php'; ?>
    <!-- //NAVIGATION -->

    <!-- PAGE WRAPPER -->
    <div data-barba="wrapper">
        <div id="home" class="o-page o-page--home" data-barba="container" data-barba-namespace="homepage" data-title="">
            <!-- PAGE CONTENT -->
            <div class="o-page__inner o-page__inner--home">

                <section id="homepage-slider" data-id="2" data-url="get-home-slider" style="display: none;"
                    class="o-section js-video-slider c-homepage-slider ">
                    <!-- PAGE -->
                    <div class="c-homepage-slider__inner js-onboarding-bg">
                        <div class="o-container">
                            <div class="js-slider swiper-container">
                                <div class="swiper-wrapper js-slider-wrapper">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="c-homepage-slider__canvas js-canvas-wrapper">

                    </div>

                    <div class="c-homepage-slider__pagination js-pagination-list-hover-area">
                        <i class="c-homepage-slider__pagination-progress js-pagination-progress-wrapper">
                            <span class="c-homepage-slider__pagination-progress-line js-pagination-progress"></span>
                        </i>
                        <div class="c-homepage-slider__pagination-current u-b3 u-fw-semi-bold u-uppercase">
                            <div class="c-homepage-slider__pagination-list">
                                <ul>
                                    <li class="js-pagination-list-item">
                                        <span class="js-onboarding-menu-item">
                                            01 Nevera and Nevera R </span>
                                    </li>
                                    <li class="js-pagination-list-item">
                                        <span class="js-onboarding-menu-item">
                                            02 Technology </span>
                                    </li>
                                    <li class="js-pagination-list-item">
                                        <span class="js-onboarding-menu-item">
                                            03 Development </span>
                                    </li>
                                    <li class="js-pagination-list-item">
                                        <span class="js-onboarding-menu-item">
                                            04 About Us </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <i class="c-scroll-indicator">
                        <i></i>
                    </i>
                </section>
                <div class="hero-slider" id="hero">

                    <canvas id="bgCanvas"></canvas>

                    <div class="side-menu-left u-b3 u-fw-semi-bold u-uppercase">
                        <div class="menu-line"></div>
                        <div class="menu-indicator"></div>
                        <ul>
                            <li data-index="0" class="active">
                                <span class="number">01</span>
                                <span class="text">Supercar of the Year 2026</span>
                            </li>
                            <li data-index="1">
                                <span class="number">02</span>
                                <span class="text">Most Expensive</span>
                            </li>
                            <li data-index="2">
                                <span class="number">03</span>
                                <span class="text">World's Fastest</span>
                            </li>
                            <li data-index="3">
                                <span class="number">04</span>
                                <span class="text">Fastest 0–100</span>
                            </li>
                            <li data-index="4">
                                <span class="number">05</span>
                                <span class="text">Nürburgring Record</span>
                            </li>
                            <li data-index="5">
                                <span class="number">06</span>
                                <span class="text">Most Powerful</span>
                            </li>
                            <li data-index="6">
                                <span class="number">07</span>
                                <span class="text">World’s Rarest</span>
                            </li>
                            <li data-index="7">
                                <span class="number">08</span>
                                <span class="text">Most Beautiful</span>
                            </li>
                        </ul>
                    </div>

                    <div class="slides">
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Chevrolet-Corvette-ZR1.mp4" autoplay muted
                                    loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Chevrolet Corvette ZR1</h1>
                                <p class="u-b2">ZR1 redefines Corvette performance with a twin-turbocharged 5.5L
                                    flat-plane crank V8 — the most powerful engine ever offered in a production
                                    Corvette.</p>
                                <!-- https://www.youtube.com/watch?v=LGJbxUVYpBk -->
                                <a class="c-button c-button--light"
                                    href="https://www.topgear.com/car-news/usa/here-are-your-winners-topgearcom-us-car-awards-2026"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Bugatti-La-Voiture-Noire.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Bugatti La Voiture Noire</h1>
                                <p class="u-b2">The $12.5 Million Bugatti La Voiture Noire is the World's most expensive
                                    new car.</p>
                                <a class="c-button c-button--light"
                                    href="https://www.globenewswire.com/news-release/2025/09/17/3151872/0/en/The-World-s-Rarest-Bugatti-SBX-Cars-in-Collaboration-with-Broad-Arrow-Offers-the-One-of-One-La-Voiture-Noire.html"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/YANGWANG-U9-Xtreme.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">YANGWANG U9 Xtreme</h1>
                                <p class="u-b2">The YANGWANG U9 Xtreme (formerly called the Track Edition) is now the
                                    fastest production car in the world, having hit 308.4mph (496.22 km/h) at the ATP
                                    Automotive Testing Papenburg test track in Germany.</p>
                                <a class="c-button c-button--light"
                                    href="https://www.topgear.com/car-news/electric/yangwang-u9-xtreme-hits-308mph-becomes-worlds-fastest-ever-production-car"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light"
                                    href="https://www.topgear.com/car-news/electric/yangwang-u9-xtreme-hits-308mph-becomes-worlds-fastest-ever-production-car">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Rimac-Nevera.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Rimac Nevera R</h1>
                                <p class="u-b2">The Nevera R achieved a new 0-60 mph time of 1.66 seconds, beating the
                                    Nevera's 1.74-second record, while reaching 100 km/h in just 1.72 seconds compared
                                    to 1.81 seconds. </p>
                                <a class="c-button c-button--light"
                                    href="https://www.rimac-newsroom.com/press-releases/rimac-automobili/rimac-nevera-r-becomes-new-0-400-0-champion-and-sets-24-performance-records"
                                    target="">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Mercedes-amg-one.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Mercedes-AMG One</h1>
                                <p class="u-b2">A lap time of 6:29.090 minutes, set on September 23, 2024, by Maro
                                    Engel, currently represents the official Nürburgring-Nordschleife record for
                                    production cars.
                                </p>
                                <a class="c-button c-button--light"
                                    href="https://www.motor1.com/news/735878/amg-one-new-nurburgring-record"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Koenigsegg-GEMERA.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Koenigsegg Gemera</h1>
                                <p class="u-b2">This 1500-hp eight-cylinder beast is still mated to a 800-hp Dark Matter
                                    e-motor, sending output for the the Gemera HV8 (meaning Hot V8) skyrocketing to 2300
                                    hp and 2028 pound-feet of torque. </p>
                                <a class="c-button c-button--light"
                                    href="https://www.caranddriver.com/news/a44506609/koenigsegg-gemera-production-v8-details/"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Bugatti-La-Voiture-Noire.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">Bugatti La Voiture Noire</h1>
                                <p class="u-b2">The World’s Rarest Bugatti: SBX Cars, in Collaboration with Broad Arrow,
                                    Offers the One-of-One La Voiture Noire.</p>
                                <a class="c-button c-button--light"
                                    href="https://www.globenewswire.com/news-release/2025/09/17/3151872/0/en/The-World-s-Rarest-Bugatti-SBX-Cars-in-Collaboration-with-Broad-Arrow-Offers-the-One-of-One-La-Voiture-Noire.html"
                                    target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-media">
                                <video src="<?php echo $root_path; ?>/uploads/2021/05/30204415/Ferrari-Daytona-SP3.mp4" muted loop></video>
                            </div>
                            <div class="slide-content">
                                <h1 class="u-a4 u-uppercase">FERRARI DAYTONA SP3</h1>
                                <p class="u-b2">The Ferrari Daytona SP3 has been awarded the “Grand Prize: Most
                                    Beautiful Supercar 2022” by a panel of expert judges at the 37th Paris Festival
                                    Automobile International.</p>
                                <!-- https://www.youtube.com/watch?v=gZX-BFk12Jc&t=3s -->
                                <a class="c-button c-button--light"
                                    href="https://festivalautomobile.com/en/winners-2022/" target="_blank">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Record">Record</i>
                                        </span>
                                    </span>
                                </a>
                                <a class="c-button c-button--light" href="https://www.rimac-automobili.com/nevera/">
                                    <span class="c-button__inner">
                                        <span class="c-button__label">
                                            <i class="c-button__label-inner" title="Specifications">Specifications</i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="progress"></div>
                    <i class="c-scroll-indicator">
                        <i></i>
                    </i>
                </div>

            </div>
            <!-- //PAGE CONTENT -->
        </div>

    </div>
    <!-- //PAGE WRAPPER -->

    <?php require_once $root_path.'footer-link.php'; ?>

</body>

</html>