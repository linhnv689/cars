<?php
    $root_path = "../../..";
    $site_title = "Gcar";
    $page = $brand = $manufacturer = "Chevrolet";

    $model = "Corvette ZR1";
    $title = "2026 $brand $model: High-Performance Vehicle | $site_title";
?>

<!-- HEADER -->
<?php require_once "$root_path/header.php"; ?>
<!-- //HEADER -->

<body class="page-template page-template-page-templates page-template-chevrolet-corvette-zr1 page-template-page-templates nevera-php page page-parent">
    
    <div class="c-page-bg  js-page-bg js-gradient-bg">
        <i class="c-page-bg__bg js-page-bg-bg"></i>
    </div>

    <!-- NAVIGATION -->
    <?php require_once "$root_path/navigation.php"; ?>
    <!-- //NAVIGATION -->


    <!-- PAGE WRAPPER -->
    <div data-barba="wrapper">
        <div id="nevera" class="o-page o-page--nevera" data-barba="container" data-barba-namespace="nevera" data-title="">

            <div id="nevera-reveal-images" class="o-page__inner o-page__inner--nevera js-scrollspy-container">
                <!-- <span class="u-page-logo js-page-logo">

                    <svg class="u-nevera-logo-sign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157 10">
                        <path class="nevera-logo-sign" d="M4.2,0C4,0,3.9,0.1,3.8,0.2L0,9.8C0,9.9,0,10,0.1,10h6.7C7,10,7.1,9.9,7.1,9.8l3.3-8.2c0-0.1,0.2-0.1,0.3,0
	l7.5,8.2c0.2,0.2,0.3,0.2,0.6,0.2h29.3c0.3,0,0.5-0.1,0.6-0.2l1.4-1.3c0.1-0.2,0-0.3-0.1-0.3H32.9c-0.1,0-0.1-0.1-0.1-0.2l2.3-5.8
	c0.1-0.2,0.2-0.2,0.4-0.2h15.3c0.2,0,0.3,0.1,0.3,0.3l3.4,7.6c0.1,0.2,0.2,0.2,0.3,0.2h11.6c0.4,0,0.5,0,0.8-0.3l9.4-8.2
	c0.3-0.2,0.4-0.1,0.3,0.1l-3.2,8c-0.1,0.2,0,0.5,0.2,0.5h33.4c0.2,0,0.3-0.1,0.3-0.2l3.1-7.7c0.1-0.2,0.1-0.2,0.3-0.2h8.7
	c0.1,0,0.2,0.1,0.3,0.2l0.4,0.9c0.1,0.2,0.1,0.2,0.3,0.2h8.1c0.2,0,0.3-0.1,0.2-0.2l-1.1-2.6C127.8,0,127.7,0,127.4,0h-23.3
	c-0.2,0-0.3,0.2-0.4,0.3L100.7,8c0,0.1-0.1,0.2-0.3,0.2H81.6c-0.2,0-0.3-0.1-0.2-0.3l2.3-5.8c0-0.1,0.1-0.2,0.3-0.2h16.6
	c0.1,0,0.2-0.1,0.1-0.3l-0.9-1.3C99.8,0.1,99.7,0,99.4,0H71.3c-0.3,0-0.4,0-0.6,0.2l-9.4,8.1c-0.2,0.2-0.4,0.2-0.4,0l-3.4-8
	C57.4,0.1,57.2,0,57,0H28.8c-0.1,0-0.3,0.2-0.3,0.3l-3.3,8.2c-0.1,0.2-0.2,0.2-0.3,0l-7.5-8.3C17.2,0,17,0,16.8,0H4.2z M36.8,4.5
	c0.1-0.3,0.2-0.4,0.5-0.4h10.1c0.3,0,0.4,0.1,0.2,0.4l-0.4,1.1c-0.1,0.2-0.2,0.4-0.4,0.4h-10c-0.3,0-0.4-0.2-0.2-0.5L36.8,4.5z
	 M85.3,4.5c0.1-0.3,0.2-0.4,0.5-0.4h10.1c0.3,0,0.4,0.1,0.2,0.4l-0.4,1.1c-0.1,0.2-0.2,0.4-0.4,0.4h-10c-0.3,0-0.4-0.2-0.2-0.5
	L85.3,4.5z M133.9,10h-14c-0.2,0-0.2-0.1-0.3-0.2c0,0,0,0,0,0l-1.7-2.5c-0.1-0.1-0.1-0.3,0-0.4l2.1-2c0.1-0.1,0.2-0.2,0.4-0.2h7.8
	c0.1,0,0.2,0.2,0.1,0.3l-1.6,1.4c-0.1,0.1-0.1,0.2-0.1,0.4l1.1,1.8c0,0.1,0.1,0.1,0.2,0l9.7-8.2c0.1-0.1,0.3-0.2,0.6-0.2H150
	c0.3,0,0.4,0.2,0.5,0.3l6.4,9.3c0.1,0.2,0,0.3-0.1,0.3H150c-0.3,0-0.4-0.1-0.5-0.3l-5.4-8c-0.1-0.1-0.2-0.1-0.3,0l-9.3,8.1
	C134.3,10,134.1,10,133.9,10z" />
                    </svg>
                </span> -->
                <div class="c-scrollspy-wrapper c-scrollspy-wrapper--nevera js-scrollspy js-inpage-navigation-trigger">
                    <div class="c-scrollspy u-b2--A u-fw-semi-bold u-uppercase">
                        <div class="c-scrollspy__prepend"> <!-- show dot -->
                            <i></i>
                            <i></i>
                        </div>
                        <div class="c-scrollspy__progress js-scrollspy-progress">
                            <i class="c-scrollspy__progress-line js-scrollspy-progress-line"></i>
                        </div>
                        <div class="c-scrollspy__current">
                            <span class="c-scrollspy__current-number js-scrollspy-current-number">

                            </span>
                            <p class="c-scrollspy__current-label js-scrollspy-current-label">

                            </p>
                        </div>
                        <span class="c-scrollspy__count js-scrollspy-count">open</span>
                        <div class="c-scrollspy__append"> <!-- show dot -->
                            <i></i>
                            <i></i>
                        </div>
                    </div>
                </div>
                <div class="c-inpage-navigation-wrapper js-inpage-navigation">
                    <i class="c-inpage-navigation-overlay js-inpage-navigation-overlay"></i>
                    <div class="c-inpage-navigation">
                        <div class="c-inpage-navigation__links-wrapper">
                            <span class="c-inpage-navigation-close js-inpage-navigation-close">
                                <span class="c-close-button">
                                    <i class="c-close-button__line c-close-button__line--top"></i>
                                    <i class="c-close-button__line c-close-button__line--bottom"></i>
                                </span>
                            </span>
                            <ul class="c-inpage-navigation__links u-b2--A u-uppercase js-context-shifting">
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#intro"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">01</span>
                                        <span class="c-inpage-navigation-link__label">Intro</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#performance"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">02</span>
                                        <span class="c-inpage-navigation-link__label">Performance</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#driving-experience"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">03</span>
                                        <span class="c-inpage-navigation-link__label">Experience</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#design"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">04</span>
                                        <span class="c-inpage-navigation-link__label">Design</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#engineering"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">
                                            05
                                        </span>
                                        <span class="c-inpage-navigation-link__label">Engineering</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#in-house-production"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">06</span>
                                        <span class="c-inpage-navigation-link__label">In-house Production</span>
                                    </a>
                                </li>
                                <li
                                    class="c-inpage-navigation__links-item js-inpage-navigation-item js-context-shifting-link">
                                    <a href="#tech-spec"
                                        class="c-inpage-navigation-link js-inpage-navigation-link js-scroll-to">
                                        <span class="c-inpage-navigation-link__number">07</span>
                                        <span class="c-inpage-navigation-link__label">Technical Specs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="o-section-wrapper o-section-wrapper--nevera">
                    <div class="c-nevera-loader js-nevera-loader" data-lottie-json="<?php echo $root_path; ?>/wp-json/nevera-lottie.json">
                        <div class="c-nevera-loader__inner js-nevera-loader-inner">

                        </div>
                    </div>

                    <section id="intro" class="pr o-section o-section--full o-section--nevera-intro js-scrollspy-item" data-scrollspy-title="Intro">
                        <div class="c-scrolling-reveal-bg js-mask-reveal-video js-split-video">

                            <div class="c-custom-video-player js-custom-video-player no-poster">

                                <figure class="c-custom-video-player__cover">
                                    <figcaption class="c-custom-video-player__cover-text">
                                        <h4 class="u-a1"></h4>
                                        <p class="u-b2"></p>
                                    </figcaption>
                                </figure>

                                <div class="c-custom-video-player__cover-image-wrapper">
                                    <p class="c-custom-video-player__time">
                                        <span class="js-time-current">00:00</span>
                                        —
                                        <span class="js-time-duration">00:00</span>
                                    </p>

                                    <video class="c-custom-video-player__video js-video-element" preload="metadata"
                                        crossorigin="anonymous" playsinline data-autoplay="true">
                                        <source src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/Chevrolet-Corvette-ZR1.mp4" type="video/mp4" />
                                    </video>
                                    <!--end video source-->
                                </div>
                            </div>


                            <div class="c-custom-video-player js-custom-video-player no-poster">

                                <figure class="c-custom-video-player__cover">
                                    <figcaption class="c-custom-video-player__cover-text">
                                        <h4 class="u-a1"></h4>
                                        <p class="u-b2"></p>
                                    </figcaption>
                                </figure>

                                <div class="c-custom-video-player__cover-image-wrapper">
                                    <p class="c-custom-video-player__time">
                                        <span class="js-time-current">00:00</span>
                                        —
                                        <span class="js-time-duration">00:00</span>
                                    </p>

                                    <!-- <video class="c-custom-video-player__video js-video-element" preload="metadata"
                                        crossorigin="anonymous" playsinline data-autoplay="true">
                                        <source src="<?php echo $root_path; ?>/uploads/2021/05/30204415/NeveraR.mp4" type="video/mp4" />
                                    </video> -->
                                    <img src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2025-Chevrolet-Corvette-ZR1-001-1080.jpg" 
                                        style="object-position:center" alt="<?php echo $model; ?>">
                                    <!--end video source-->
                                </div>
                            </div>
                            <!--<i class="c-scrolling-reveal-bg__video-overlay js-mask-reveal-video-overlay"></i>-->
                        </div>
                        <div class="spliter">
                            <div class="spliter__one">
                                <div class="pr">
                                    <div class="flex-line justify-content-center">
                                        <span class="c-button c-button--play js-video-popup-btn"
                                            data-popup="#intro-video">
                                            <span class="c-button__inner">
                                                <span class="c-button__prepend">
                                                    <svg class="u-icon u-icon--play" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 16 16">
                                                        <path class="st0" d="M12.5,8l-9.1,5V3L12.5,8z" />
                                                    </svg>
                                                </span>
                                                <span class="c-button__label">
                                                    <i class="c-button__label-inner" title="Play video">Play video</i>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="spliter__one">
                                <div class="js-nevera-logo js-nevera-logo--text">
                                    <div class="mx-2 mx-lg-0">
                                        <span class="js-nevera-logo--holder t-2 u-uppercase mt-0"><?php echo $brand; ?></span>
                                    </div>
                                    <h2 class="t-1 u-uppercase js-nevera-logo--r mb-2 mb-lg-0"><?php echo $model; ?></h2>                       
                                    <div class="mx-2 mx-lg-0">
                                        <span class="js-nevera-logo--holder text-shadow t-3c u-uppercase mt-0">The fastest, most powerful Corvette ever</span>
                                    </div>
                                    <div class="flex-line justify-content-center mt-5">
                                        <a class="c-button" target="_blank" href="../NeveraR/index.html">
                                            <span class="c-button__inner w-auto">
                                                <span class="c-button__prepend width">
                                                    <svg class="u-icon u-icon--play short" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 16 16">
                                                        <path class="st0" d="M12.5,8l-9.1,5V3L12.5,8z" />
                                                    </svg>
                                                </span>
                                                <span class="c-button__label">
                                                    <i class="c-button__label-inner" title="Explore 2025 <?php echo $model; ?>">Explore 2025 <?php echo $model; ?></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <div class="section section--are-you py-md-8 py-4">
                        <div class="c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper">
                            <div class="swiper slider-1">
                                <div class="swiper-wrapper">                                    
                                    <div class="swiper-slide">
                                        <div class="">
                                            <div class="container-fluid">
                                                <div class="row pr zi-10">
                                                    <div class="col-12 col-md-8 offset-md-2">
                                                        <h3 class="t-1 text-gray mb-3 r-margin">ZR1: The unthinkable has arrived</h3>
                                                    </div>
                                                    <div class="col-1 offset-1 offset-md-4 line-col"></div>                                      
                                                    <div class="col-7 col-md-4">
                                                        <p class="c-nevera-welcome__header-description u-b0 u-a2-400">
                                                            If you seek a performance marvel — a vehicle crafted with luxury materials and top-of-the-line detailing — look no further than Corvette ZR1. With a twin turbocharged 5.5L V8 engine and edge-to-edge aerodynamics, it takes driving dynamics to a whole different level.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=""> <!-- .wrapper -->
                                            <div class="container-fluid pr">
                                                <div class="row pr zi-10">
                                                    <div class="col-12 col-md-8 offset-md-2">
                                                        <!-- <span class="t-4">Are you</span> -->
                                                        <h3 class="t-1 text-gray mb-3 r-margin">The pinnacle of power and performance</h3>
                                                    </div>
                                                    <div class="col-1 offset-1 offset-md-4 line-col"></div>
                                                    <div class="col-7 col-md-4">
                                                        <p class="c-nevera-welcome__header-description u-b0 u-a2-400">
                                                            ZR1 redefines Corvette performance with a twin-turbocharged 5.5L flat-plane crank V8 — the most powerful engine ever offered in a production Corvette. Engineered to push the limits of performance and innovation, it fuses advanced aerodynamics, cutting-edge technology and precision handling to rival the world's most elite supercars.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="">
                                            <div class="container-fluid">

                                                <div class="row pr zi-10">
                                                    <div class="col-12 col-md-8 offset-md-2">
                                                        <h3 class="t-1 text-gray mb-3 r-margin">Rimac?</h3>
                                                    </div>

                                                    <div class="col-1 offset-1 offset-md-5 line-col"></div>

                                                    <div class="col-7 col-md-4">
                                                        <p class="c-nevera-welcome__header-description u-b0 u-a2-400">
                                                            To be Rimac means to be relentless in pursuit of perfection. Our hypercars embody this spirit, delivering unmatched performance, cutting-edge technology, and a driving
                                                            experience
                                                            like no other. Join the movement and be part of a revolutionary journey.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="swiper-button-next arrow arrow--right arrow--no-text">
                                    <div class="arrow__line">
                                        <div style="background: white;"></div>
                                        <div style="background: white;"></div>
                                        <div style="background: rgba(215, 215, 215, 0.843);"></div>
                                    </div>
                                    <div class="arrow__circle">
                                        <div class="arrow__cap"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <section id="performance" class="o-section o-section--scrolling-section-reveal js-mask-reveal-trigger js-scrollspy-item" data-scrollspy-title="Performance">
                        <div class="c-scrolling-reveal-bg js-mask-reveal-video">

                            <video class="c-scrolling-reveal-bg__video"
                                src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2022-apollo-evo-performance-001.mp4" preload="auto" muted
                                playsinline autoplay loop type="video/mp4"></video>
                        </div>

                        <div class="c-scrolling-reveal-content">
                            <div class="c-scrolling-reveal-wrapper js-mask-reveal-content-trigger">
                                <div class="c-scrolling-reveal">
                                    <div class="o-container">
                                        <div class="c-scrolling-reveal__header u-text-center">
                                            <div class="c-scrolling-reveal__heading">
                                                <h2 class="c-reveal-mask__title js-mask-reveal-title u-a4 u-fw-medium u-uppercase">Performance</h2>
                                                <div class="c-reveal-mask__text js-mask-reveal-text">
                                                    <p class="u-b0">ZR1 transforms raw power into refined performance. With intuitive dynamics and razor-sharp control, it's engineered to thrill at every turn.</p>
                                                    <a href="https://rimac-automobili.com/bendingphysics" class="c-button">
                                                        <span class="c-button__inner">
                                                            <span class="c-button__label">
                                                                <i class="c-button__label-inner" title="World Records">World Records</i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div
                                            class="c-scrolling-reveal__content c-scrolling-reveal__content--performance js-mask-reveal-content">
                                            <div class="o-container">
                                                <div class="c-accordion__item c-accordion__item--performance">
                                                    <div class="c-accordion-header c-accordion-header--tech-spec"
                                                        style="cursor: auto">
                                                        <div class="c-accordion-header__title-row">
                                                            <div class="spec-logo u-uppercase t-2"><?php echo $model; ?></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="c-stats-wrapper pad-y-sm js-data-toggler">
                                                    <ul class="c-stats-wrapper__list">

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">Power</span>
                                                                    <i class="u-b4 u-uppercase">(793 kW)</i>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4">1,064</span>
                                                                    <span class="u-b4 u-uppercase">hp</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- //STATS ITEM -->

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">torque</span>
                                                                </div>                                                            
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4 js-data-toggler-data"
                                                                        data-toggler-default="1,112"
                                                                        data-toggler-alt="820">
                                                                        1,112
                                                                    </span>
                                                                    <span class="u-b4 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="Nm"
                                                                        data-toggler-alt="lb-ft">
                                                                        Nm
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- //STATS ITEM -->

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats c-stats--3-column">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">Acceleration</span>
                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="0-100 km/h"
                                                                        data-toggler-alt="0-60 mph">
                                                                        0-100 km/h
                                                                    </i>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4 js-data-toggler-data"
                                                                        data-toggler-default="2.7"
                                                                        data-toggler-alt="2.3">
                                                                        2.7
                                                                    </span>
                                                                    <span class="u-b4 u-uppercase">sec</span>
                                                                </div>
                                                            </div>
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">&nbsp;</span>
                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="0-300 km/h"
                                                                        data-toggler-alt="0-186 mph">
                                                                        0-300 km/h
                                                                    </i>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4"> 17.3 </span>
                                                                    <span class="u-b4 u-uppercase">sec</span>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">&nbsp;</span>
                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="402 meter time"
                                                                        data-toggler-alt="1/4 mile time">
                                                                        402 meter time
                                                                    </i>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4">
                                                                        8.25
                                                                    </span>
                                                                    <span class="u-b4 u-uppercase">
                                                                        sec
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </li>
                                                        <!-- //STATS ITEM -->

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">top speed</span>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4 js-data-toggler-data"
                                                                        data-toggler-default="375"
                                                                        data-toggler-alt="233">
                                                                        375
                                                                    </span>
                                                                    <span class="u-b4 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="km/h"
                                                                        data-toggler-alt="mph">
                                                                        km/h
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- //STATS ITEM -->

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">production</span>
                                                                    <i class="u-b4 u-uppercase">
                                                                        (to date)
                                                                    </i>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4">~9,000</span>
                                                                    <span class="u-b4 u-uppercase">units</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- //STATS ITEM -->

                                                        <!-- STATS ITEM -->
                                                        <li class="c-stats">
                                                            <div class="c-stats__inner">
                                                                <div class="c-stats__header">
                                                                    <span class="u-b4 u-uppercase">price</span>
                                                                </div>
                                                                <div class="c-stats__content">
                                                                    <span class="u-a4 js-data-toggler-data"
                                                                        data-toggler-default="185,000"
                                                                        data-toggler-alt="~158,600">
                                                                        185,000
                                                                    </span>
                                                                    <span class="u-b3 u-uppercase js-data-toggler-data"
                                                                        data-toggler-default="$"
                                                                        data-toggler-alt="€">
                                                                        $
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- //STATS ITEM -->                                                       
                                                    </ul>
                                                    <div class="c-stats-wrapper__header">
                                                        <div class="c-stats-toggler">
                                                            <button class="c-stats-toggler__button js-data-toggler-trigger-alt">
                                                                <span class="c-stats-toggler__button-label u-b4 u-uppercase" data-label="mph">
                                                                    <span>mph</span>
                                                                </span>
                                                            </button>
                                                            <button class="c-stats-toggler__button is-active js-data-toggler-trigger-default">
                                                                <span class="c-stats-toggler__button-label u-b4 u-uppercase" data-label="km/h">
                                                                    <span>km/h</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-accordion c-accordion--tech-spec js-accordion" style="display:none;">
                                                    <div
                                                        class="c-accordion__item c-accordion__item--performance js-accordion-single">
                                                        <div
                                                            class="c-accordion-header c-accordion-header--tech-spec js-accordion-header">
                                                            <div class="c-accordion-header__title-row">

                                                                <div class="spec-logo--r">
                                                                    <svg id="Layer_2" data-name="Layer 2"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 180 25.64">
                                                                        <defs>
                                                                            <style>
                                                                                .cls-1 {
                                                                                    fill: #fff;
                                                                                    stroke-width: 0
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g id="ARTWORK">
                                                                            <path class="cls-1"
                                                                                d="M78.22 10.48c-.23 0-.33.1-.44.33l-.32.76c-.11.23-.08.43.21.43h9.08c.23 0 .33-.13.4-.3l.39-.89c.11-.23.01-.33-.22-.33h-9.11Zm-44.38 0c-.23 0-.33.1-.44.33l-.32.76c-.11.23-.08.43.21.43h9.08c.23 0 .33-.13.4-.3l.39-.89c.11-.23.01-.33-.22-.33h-9.11Z" />
                                                                            <path class="cls-1"
                                                                                d="M3.79 6.98c-.16 0-.23.07-.3.2L.02 15.29c-.03.1-.03.2.1.2h6.15c.1 0 .16-.07.23-.2l2.98-6.94c.04-.1.18-.12.26-.03l6.86 6.97c.16.16.3.2.52.2h26.75c.3 0 .43-.07.56-.2l1.25-1.11c.13-.13.03-.26-.07-.26H29.97c-.1 0-.13-.1-.1-.2l2.14-4.96c.07-.16.16-.2.36-.2h13.92c.16 0 .23.1.3.23l3.09 6.5c.07.13.16.2.3.2h10.59c.33 0 .43-.03.72-.26l8.61-6.99c.23-.2.33-.1.26.07l-2.92 6.79c-.1.2 0 .39.2.39h30.48c.16 0 .25-.11.3-.2l2.79-6.54c.07-.13.13-.2.26-.2h7.93c.13 0 .2.07.23.13l.36.79c.07.13.13.16.3.16h7.34c.16 0 .23-.07.16-.2l-.98-2.23c-.1-.2-.2-.23-.39-.23H95c-.16 0-.3.13-.36.3l-2.8 6.5c-.03.1-.13.13-.23.13H74.46c-.16 0-.23-.1-.16-.26l2.11-4.9c.03-.1.13-.2.26-.2h15.16c.1 0 .2-.1.1-.26l-.82-1.15c-.07-.1-.16-.16-.43-.16H65.05c-.23 0-.36.03-.59.2l-8.6 6.9c-.2.16-.33.13-.39 0l-3.08-6.8c-.07-.2-.2-.3-.36-.3H26.27c-.13 0-.23.13-.3.3l-2.99 6.95c-.06.13-.15.14-.26.03l-6.87-7.09c-.16-.16-.3-.2-.49-.2H3.79Z" />
                                                                            <path class="cls-1"
                                                                                d="M109.39 15.49h12.64c.23 0 .39-.03.59-.2l8.43-6.92c.1-.08.19-.08.26.01l4.88 6.84c.1.16.23.26.46.26h6.13c.13 0 .23-.13.13-.3l-5.8-7.91c-.1-.16-.23-.3-.46-.3H126c-.26 0-.43.1-.52.2l-8.82 7.04c-.1.07-.17.03-.21-.02l-1.03-1.54c-.07-.13-.03-.23.07-.33l1.44-1.19c.1-.1.07-.26-.07-.26h-7.05c-.16 0-.26.07-.33.13l-1.91 1.73c-.1.1-.12.25-.04.37l1.54 2.17c.05.06.14.2.3.2ZM171.46.48c.24-.33.17-.48-.24-.48H128c-.44 0-.52.19-.21.51l1.61 1.66c.14.14.33.22.53.22h32c.13 0 .15.08.03.14l-11.76 5.2c-.82.36-.84.7-.08 1.17l26.39 16.55c.2.12.42.19.66.19h2.41c.48 0 .56-.22.21-.54L159.96 6.58c-.4-.37-.36-.55.15-.73l9.6-3.34c.22-.08.42-.22.56-.41l1.19-1.62Z" />
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="c-accordion-header__state c-accordion-header__state--tech-spec u-b2">
                                                                <div
                                                                    class="c-accordion-header__state-label c-accordion-header__state-label--closed">
                                                                    Show specifications
                                                                </div>
                                                                <div
                                                                    class="c-accordion-header__state-label c-accordion-header__state-label--opened">
                                                                    Close specifications
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-accordion-panel js-accordion-panel">
                                                            <div class="c-accordion-content">
                                                                <div class="c-stats-wrapper js-data-toggler">

                                                                    <div class="c-stats-wrapper__list">
                                                                        <!-- STATS ITEM -->
                                                                        <div class="c-stats">
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">Power</span>
                                                                                    <i class="u-b4 u-uppercase">
                                                                                        (1.55 MW)
                                                                                    </i>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span class="u-a4">
                                                                                        2.107
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        hp
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //STATS ITEM -->

                                                                        <!-- STATS ITEM -->
                                                                        <div class="c-stats">
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">TORQUE</span>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span class="u-a4">
                                                                                        2.340
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        nm
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //STATS ITEM -->

                                                                        <!-- STATS ITEM -->
                                                                        <div class="c-stats c-stats--3-column">
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">Acceleration</span>
                                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                                        data-toggler-default="0-100 km/h"
                                                                                        data-toggler-alt="0-60 mph">
                                                                                        0-100 km/h
                                                                                    </i>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span
                                                                                        class="u-a4 js-data-toggler-data"
                                                                                        data-toggler-default="1.72"
                                                                                        data-toggler-alt="1.66">
                                                                                        1.72
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        sec
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">&nbsp;</span>
                                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                                        data-toggler-default="0-300 km/h"
                                                                                        data-toggler-alt="0-186 mph">
                                                                                        0-300 km/h
                                                                                    </i>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span class="u-a4">
                                                                                        7.89
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        sec
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">&nbsp;</span>
                                                                                    <i class="u-b4 u-uppercase js-data-toggler-data"
                                                                                        data-toggler-default="402 meter time"
                                                                                        data-toggler-alt="1/4 mile time">
                                                                                        402 meter time
                                                                                    </i>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span class="u-a4">
                                                                                        7.90
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        sec
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //STATS ITEM -->

                                                                        <!-- STATS ITEM -->
                                                                        <div class="c-stats">
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span class="u-b4 u-uppercase">Top
                                                                                        speed</span>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span
                                                                                        class="u-a4 js-data-toggler-data"
                                                                                        data-toggler-default="430"
                                                                                        data-toggler-alt="267">
                                                                                        430
                                                                                    </span>
                                                                                    <span
                                                                                        class="u-b4 u-uppercase js-data-toggler-data"
                                                                                        data-toggler-default="km/h"
                                                                                        data-toggler-alt="mph">
                                                                                        km/h
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //STATS ITEM -->

                                                                        <!-- STATS ITEM -->
                                                                        <div class="c-stats">
                                                                            <div class="c-stats__inner">
                                                                                <div class="c-stats__header">
                                                                                    <span
                                                                                        class="u-b4 u-uppercase">Battery
                                                                                        Capacity</span>
                                                                                </div>
                                                                                <div class="c-stats__content">
                                                                                    <span class="u-a4">
                                                                                        108
                                                                                    </span>
                                                                                    <span class="u-b4 u-uppercase">
                                                                                        kWh
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- //STATS ITEM -->
                                                                    </div>
                                                                    <div class="c-stats-wrapper__header">
                                                                        <div class="c-stats-toggler">
                                                                            <button
                                                                                class="c-stats-toggler__button js-data-toggler-trigger-alt">
                                                                                <span
                                                                                    class="c-stats-toggler__button-label u-b4 u-uppercase"
                                                                                    data-label="mph">
                                                                                    <span>mph</span>
                                                                                </span>
                                                                            </button>
                                                                            <button
                                                                                class="c-stats-toggler__button is-active js-data-toggler-trigger-default">
                                                                                <span
                                                                                    class="c-stats-toggler__button-label u-b4 u-uppercase"
                                                                                    data-label="km/h">
                                                                                    <span>km/h</span>
                                                                                </span>
                                                                            </button>
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
                                </div>
                            </div>
                        </div>
                    </section>

                    <i class="u-spacer u-spacer--25vh"></i>
                    <i class="u-spacer u-spacer--25vh d-sm-none"></i>
                    <!--todo fix spacer on mobile-->
                    <section id="welcome" class="o-section">
                        <div class="c-nevera-welcome third">
                            <div class="c-nevera-welcome__footer">
                                <h4 class="c-nevera-welcome__footer-title u-a3 u-uppercase u-fw-400">Built Beyond Limits</h4>
                                <div class="c-nevera-welcome__footer-description u-b0 u-fw-400">
                                    <p class="u-a1">The Apollo EVO is raw emotion packaged into a bold display of engineering mastery.</p>
                                    <p class="u-a1">Featuring an advanced full carbon monocoque and full suite of active aerodynamics, each intimidating facet is not just for show, but enables daunting power paired with unmatched driving dynamics. Surreal style meets peerless precision.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="technology" class="o-section" style="z-index: 2; position: relative;">
                        <div class="c-extra-technology">
                            <picture class="c-extra-technology__bg js-nevera-technology">
                                <img src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-010.jpg" alt="">
                            </picture>
                            <i class="js-nevera-technology-overlay c-extra-technology__overlay"></i>
                            <div class="c-extra-technology__header js-nevera-technology-header">
                                <h2 class="c-extra-technology__title u-a4">
                                    EXTRAORDINARY TECHNOLOGY, EXCEPTIONAL ENGINEERING </h2>
                                <p class="u-b0">
                                    Precision engineering that pushes performance to the edge of possibility and beyond.
                                    Introducing the technology that makes Nevera. </p>
                            </div>
                            <div class="c-extra-technology__content js-nevera-technology-content">
                                <h4 class="u-a3">
                                    WHY CHOOSE THE APOLLO EVO? </h4>
                                <p class="u-b0">
                                    The Apollo EVO is a track-focused hypercar designed for collectors seeking extreme, raw performance. Just 10 Apollo EVOs are being built, and each will be fully bespoke, finished and detailed to each owner’s exact specifications. </p>
                            </div>
                        </div>
                    </section>
                    <section id="technology-engineering"
                        class="o-section o-section--dimmed o-section--layered-scroll js-layered-scroll-wrapper">
                        <div class="c-layered-scroll-wrapper c-layered-scroll-wrapper--simple js-layered-scroll-simple"
                            data-animation-type="crossfade">
                            <!-- LAYER 1 link youtube: https://www.youtube.com/watch?v=tmFuHO_bFqk-->
                            <div class="c-layered-scroll js-layered-scroll-simple-trigger">
                                <div class="c-layered-scroll__item c-layered-scroll__item--2">
                                    <span class="c-layered-scroll__item-bg js-layered-scroll-simple-bg"
                                        style="background-image: url(<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-aerodynamics-001-375.png)">
                                    </span>
                                </div>
                                <i class="c-layered-scroll__spacer js-layered-scroll-simple-spacer"></i>
                            </div>
                            <div class="c-layered-scroll js-layered-scroll-simple-trigger">
                                <div class="c-layered-scroll__item c-layered-scroll__item--3">
                                    <i class="c-layered-scroll__item-bg js-layered-scroll-simple-bg"
                                        style="background-image: url(<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-aerodynamics-001-375.png)"></i>
                                </div>
                                <i class="c-layered-scroll__spacer js-layered-scroll-simple-spacer"></i>
                            </div>

                            <!-- //LAYER 1 -->
                        </div>
                        <div class="c-layered-scroll-content-wrapper">
                            <!-- LAYER 1 -->

                            <div class="c-layered-scroll-content c-layered-scroll-content--1">
                                <div class="o-container">
                                    <div class="c-layered-scroll-content__left">
                                        <div class="c-article-wrapper">
                                            <div class="c-article js-layered-scroll-simple-item-element">
                                                <h3 class="u-a2 u-capitalize">Active Aerodynamics</h3>
                                                <p class="u-b2">The reigning king of downforce. With a leading-edge design like wide side air inlets, carbon-fiber elements, and a multitude of airflow and cooling features, ZR1 dominates with the highest downforce of any production.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-layered-scroll-content__right">
                                        <div class="c-article-wrapper">
                                            <div class="c-article js-layered-scroll-simple-item-element">
                                                <h3 class="u-a2 u-capitalize">Flow-Through Hood and ground effects</h3>
                                                <p class="u-b2">The flow through hood and spoiler help to extract airflow through the intercooler and cool the turbocharged air. The front splitter, paired with an underwing and smooth underbody, helps generate suction under the vehicle to maximize downforce and reduce drag.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="c-layered-scroll-content c-layered-scroll-content--1">
                                <div class="o-container">
                                    <div class="c-layered-scroll-content__left">
                                        <div class="c-article-wrapper">
                                            <div class="c-article js-layered-scroll-simple-item-element">
                                                <h3 class="u-a2 u-capitalize">Side Inlets</h3>
                                                <p class="u-b2">Large side air inlets feature signature carbon-fiber wishbone bezels. This, paired with the rear brake cooling ducts, allow for additional engine cooling while maximizing air intake.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-layered-scroll-content__right">
                                        <div class="c-article-wrapper">
                                            <div class="c-article js-layered-scroll-simple-item-element">
                                                <h3 class="u-a2">ZR1 Carbon Fiber Aero Package</h3>
                                                <p class="u-b2">Available on ZR1, the potent carbon-fiber wing, underbody strakes and carbon-fiber dive planes work together to produce over 1,200 lbs. of downforce.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //LAYER 1 -->
                        </div>
                        <!--        todo: temporary fix-->
                        <i class="u-spacer u-spacer--25vh u-spacer--mobile"></i>
                    </section>

                    <section id="driving-experience"
                        class="o-section o-section--scrolling-section-reveal js-mask-reveal-trigger js-scrollspy-item" data-scrollspy-title="Experience">
                        <div class="c-scrolling-reveal-bg js-mask-reveal-video">

                            <video class="c-scrolling-reveal-bg__video"
                                src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2022-apollo-evo-experience-001.mp4"
                                preload="auto" muted playsinline autoplay loop type="video/mp4"></video>
                        </div>

                        <div class="c-scrolling-reveal-content">
                            <!--        <i class="c-scrolling-reveal-content__spacer"></i>-->
                            <div class="c-scrolling-reveal-wrapper js-mask-reveal-content-trigger">
                                <div class="c-scrolling-reveal">
                                    <div class="o-container">
                                        <div class="c-scrolling-reveal__header u-text-center">
                                            <div class="c-scrolling-reveal__heading">
                                                <h2 class="c-reveal-mask__title js-mask-reveal-title u-a4 u-fw-medium u-uppercase">Experience</h2>
                                                <div class="c-reveal-mask__text js-mask-reveal-text">
                                                    <p class="u-b0">
                                                        It offers an intense, unfiltered driving experience with active aerodynamics, carbon fiber monocoque construction, and radical spaceship-like styling</p>
                                                    <a href="https://www.rimac-automobili.com:443/nevera/driving-experience"
                                                        class="c-button">
                                                        <span class="c-button__inner">
                                                            <span class="c-button__label">
                                                                <i class="c-button__label-inner" title="Explore">
                                                                    Explore </i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-scrolling-reveal__content js-mask-reveal-content">
                                            <div class="o-container">
                                                <div class="c-subpage-links-wrapper">
                                                    <ul class="c-subpage-links">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <i class="u-spacer u-spacer--25vh"></i>
                        </div>
                    </section>

                    <section id="design"
                        class="o-section o-section--scrolling-section-reveal js-mask-reveal-trigger js-scrollspy-item" data-scrollspy-title="Design">
                        <div class="c-scrolling-reveal-bg js-mask-reveal-video">

                            <video class="c-scrolling-reveal-bg__video"
                                src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2022-apollo-evo-design.mp4" preload="auto"
                                muted playsinline autoplay loop type="video/mp4"></video>

                        </div>

                        <div class="c-scrolling-reveal-content">
                            <!--        <i class="c-scrolling-reveal-content__spacer"></i>-->
                            <div class="c-scrolling-reveal-wrapper js-mask-reveal-content-trigger">
                                <div class="c-scrolling-reveal">
                                    <div class="o-container">
                                        <div class="c-scrolling-reveal__header u-text-center">
                                            <div class="c-scrolling-reveal__heading">
                                                <h2
                                                    class="c-reveal-mask__title js-mask-reveal-title u-a4 u-fw-medium u-uppercase">
                                                    Design </h2>
                                                <div class="c-reveal-mask__text js-mask-reveal-text">
                                                    <p class="u-b0">The design, as we have come to expect from Apollo, looks like a Decepticon from the Transformers Action films in the middle of a transformation. </p>
                                                    <a href="design/index.html" class="c-button">
                                                        <span class="c-button__inner">
                                                            <span class="c-button__label">
                                                                <i class="c-button__label-inner" title="Explore">
                                                                    Explore </i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="c-scrolling-reveal__content js-mask-reveal-content">
                                            <div class="o-container">
                                                <div class="c-subpage-links-wrapper">
                                                    <ul class="c-subpage-links">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="u-spacer u-spacer--50vh"></i>
                    <!--todo: fix overflow-x cant find it-->
                    <section id="engineering"
                        class="o-section o-section--scrolling-section-reveal js-mask-reveal-trigger js-scrollspy-item"
                        data-scrollspy-title="Engineering">
                        <div class="c-scrolling-reveal-bg js-mask-reveal-video">

                            <video class="c-scrolling-reveal-bg__video"
                                src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Beyond-Extreme-Apollo-Project-Evo-Reinvents-The-Hypercar-Experience.mp4" preload="auto" muted
                                playsinline autoplay loop type="video/mp4"></video>

                        </div>

                        <div class="c-scrolling-reveal-content">
                            <!--        <i class="c-scrolling-reveal-content__spacer"></i>-->
                            <div class="c-scrolling-reveal-wrapper js-mask-reveal-content-trigger">
                                <div class="c-scrolling-reveal">
                                    <div class="o-container">
                                        <div class="c-scrolling-reveal__header u-text-center">
                                            <div class="c-scrolling-reveal__heading">
                                                <h2
                                                    class="c-reveal-mask__title js-mask-reveal-title u-a4 u-fw-medium u-uppercase">Technology</h2>
                                                <div class="c-reveal-mask__text js-mask-reveal-text">
                                                    <p class="u-b0">Precision engineering that pushes performance to the edge of
                                                        possibility and beyond.</p>

                                                    <a href="https://www.rimac-automobili.com:443/nevera/engineering"
                                                        class="c-button">
                                                        <span class="c-button__inner">
                                                            <span class="c-button__label">
                                                                <i class="c-button__label-inner" title="Explore">
                                                                    Explore </i>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-scrolling-reveal__content js-mask-reveal-content">
                                            <div class="o-container">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <i class="u-spacer u-spacer--50vh"></i>
                    <section id="in-house-production" class="o-section o-section--dark o-section--in-house-production js-scrollspy-item" data-scrollspy-title="in-house production">
                        <div class="o-section__heading">
                            <div class="o-container o-container--narrow">
                                <div class="c-heading c-heading--narrow u-text-center">
                                    <h2 class="u-a4 u-uppercase">in-house production</h2>
                                    <p class="u-b0">
                                        From bytes to bolts. Our expert engineers find and develop the very best
                                        materials to craft everything from powertrain components to composites and
                                        in-car controls. All designed and created in our headquarters in Croatia, our
                                        cars are handcrafted to perform far beyond expectations. </p>
                                </div>
                            </div>
                        </div>
                        <div class="o-section__content">
                            <div class="o-container o-container--narrow">


                                <div class="c-article-wrapper">
                                    <div class="c-article c-article--narrow">
                                        <h3 class="u-a2">
                                            Down to the last detail </h3>
                                        <p class="u-b2">Rebellious German Engineering, made tangible by the Apollo x Ideenion partnership.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- DRAGGABLE SLIDER -->
                            <div
                                class="c-draggable-simple-slider-wrapper c-draggable-simple-slider-wrapper--nevera c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper">
                                <!-- CURSOR -->
                                <div class="c-draggable-slider-cursor js-draggable-simple-slider-cursor">
                                    <div class="c-draggable-slider-cursor__circle">
                                        <div class="c-draggable-slider-cursor__label u-b3 u-uppercase">Drag</div>

                                        <div class="c-draggable-slider-cursor__label--click u-b3 u-uppercase">Click</div>
                                        <i class="c-draggable-slider-cursor__arrow c-draggable-slider-cursor__arrow--prev"></i>
                                        <i class="c-draggable-slider-cursor__arrow c-draggable-slider-cursor__arrow--next"></i>
                                    </div>
                                </div>
                                <!-- //CURSOR -->
                                <div class="o-container c-draggable-simple-slider">
                                    <div
                                        class="c-draggable-simple-slider__container swiper-container js-draggable-simple-slider">
                                        <ul class="c-draggable-simple-slider__wrapper swiper-wrapper">

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-001.jpg"
                                                                media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-001.jpg"
                                                                media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-001.jpg"
                                                                media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-001.jpg" class="swiper-lazy" alt="Apollo Evo Monocoque">
                                                        </picture>                                                       
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DWUEvBWjDa9/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">
                                                            01 </span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1">Meticulously reimagined</h5>
                                                            <p class="u-b2">The subtle art of improvement realized in the new Apollo EVO exhaust. Every finished piece has its story; it’s in the first sketches, the countless iterations, and the moment when lines connect into a 3D world. Here’s a peek into that process, see the unfolding, not just the form.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide"><!-- .instagram-slide -->
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-002.webp"
                                                                media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-002.webp"
                                                                media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-002.webp"
                                                                media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-002.webp" class="swiper-lazy" alt="Apollo Evo Monocoque">
                                                        </picture>                                                       
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DWB99PyjGDM/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption"> <!-- .instagram -->
                                                        <span class="c-image-with-caption__caption-number u-b3">
                                                            02 </span>
                                                        <div class="c-image-with-caption__caption-text"> <!-- .instagram -->
                                                            <h5 class="u-a1">Where craftsmanship meets performance</h5>
                                                            <p class="u-b2">Precision-cut carbon fibre, hand-laid with purpose. Every sheet is placed to shape strength, safety, and performance from the inside out.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-013.webp" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-013.webp" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-013.webp" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-013.webp" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DV1I0F5jF2E/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">03</span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1 u-capitalize">monocoque</h5>
                                                            <p class="u-b2">Where heat, pressure and vision converge. The Apollo EVO monocoque.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-003.webp" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-003.webp" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-003.webp" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-003.webp" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DVi3zvPjDto/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">
                                                            04 </span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1">Strength is engineered, not added</h5>
                                                            <p class="u-b2">Advanced composite layups, optimized fiber orientation, and controlled curing cycles — all to maximize stiffness while cutting unnecessary weight.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-014.webp" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-014.webp" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-014.webp" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-014.webp" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DVJYlxUDG5o/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">05</span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1">Carbon at the core</h5>
                                                            <p class="u-b2">Precision in every bracket, every mount, every load path. The all new Apollo EVO monocoque — Rebellious German Engineering for precision, strength and control.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-004.webp" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-004.webp" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-004.webp" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/Apollo-Evo-Monocoque-004.webp" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DVJYlxUDG5o/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">
                                                            06 </span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1 u-capitalize">Making</h5>
                                                            <p class="u-b2">Hours in the making. Performance for a lifetime. Cured under extreme pressure and temperature, the monocoque emerges lighter, stiffer, and ready to hit the track.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-010.jpg" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-010.jpg" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-010.jpg" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-010.jpg" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DUpsaxUDBNH/">
                                                        </blockquote>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">07</span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1 u-capitalize">Interior</h5>
                                                            <p class="u-b2">We questioned the status quo, and turned it into art.<br>
                                                            The all-new Apollo EVO interior doesn’t follow hypercar conventions. It rewrites them. Aluminum bones. Carbon-fiber muscle. Nothing extra, just everything essential.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-009.jpg" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-009.jpg" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-009.jpg" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-009.jpg" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>
                                                    <!-- <figure class="c-instagram-with-caption">
                                                        <blockquote class="instagram-media"
                                                            data-instgrm-permalink="https://www.instagram.com/reel/DUbF6MDDGp0/">
                                                        </blockquote>
                                                        <script async src="//www.instagram.com/embed.js"></script>
                                                    </figure> -->
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">08</span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1 u-capitalize">cockpit</h5>
                                                            <p class="u-b2">Just pure anatomical precision shaped by Rebellious German Engineering, topology-optimised components, visible load-bearing structures, and a cockpit defined entirely by function.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="js-draggable-simple-slider-item c-draggable-simple-slider__item swiper-slide">
                                                <div class="c-draggable-simple-slider__item-inner"
                                                    data-swiper-parallax-opacity="0.2">
                                                    <figure class="c-image-with-caption">
                                                        <picture>
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-012.jpg" media="(min-width: 2600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-012.jpg" media="(min-width: 1600px)">
                                                            <source
                                                                data-srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-012.jpg" media="(min-width: 800px)">
                                                            <img data-src="<?php echo $root_path; ?>/uploads/2021/05/30204415/apollo-automobil/project-x/2021-project-x-evo-012.jpg" class="swiper-lazy" alt="Apollo EVO Carbon Fibre Monocoque">
                                                        </picture>
                                                    </figure>           
                                                    <div class="c-image-with-caption__caption">
                                                        <span class="c-image-with-caption__caption-number u-b3">09</span>
                                                        <div class="c-image-with-caption__caption-text">
                                                            <h5 class="u-a1">Individual expression</h5>
                                                            <p class="u-b2">Uncompromising structure. Individual expression. Each Apollo EVO is shaped through the exclusive Apollo FORGE program — where every element, from colour to material to detail, reflects a personal vision.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- //DRAGGABLE SLIDER -->
                            </div>

                        </div>
                    </section>
                    
                    <section id="tech-spec" class="section section--explore o-section--dark js-scrollspy-item pt-2 pb-5 pb-md-10" data-scrollspy-title="Technical Specs">
                        <div class="wrapper">
                            <div class="container-fluid">
                                <div class="row scrub">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <h2 class="t-1 text-gray mb-3 mb-md-5">Tech specification</h2>
                                    </div>
                                    <div class="col-12 col-sm-10 offset-sm-1 mb-4 mb-md-8">
                                        <div class="c-heading__button u-full-width text-center">
                                            <a href="https://web-cdn.rimac-automobili.com/wp-content/uploads/2023/11/20171226/Nevera_Technical-specifications.pdf"
                                                download class="c-button c-button--play" data-popup="#technology-header-video">
                                                <span class="c-button__inner">
                                                    <span class="c-button__prepend">
                                                        <svg class="u-icon u-icon--download" viewBox="0 0 11 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M5.889.967A.514.514 0 005.5.819a.54.54 0 00-.407.166.587.587 0 00-.159.424v8.385l-2.44-2.505c-.259-.294-.524-.3-.795-.018s-.265.558.018.828l3.394 3.536a.344.344 0 00.177.148.642.642 0 00.424 0 .344.344 0 00.177-.148L9.283 8.1c.283-.27.29-.546.018-.828-.271-.283-.536-.276-.796.018l-2.44 2.505V1.409A.616.616 0 005.89.967z">
                                                            </path>
                                                            <path d="M0 14.319h11v1H0z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="c-button__label">
                                                        <i class="c-button__label-inner" title="Download tech specs">Download tech specs</i>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="accord active">
                                            <div class="accord__tab mb-2" no="01">
                                                <div class="arrow-invert active">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">General</h3>
                                            </div>
                                            <div class="accord__content">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <img loading="lazy" class="mb-3" alt="<?php echo $model; ?> side view on road"
                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif"
                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 400w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 600w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 800w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 1160w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 1920w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-003-1080.avif 3840w" size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                    <p class="small mw-md-60p mb-4">
                                                        The <?php echo $model; ?> is the pinnacle of performance within the Corvette lineup — a track-focused, street-legal supercar that represents the most powerful and technologically advanced variant of its generation.
                                                    </p>                                                   
                                                    <div class="stats">
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">manufacturer</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Chevrolet</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">price</span>
                                                                    <span class="ss">2026</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">
                                                                            185,000
                                                                        </span>
                                                                        <span class="metric small">$</span>
                                                                    </span>
                                                                    <span class="stats__note d-block small">Starting at</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">production</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">1990</span>
                                                                    <span class="metric">year</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">units
                                                                    <span class="ss">to date</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">~9,000</span>
                                                                    <span class="metric">units</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">origin country</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">US</span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    class
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        Supercar
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    body style
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        2-door coupe / convertible
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    seating
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        2
                                                                    </span>
                                                                    <span class="metric">seats</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    layout
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        Mid-engine, RWD
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    build time
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">~2</span>
                                                                    <span class="metric">days</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="02">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">powertrain</h3>
                                            </div>
                                            <div class="accord__content" style="display: none;">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <img loading="lazy" class="mb-3" alt="<?php echo $model; ?> performance"
                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif" 
                                                        srcset="<?php echo $root_path; ?>/uploads/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 400w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 600w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 800w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 1160w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 1920w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-008-1000.avif 3840w" 
                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">

                                                    <div class="stats__label">
                                                        <span class="t-6">highlights</span>
                                                    </div>

                                                    <div class="c-accordion-content c-accordion-content--tech-spec">
                                                        <ul class="u-b0">
                                                            <li><p>8-speed dual clutch transmission</p></li>
                                                            <li><p>5.5L V8 twin turbocharged, TPI, DI high-output flat plane crank 8000 rpm redline engine</p></li>
                                                        </ul>
                                                    </div>
                                                    <div class="stats">
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">engine type</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">5.5L DOHC V8 engine</span>
                                                                    </span>
                                                                    <span class="stats__note d-block small">Twin turbo with flat-plane crankshaft</span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">engine code</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">LT7</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">displacement</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">5.5</span>
                                                                    <span class="metric">L</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">336</span>
                                                                    <span class="metric">ci</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">power</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        1,064
                                                                    </span>
                                                                    <span class="metric">hp @ 8000 rpm</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">tested power</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">~1,100 - 1,200</span>
                                                                    <span class="metric">hp</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    wheel power
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        1,028
                                                                    </span>
                                                                    <span class="metric">hp</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    power / liter
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        193
                                                                    </span>
                                                                    <span class="metric">hp</span>                                                                 
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    power / weight
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        608
                                                                    </span>
                                                                    <span class="metric">hp / t</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">torque</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">1,112</span>
                                                                    <span class="metric">Nm</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">820</span>
                                                                    <span class="metric">lb-ft</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">tested torque</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">1,220</span>
                                                                    <span class="metric">Nm</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">900</span>
                                                                    <span class="metric">lb-ft</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">wheel torque</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">1,138</span>
                                                                    <span class="metric">Nm</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">839</span>
                                                                    <span class="metric">lb-ft</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    torque / weight
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        645
                                                                    </span>
                                                                    <span class="metric">Nm / t</span>
																</span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    redline
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        8,000
                                                                    </span>
                                                                    <span class="metric">rpm</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    efficiency
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        35
                                                                    </span>
                                                                    <span class="metric">PS / (l/100 km)</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    transmission
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        8-Speed Dual-clutch 
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    drivetrain
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        Rear-wheel drive
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- //.stats -->
                                                </div>
                                            </div>
                                        </div> <!-- //.acord -->

                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="03">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line">
                                                    </div>
                                                    <div class="arrow-invert__circle">
                                                    </div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">
                                                    performance
                                                </h3>
                                            </div>
                                            <div class="accord__content" style="display: none;">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <img loading="lazy" class="mb-3" alt="<?php echo $model; ?> performance"
                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif" 
                                                        srcset="<?php echo $root_path; ?>/uploads/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 400w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 600w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 800w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 1160w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 1920w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-002-1000.avif 3840w" 
                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">

                                                    <p class="small mw-md-60p mb-4">
                                                        ZR1 transforms raw power into refined performance. With intuitive dynamics and razor-sharp control, it's engineered to thrill at every turn.
                                                    </p>
                                                    <div class="stats">
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">
                                                                        top speed
                                                                    </span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">375</span>
                                                                        <span class="metric">km/h</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">233</span>
                                                                        <span class="metric">mph</span>
                                                                    </span>
                                                                    <span class="stats__note d-block small">with manufacturer oversight</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    0-60
                                                                    <span class="ss">mph</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        2.3
                                                                    </span>
                                                                    <span class="metric">s</span>
                                                                </span>
                                                                <span class="stats__note d-block small">with manufacturer oversight</span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    0-100
                                                                    <span class="ss">km/h</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        2.7
                                                                    </span>
                                                                    <span class="metric">s</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    0-200
                                                                    <span class="ss">km/h</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        6.9
                                                                    </span>
                                                                    <span class="metric">s</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    0-300
                                                                    <span class="ss">km/h</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">
                                                                        17.3
                                                                    </span>
                                                                    <span class="metric">s</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">
                                                                    1/4
                                                                    <span class="ss">mile</span>
                                                                </span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b">
                                                                    <span class="stats__split">9.6</span>
                                                                    <span class="metric">s</span>
                                                                </span>
                                                                <span class="stats__note d-block small">240 km/h (150 mph)</span>
                                                            </div>
                                                        </div>                                             
                                                    </div><!-- //.stats -->
                                                </div>
                                            </div>
                                        </div> <!-- //.acord -->

                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="04">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>

                                                <h3 class="t-2b text-aqua pl-2">chassis & construction</h3>
                                            </div>
                                            <div class="accord__content" style="display:none">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <img loading="lazy" class="mb-3" alt="<?php echo $model; ?> wheels" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif" 
                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 400w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 600w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 800w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 1160w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 1920w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 3840w" 
                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                    <div class="stats__label">
                                                        <span class="t-6">construction</span>
                                                    </div>
                                                    <div class="c-accordion-content c-accordion-content--tech-spec">
                                                        <ul class="u-b0">
                                                            <li><p>Mid-engine aluminum-based architecture.</p></li>
                                                            <li><p>Carbon-fiber aerodynamic and structural components. Purposeful carbon fiber aero package creates over 1,200 pounds of downforce at top speed.</p></li>
                                                            <li><p>Composite body with integrated cooling and airflow channels.</p></li>
                                                            <li><p>Reinforced drivetrain and structural components for high-performance loads.</p></li>
                                                        </ul>
                                                    </div>
                                                    <div class="stats">
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">suspension</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Magnetic Selective Ride Control 4.0</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">front suspension</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Short / Long</span>
                                                                        <span class="metric">Arm</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">rear suspension</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Short / Long</span>
                                                                        <span class="metric">Arm</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">Brakes</span>
                                                                    <span class="ss">Standard</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Carbon ceramic</span>
                                                                    </span>
                                                                </div>
                                                            </div>                                                     
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">front brake rotors</span>
                                                                    <span class="ss">D x T</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">0.399 x 0.038</span>
                                                                        <span class="metric">m</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">15.7 x 1.5</span>
                                                                        <span class="metric">in</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">rear brake rotors</span>
                                                                    <span class="ss">D x T</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">0.391 x 0.033</span>
                                                                        <span class="metric">m</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">15.4 x 1.3</span>
                                                                        <span class="metric">in</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">Wheels</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Aluminum</span>
                                                                    </span>
                                                                </div>
                                                            </div>                                                     
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">front wheel</span>
                                                                    <span class="ss">D x W</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">0.508 x 0.254</span>
                                                                        <span class="metric">m</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">20 x 10</span>
                                                                        <span class="metric">in</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">rear wheel</span>
                                                                    <span class="ss">D x W</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">0.533 x 0.330</span>
                                                                        <span class="metric">m</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">21 x 13</span>
                                                                        <span class="metric">in</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">tires</span>
                                                                    <span class="ss">Standard</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Michelin Pilot Sport 4S</span>
                                                                    </span>
                                                                </div>
                                                            </div>   
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">tires</span>
                                                                    <span class="ss">ZTK package</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">Michelin Pilot Sport Cup 2 R</span>
                                                                    </span>
                                                                </div>
                                                            </div>                                                                                                           
                                                        </div>
                                                        <div class="pinned-wrap">                                                                                                    
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">Front Tire</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">275/30ZR20</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="stats__stat">
                                                                <div class="stats__label">
                                                                    <span class="t-6">Rear Tire</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">345/25ZR21</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>                                    
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="05">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">Body Architecture</h3>
                                            </div>
                                            <div class="accord__content" style="display: none;">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <div class="c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper mb-3">
                                                        <div class="swiper slider-2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> front view" data-swiper-parallax-scale="0.8"
                                                                        data-swiper-parallax-opacity="0.2" 
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-009-1000.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> front view detail" data-swiper-parallax-scale="0.8"
                                                                        data-swiper-parallax-opacity="0.2" 
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif" 
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" class="" alt="<?php echo $model; ?>  top view" data-swiper-parallax-scale="0.8"
                                                                        data-swiper-parallax-opacity="0.2" 
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif" 
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-005-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" class="" alt="<?php echo $model; ?> side view" data-swiper-parallax-scale="0.8"
                                                                        data-swiper-parallax-opacity="0.2" 
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-006-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" class="" alt="<?php echo $model; ?> side view" data-swiper-parallax-scale="0.8"
                                                                        data-swiper-parallax-opacity="0.2" 
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-007-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                </div>

                                                            </div>
                                                            <div class="swiper-button-next is-v2 arrow arrow--right arrow--no-text">
                                                                <div class="arrow__line">
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: rgba(215, 215, 215, 0.843);"></div>
                                                                </div>
                                                                <div class="arrow__circle">
                                                                    <div class="arrow__cap"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mw-md-60p small">
                                                        Carbon-fiber wheels were engineered for structural load paths first, then handed over to the styling department. The hood extractor means the only storage is now in the rear trunk. Such is the price of ultimate performance. Arched eyebrow-like contours on the front bumper and hood are one of the more subtle body tweaks unique to the ZR1.
                                                        The full open-air experience means skipping the return of the split rear window, which offers a glimpse of the Edge Blue finish on the engine intake. It's a purely cosmetic feature but awfully pretty.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="06">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">Aerodynamics</h3>
                                            </div>
                                            <div class="accord__content" style="display:none">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <div class="c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper mb-3">
                                                        <div class="swiper slider-2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> aerodynamics" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-015-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">01</span>
                                                                        <div class="c-image-with-caption__caption-text">
                                                                            <h5 class="u-a1">Flow-Through Hood and ground effects</h5>
                                                                            <p class="u-b2">The flow through hood and spoiler help to extract airflow through the intercooler and cool the turbocharged air. The front splitter, paired with an underwing and smooth underbody, helps generate suction under the vehicle to maximize downforce and reduce drag.</p>
                                                                        </div>
                                                                    </div>         
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> aerodynamics" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-004-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">02</span>
                                                                        <div class="c-image-with-caption__caption-text">
                                                                            <h5 class="u-a1 text-white">Side Inlets</h5>
                                                                            <p class="u-b2">Large side air inlets feature signature carbon-fiber wishbone bezels. This, paired with the rear brake cooling ducts, allow for additional engine cooling while maximizing air intake.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                              
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> aerodynamics" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-011-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">03</span>
                                                                        <div class="c-image-with-caption__caption-text">
                                                                            <h5 class="u-a1 text-white">ZR1 Carbon Fiber Aero Package</h5>
                                                                            <p class="u-b2">Available on ZR1, the potent carbon-fiber wing, underbody strakes and carbon-fiber dive planes work together to produce over 1,200 lbs. of downforce.</p>
                                                                        </div>
                                                                    </div>                                                            
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> aerodynamics" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-012-1000.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">04</span>
                                                                        <div class="c-image-with-caption__caption-text">
                                                                            <h5 class="u-a1 text-white">Carbon fiber components</h5>
                                                                            <p class="u-b2">Leveraging the strength of carbon fiber, ZR1 incorporates multiple standard carbon fiber elements including the front splitter, rocker panels, split rear window surround, roof panels with body-color surround and side air inlets, which help improve handling and performance.</p>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>                                                           
                                                            </div>
                                                            <div class="swiper-button-next is-v2 arrow arrow--right arrow--no-text">
                                                                <div class="arrow__line">
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: rgba(215, 215, 215, 0.843);"></div>
                                                                </div>
                                                                <div class="arrow__circle">
                                                                    <div class="arrow__cap"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <p class="mw-md-60p small">
                                                        The reigning king of downforce. With a leading-edge design like wide side air inlets, carbon-fiber elements, and a multitude of airflow and cooling features, ZR1 dominates with the highest downforce of any production.
                                                    </p> -->
                                                </div>

                                            </div>
                                        </div>                                      
                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="07">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">Interior</h3>
                                            </div>
                                            <div class="accord__content" style="display:none">
                                                <div class="pt-1 pb-0">
                                                    <div class="c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper mb-3">
                                                        <div class="swiper slider-2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-001-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">01</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Ultimate Suede interior</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-002-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">02</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Carbon fiber and sueded microfiber-wrapped steering wheel</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-003-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">03</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Wireless charging pad</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-004-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">04</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Leather-wrapped passenger grab handle</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-005-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">05</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Ultimate Suede seats</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-006-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">06</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Ultimate Suede interior</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-007-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">07</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Driver Mode Selector</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-008-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">08</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">Bose Performance Series 14-speaker audio system with Stealth Interior Trim Package and Carbon Fiber Interior Package Level 2</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-009-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">09</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">14" reconfigurable Driver Information Center</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-010-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">10</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">New interior colorways: Jet Black Ultimate Suede with standard Sky Cool Gray or optional Adrenaline Red, Competition Yellow or Santorini Blue stitching</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-011-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">11</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">New interior colorways: Very Dark Atmosphere with Natural Tan accents</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-012-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">12</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">New interior colorways: Asymmetrical Adrenaline Red with Jet Black</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-013-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">13</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">New interior colorways: Sky Cool Gray & Medium Ash Gray with Habanero accents</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">                                                                
                                                                    <div class="swiper-slide">
                                                                        <img loading="lazy" alt="<?php echo $model; ?> interior" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                            src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif"
                                                                            srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 400w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 600w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 800w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 1160w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 1920w, 
                                                                            <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-interior-014-1000.avif 3840w" 
                                                                            size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                        <div class="c-image-with-caption__caption">
                                                                            <span class="c-image-with-caption__caption-number u-b3">14</span>
                                                                            <div class="c-image-with-caption__caption-text mw-100">
                                                                                <h5 class="u-a1">New interior colorways: Santorini Blue with Jet Black</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-button-next is-v2 arrow arrow--right arrow--no-text">
                                                                <div class="arrow__line">
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: rgba(215, 215, 215, 0.843);"></div>
                                                                </div>
                                                                <div class="arrow__circle">
                                                                    <div class="arrow__cap"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="08">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">safety systems</h3>
                                            </div>
                                            <div class="accord__content" style="display:none">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <div class="c-draggable-slider-cursor-wrapper js-draggable-simple-slider-cursor-wrapper mb-3">
                                                        <div class="swiper slider-2">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> HD Rear Vision Camera" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-001-653.avif 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">01</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1">HD Rear Vision Camera</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>Shows high-resolution digital image of area directly behind your vehicle while in Reverse.</p></li>
                                                                                    <li><p>Can help you park or avoid vehicles and objects.</p></li>
                                                                                    <li>
                                                                                        <p>You can also display an overlay of where your vehicle is heading.</p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>         
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Forward Collision Alert" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-002-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">02</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Forward Collision Alert</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>Warns you if it detects a potential collision with a detected vehicle you're following so you can take action.</p></li>
                                                                                    <li><p>Can also provide a tailgating alert if you're following a vehicle much too closely.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                              
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Lane Keep Assist with Lane Departure Warning" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-003-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">03</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Lane Keep Assist with Lane Departure Warning</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>Uses a brief steering wheel turn to alert you when it detects you are unintentionally drifting out of your lane lines.</p></li>
                                                                                    <li><p>System alerts do not occur if you're using your turn signal, or it detects you may be intentionally leaving your lane.</p></li>
                                                                                    <li><p>You may receive additional Lane Departure Warning alerts if needed.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                            
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Automatic Emergency Braking" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">04</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Automatic Emergency Braking</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>At speeds above 5 mph and up to highway speeds, can help you avoid or reduce the severity of a collision with a detected vehicle you're following using camera technology.</p></li>
                                                                                    <li><p>Can automatically provide hard emergency braking or enhance your hard braking.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Rear Park Assist" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-005-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">05</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Rear Park Assist</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>When in Reverse, provides alerts of nearby detected vehicles and objects behind your vehicle.</p></li>
                                                                                    <li><p>Alerts can help you park and avoid collisions.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Teen Driver" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-006-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">06</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Teen Driver</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>Helps encourage safe driving habits for teens by providing an in-vehicle report card.</p></li>
                                                                                    <li><p>Activates certain safety systems, if equipped, when a Teen Driver-designated key fob is used.</p></li>
                                                                                    <li><p>Mutes the radio until the front-seat occupants fasten their seat belts.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img loading="lazy" alt="<?php echo $model; ?> Teen Driver" data-swiper-parallax-scale="0.8" data-swiper-parallax-opacity="0.2"
                                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg"
                                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg 400w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg 600w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg 800w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg 1160w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-007-653.jpg 1920w, 
                                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-safety-system-004-653.jpg 3840w" 
                                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">
                                                                    <div class="c-image-with-caption__caption">
                                                                        <span class="c-image-with-caption__caption-number u-b3">07</span>
                                                                        <div class="c-image-with-caption__caption-text mw-100">
                                                                            <h5 class="u-a1 text-white">Front Pedestrian and Bicyclist Braking</h5>
                                                                            <div class="c-accordion-content c-accordion-content--tech-spec py-1">
                                                                                <ul class="">
                                                                                    <li><p>At speeds between 5 and 50 mph, can help you avoid or reduce the severity of a collision with a pedestrian or bicyclist it detects directly in front of you.</p></li>
                                                                                    <li><p>Provides alerts and can automatically provide hard emergency braking or enhance driver's hard braking.</p></li>
                                                                                    <li><p>Limited nighttime and low visibility performance.</p></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>                                                  
                                                            </div>
                                                            <div class="swiper-button-next is-v2 arrow arrow--right arrow--no-text">
                                                                <div class="arrow__line">
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: white;"></div>
                                                                    <div style="background: rgba(215, 215, 215, 0.843);"></div>
                                                                </div>
                                                                <div class="arrow__circle">
                                                                    <div class="arrow__cap"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <p class="mw-md-60p small">
                                                        The reigning king of downforce. With a leading-edge design like wide side air inlets, carbon-fiber elements, and a multitude of airflow and cooling features, ZR1 dominates with the highest downforce of any production.
                                                    </p> -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="accord">
                                            <div class="accord__tab mb-2" no="09">
                                                <div class="arrow-invert">
                                                    <div class="arrow-invert__line"></div>
                                                    <div class="arrow-invert__circle"></div>
                                                </div>
                                                <h3 class="t-2b text-aqua pl-2">Dimensions</h3>
                                            </div>
                                            <div class="accord__content" style="display:none">
                                                <div class="pt-1 pb-5 pb-md-10">
                                                    <img loading="lazy" class="mb-3" alt="<?php echo $model; ?> top view in showroom" data-swiper-parallax-scale="0.8"
                                                        data-swiper-parallax-opacity="0.2"
                                                        src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif"
                                                        srcset="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 400w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 600w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 800w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 1160w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 1920w, 
                                                        <?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2026-Chevrolet-Corvette-ZR1-013-1000.avif 3840w" 
                                                        size="(max-width: 350px) 400px, (max-width: 576px) 600px, (max-width: 768px) 800px, (max-width: 1021px) 1160px, 3840px">                                                   
                                                    <div class="stats">
                                                        <div class="pinned-wrap">
                                                            <div class="stats__stat is-pinned">
                                                                <div class="stats__label">
                                                                    <span class="t-6">curb weight</span>
                                                                </div>
                                                                <div class="stats__value">
                                                                    <span class="t-3b slash">
                                                                        <span class="stats__split">1,665</span>
                                                                        <span class="metric">kg</span>
                                                                    </span>
                                                                    <span class="t-3b">
                                                                        <span class="stats__split">3,670</span>
                                                                        <span class="metric">lbs</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">length, overall</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">4.74</span>
                                                                    <span class="metric">m</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">186.70</span>
                                                                    <span class="metric">in</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Width, Max w/o mirrors</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">2.02</span>
                                                                    <span class="metric">m</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">79.71</span>
                                                                    <span class="metric">in</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Height, Overall</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">1.23</span>
                                                                    <span class="metric">m</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">48.60</span>
                                                                    <span class="metric">in</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Wheelbase</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">2.72</span>
                                                                    <span class="metric">m</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">107.00</span>
                                                                    <span class="metric">in</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Min Ground Clearance</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">0.135</span>
                                                                    <span class="metric">m</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">5.30</span>
                                                                    <span class="metric">in</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Trunk Volume</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">258</span>
                                                                    <span class="metric">L</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">9.10</span>
                                                                    <span class="metric">ft³</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stats__stat">
                                                            <div class="stats__label">
                                                                <span class="t-6">Fuel Tank Capacity</span>
                                                            </div>
                                                            <div class="stats__value">
                                                                <span class="t-3b slash">
                                                                    <span class="stats__split">~70</span>
                                                                    <span class="metric">L</span>
                                                                </span>
                                                                <span class="t-3b">
                                                                    <span class="stats__split">~18.5</span>
                                                                    <span class="metric">gal</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- //.stats -->                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <i class="c-scroll-indicator">
                        <i></i>
                    </i>
                </div>
            </div>
            <!-- //PAGE CONTENT -->
            <!-- PREFOOTER -->
            <!-- FOOTER -->
            <?php require_once "$root_path/footer.php"; ?>
            <!-- //FOOTER -->

            <!-- COOKIE MESSAGE -->
            <div class="o-cookie-message-wrapper js-cookie-message-wrapper">
                <div class="o-container o-container--wide">
                    <div class="c-cookie-message"></div>
                </div>
            </div>
            <!-- //COOKIE MESSAGE -->
            <div class="c-video-popup js-video-popup" id="intro-video">
                <span class="c-hamburger is-opened c-video-popup__close js-video-popup-btn" aria-label="Modal close"
                    aria-controls="modal">
                    <span class="c-hamburger__label u-b3 u-uppercase">Close</span>
                    <i class="c-hamburger__line c-hamburger__line--top"></i>
                    <i class="c-hamburger__line c-hamburger__line--center"></i>
                    <i class="c-hamburger__line c-hamburger__line--bottom"></i>
                </span>



                <div class="c-custom-video-player js-custom-video-player no-poster">

                    <figure class="c-custom-video-player__cover">
                        <figcaption class="c-custom-video-player__cover-text">
                            <h4 class="u-a1"></h4>
                            <p class="u-b2"></p>
                        </figcaption>
                    </figure>

                    <div class="c-custom-video-player__cover-image-wrapper">
                        <p class="c-custom-video-player__time">
                            <span class="js-time-current">00:00</span>
                            —
                            <span class="js-time-duration">00:00</span>
                        </p>

                        <video class="c-custom-video-player__video js-video-element" preload="metadata"
                            crossorigin="anonymous" playsinline data-autoplay="false" controls>
                            <source src="<?php echo $root_path; ?>/uploads/2021/05/30204415/chevrolet/Corvette-ZR1/2025-Corvette-Insider_An-Overview-of-ZR1.mp4" type="video/mp4" />
                        </video>
                        <!--end video source-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //PAGE WRAPPER -->

    <?php require_once "$root_path/footer-link.php"; ?>

</body>

</html>