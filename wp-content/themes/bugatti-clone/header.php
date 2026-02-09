<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<script type="text/javascript">
		function setREVStartSize(e) {
            //window.requestAnimationFrame(function() { 
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
</head>

<body <?php body_class('page-template-default page wide wpb-js-composer vc_responsive'); ?>>
<?php wp_body_open(); ?>

<div id="jws_theme_wrapper">

	<div class="tb-header-wrap ct-inc-megamenu tb-header-v5 d-flex align-items-center">
            <!-- Start Header Sidebar -->
            <div class="mobile-header d-flex align-items-center">
                <button id="mobile-bar-v4" class="menu-btn jws_theme_open_menu me-3 mt-1 mt-xl-4">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <div class="tb-logo mb-0">
                    <img class="img img-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                    <img class="img img-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-open.png" alt="logo-open">
                </div>
            </div>

            <div class="mobile-leftbar overlay-menu hide-scroll">
                <ul id="menu-menu-1" class="mobile-nav m-md-0">
                    <li>
                        <button class="menu-item-link level1">
                            <span class="menu-title">ASTON MARTIN
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </button>
                        <ul class="mobile-nav-sub overlay-menu-1 level1">
                            <li>
                                <button class="menu-item-link level2">Vantage
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li>
                                        <button class="menu-item-link level3 text-truncate">Vantage S</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vantage-s/Vantage-S-Hero-Desktop-Final.webp"
                                                    alt="valkyrie-final-1">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3 text-truncate">Vantage</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <div class="hero-video"
                                                    aria-label="Aston Martin Vantage coupe video teaser" role="button">

                                                    <img class="hero-video__image"
                                                        alt="a blue bugatti chiron is sitting on a dark surface"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vantage/01_NGV-Hero-Desktop.webp" />

                                                    <!-- <video class="hero-video__media"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vantage/NGV_WebsiteHero_8s_9x16_03_CAR-BUILD_MODELPAGE_c.mp4?rev=-1"
                                                        playsinline autoplay muted loop preload="none"></video> -->

                                                    <video class="hero-video__media" playsinline autoplay muted loop
                                                        preload="none"
                                                        data-mobile-src="https://www.astonmartin.com/-/media/models---vantage-coupe/ngv_websitehero_8s_9x16_03_car-build_modelpage_c.mp4?rev=-1"
                                                        data-src="https://www.astonmartin.com/-/media/models---vantage-coupe/model_page_ngv_websitehero_8s_16x9_option-02_car-build.mp4?rev=-1"
                                                        data-video-normaldef="https://www.astonmartin.com/-/media/models---vantage-coupe/model_page_ngv_websitehero_8s_16x9_option-02_car-build.mp4?rev=-1"
                                                        src="https://www.astonmartin.com/-/media/models---vantage-coupe/model_page_ngv_websitehero_8s_16x9_option-02_car-build.mp4?rev=-1">
                                                    </video>

                                                </div>
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3 text-truncate">Vantage Roadster</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v2/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vantage-roadster/Vantage-Roadster-Homepage-Hero.webp"
                                                    alt="vantage-roadster">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-item-link level2">Vanquish
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3 text-truncate">Vanquish</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vanquish/Vanquish-screengrab-hero-Desktop.webp"
                                                    alt="Vanquish">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3 text-truncate">Vanquish Volante</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vanquish-volante/vanquish-volante-homepage-final.jfif"
                                                    alt="vanquish-volante">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3 text-truncate"
                                            title="Vanquish Volante: 60th Anniversary Edition">Vanquish Volante: 60th
                                            Anniversary Edition
                                        </button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v2/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/vanquish-volante-60th-anniversary-edition/60 Anniversary of Volante Editions_2.jpg"
                                                    alt="60-Anniversary-of-Volante-Editions_2">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-item-link level2">Valhalla
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3 text-truncate">Valhalla</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/valhalla/Valhalla-OCT-Hero-Desktop.webp"
                                                    alt="Valhallas">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-item-link level2">Valkyrie
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3">Valkyrie Coupe</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/valkyrie-coupe/valkyrie-final-3.webp"
                                                    alt="valkyrie-final-1">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3">Valkyrie Spider</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/valkyrie-spider/Valkyrie-Spider-Hero-Final.webp"
                                                    alt="valkyrie-final-1">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3">Valkyrie AMR Pro</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v2/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/valkyrie-amr-pro/valkyrie-amr-pro-final-2.jpg"
                                                    alt="valkyrie-amr-pro-final-2">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3">Valkyrie LM</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v3/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/valkyrie-lm/valkyrie-lmh-final-1.webp"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-item-link level2">AMR25 F1
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3 text-truncate">AMR25 F1</button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/aston-martin/amr25/AMR25-Hero-Desktop.webp"
                                                    alt="AMR25-Hero-Desktop">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="menu-item-link level1">
                            <span class="menu-title">BUGATTI
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </button>
                        <ul class="mobile-nav-sub overlay-menu-1 level1">
                            <li>
                                <button class="menu-item-link level2">Current
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li>
                                        <button class="menu-item-link level3">Tourbillon</span></button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <div class="hero-video" aria-label="Bugatti Tourbillon video teaser"
                                                    role="button">

                                                    <img class="hero-video__image"
                                                        alt="a blue bugatti chiron is sitting on a dark surface"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/tourbillon/bugatti-tourbillon-card.jpg" />

                                                    <video class="hero-video__media"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/tourbillon/2025-model-teaser-videos-tourbillon_720.mp4?fm=mp4&amp;w=1920&amp;video-codec=av1&amp;video-bitrate=2m"
                                                        playsinline autoplay muted loop preload="none"></video>


                                                </div>
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">W16 Mistral</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <div class="hero-video" aria-label="Bugatti W16 Mistral video teaser"
                                                    role="button">

                                                    <img class="hero-video__image"
                                                        alt="a blue bugatti chiron is sitting on a dark surface"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/w16-mistral/12 BUGATTI_Roadster_launch-set.jpg" />


                                                    <video class="hero-video__media"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/w16-mistral/2025-model-teaser-videos-w16mistral_720.mp4?fm=mp4&w=1920&video-codec=av1&video-bitrate=2m"
                                                        playsinline autoplay muted loop preload="none"></video>

                                                </div>
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">Bolide</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <div class="hero-video" aria-label="Bugatti Bolide video teaser"
                                                    role="button">
                                                    <img class="hero-video__image"
                                                        alt="a blue bugatti bolide is sitting on a dark surface"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/bolide/bugatti-bolide-card.jpg" />


                                                    <video class="hero-video__media"
                                                        src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/bolide/2025-model-teaser-videos-bolide_720.mp4?fm=mp4&w=1920&video-codec=av1&video-bitrate=2m"
                                                        playsinline autoplay muted loop preload="none"></video>


                                                </div>
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-item-link level2">Contemporary
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class="mobile-nav-sub overlay-menu-2 level2">
                                    <li>
                                        <button class="menu-item-link level3">Chiron</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/chiron/01_02_bugatti_chiron_super_sport_windtunnel_front_tipped_up_hr.jpg"
                                                    alt="01-BUGATTI_Chiron-Super-Sport_ext.avif">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">La Voiture Noire</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/la-voiture-noire/illu_classic_driver2.jpeg"
                                                    alt="lavoiturenoire-og.jpg">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">Divo</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/divo/01_bugatti-divo_rendering.jpg"
                                                    alt="bugatti-divo-card.jpg">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">Centodieci</button>
                                        <div class="mobile-nav-preview">
                                            <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/bugatti/centodieci/bugatti-centodieci-card-1.jpg"
                                                    alt="bugatti-centodieci-card.jpg">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="menu-item-link level1">
                            <span class="menu-title">FERRARI
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </button>
                        <ul class="mobile-nav-sub overlay-menu-1 level1">
                            <li>
                                <button class="menu-item-link level2">Supercars
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                                <ul class='mobile-nav-sub overlay-menu-2 level2'>
                                    <li class="">
                                        <button class="menu-item-link level3"><span class="menu-title">F80
                                                S</span></button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/f80/670e5fe21eb0fa0055671923.avif"
                                                    alt="valkyrie-final-1">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3"><span class="menu-title">LaFerrari
                                                Aperta</span></button>
                                        <div class="mobile-nav-preview">
                                            <a href=""><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/laferrari-aperta/649c2cbecf423600232ad58e-menu-past-models-2023-la ferrari-aperta-land.avif"
                                                    alt="valkyrie-amr-pro-final-2">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3"><span
                                                class="menu-title">LaFerrari</span></button>
                                        <div class="mobile-nav-preview">
                                            <a href=""><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/laferrari/649c2d1f437d870023cf5190-menu-past-models-2023-la ferrari-land.avif"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">
                                            <span class="menu-title">Enzo Ferrari</span>
                                        </button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v3/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/enzo-ferrari/649c2d3c437d870023cf5191-ferrari-menu-past-models-2023-ferrari-enzo-land.avif"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">
                                            <span class="menu-title">F50</span>
                                        </button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v3/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/f50/649c2d63437d870023cf5192-ferrari-menu-past-models-2023-f50-land.avif"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331">
                                        <button class="menu-item-link level3">
                                            <span class="menu-title">F40</span>
                                        </button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v3/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/f40/649c2d83cf423600232ad590-ferrari-menu-past-models-2023-f40-land.avif"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="menu-item-link level3">
                                            <span class="menu-title">288 GTO</span>
                                        </button>
                                        <div class="mobile-nav-preview">
                                            <a href="https://autopro.jwsuperthemes.com/home-page-v3/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/uploads/2026/ferrari/288-gto/649c2da6cf423600232ad591-ferrari-menu-past-models-2023-gto-land.avif"
                                                    alt="valkyrie-lmh-final-6">
                                            </a>
                                            <span class="menu-title">
                                                <a href="#">Explore <i class="fa-solid fa-angle-right"></i></a>
                                                <a href="#">Configure <i class="fa-solid fa-angle-right"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div> <!-- End Header Menu -->

	<div id="page" class="site">
