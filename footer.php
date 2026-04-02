<?php

    $facebook_link = "https://web.facebook.com/gcar";
    $instagram_link = "https://www.instagram.com/gcar/";
    $x_link = "https://x.com/gcar";
    $youtube_link = "https://www.youtube.com/@gcar";
    $linkedin_link = "https://www.linkedin.com/company/gcar/";
    $thread_link = "https://www.threads.com/@gcar";

    if($page == "apollo") {
        $facebook_link = "https://web.facebook.com/apolloautomobile";
        $instagram_link = "https://www.instagram.com/apollo_automobil/";
        $x_link = "https://x.com/ApolloAutomobil";
        $youtube_link = "https://www.youtube.com/@ApolloAutomobil";
        $linkedin_link = "https://www.linkedin.com/company/apollofmg/";
        $thread_link = "https://www.threads.com/@apollo_automobil";
    }
?>
<!-- <div class="o-container o-container--narrow"
    style="position: relative; z-index: 6; background-color: #0a222e; padding-top: 10px; font-size: 13px; padding-bottom: 10px; text-align: center; color: rgba(255,255,255,0.7);">
</div> -->
<footer class="o-footer-wrapper js-footer">
    <div class="c-footer">
        <div class="o-container o-container--narrow">
            <div class="c-footer__bottom">                          
                <div class="c-footer__bottom-unset">
                    <h5 class="u-b1 u-uppercase">Find <?php echo isset($manufacturer) ? $manufacturer : 'us'; ?> on </h5>
                    <div class="c-footer-contact-info c-footer-contact-info--socials u-b2">
                        <ul class="c-footer-contact-info__list c-footer-contact-info__list--3-column">

                            <?php if (isset($facebook_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $facebook_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">Facebook</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--facebook"
                                            xmlns="http://www.w3.org/2000/svg" width="8.1" height="16"
                                            version="1.1" viewBox="0 0 8.1 16">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M5.5,0c-1,0-2.1.2-2.9.8-1.3,1-1.1,3.6-1.1,4.8H0v2.5h1.6v7.9h3.3V7.9h2.4l.3-2.4h-2.7v-2.1c0-.8.8-1,1.1-1s1.6.2,1.6.2l.5-2.5c-.2.2-1.3-.2-2.5-.2h0Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($instagram_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $instagram_link; ?>" class="c-link c-link--secondary c-link--instagram" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">Instagram</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--instagram"
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            version="1.1" viewBox="0 0 15 15">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M15,4.4c0-.3,0-.6-.1-.9,0-.3-.1-.6-.2-.9-.2-.5-.5-1-.9-1.3-.4-.4-.8-.7-1.3-.9-.3-.1-.6-.2-.9-.2-.3,0-.6,0-.9,0-.4,0-.8,0-1.1,0-.3,0-1,0-2,0s-1.7,0-2,0c-.3,0-.7,0-1.1,0-.3,0-.6,0-.9,0-.3,0-.6.1-.9.2-.5.2-.9.5-1.3.9-.4.4-.7.8-.9,1.3-.1.3-.2.6-.2.9,0,.3,0,.6-.1.9,0,.4,0,.8,0,1.1,0,.3,0,1,0,2v2c0,.3,0,.7,0,1.1,0,.3,0,.6.1.9,0,.3.1.6.2.9.2.5.5.9.9,1.3.4.4.8.7,1.3.9.3.1.6.2.9.3.3,0,.6,0,.9,0,.4,0,.8,0,1.1,0,.3,0,1,0,2,0s1.7,0,2,0c.3,0,.7,0,1.1,0,.3,0,.6,0,.9,0,.3,0,.6-.1.9-.2.5-.2.9-.5,1.3-.9.4-.4.7-.8.9-1.3.1-.3.2-.6.2-.9,0-.3,0-.6.1-.9,0-.4,0-.8,0-1.1,0-.3,0-1,0-2v-2c0-.3,0-.7,0-1.1ZM7.5,11.3c-.5,0-1,0-1.5-.3-.5-.2-.9-.5-1.2-.8-.4-.3-.6-.7-.8-1.2-.2-.5-.3-1-.3-1.5s.1-1,.3-1.5c.2-.5.5-.9.8-1.2.4-.3.8-.6,1.2-.8.5-.2,1-.3,1.5-.3s1,0,1.5.3c.5.2.9.5,1.2.8.4.3.6.7.8,1.2.2.5.3,1,.3,1.5s-.1,1-.3,1.5c-.2.5-.5.9-.8,1.2-.4.3-.8.6-1.2.8-.5.2-.9.3-1.5.3ZM11.5,4.4c-.2,0-.5,0-.6-.3-.2-.2-.3-.4-.3-.6s0-.5.3-.6c.2-.2.4-.3.6-.3s.5,0,.6.3c.2.2.3.4.3.6s0,.5-.3.6c-.2.2-.4.3-.6.3ZM10,7.5c0-.7-.2-1.3-.7-1.8-.5-.5-1.1-.7-1.8-.7s-1.3.2-1.8.7c-.5.5-.7,1.1-.7,1.8s.2,1.3.7,1.8c.5.5,1.1.7,1.8.7s1.3-.2,1.8-.7c.5-.5.7-1.1.7-1.8Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($tiktok_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $tiktok_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">TikTok</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--instagram"
                                            xmlns="http://www.w3.org/2000/svg" width="12.9" height="15"
                                            version="1.1" viewBox="0 0 12.9 15">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M6.7,0h2.4c0,1,.4,1.9,1.1,2.6h0c.7.6,1.6,1,2.6,1.1h0v2.5c-.9,0-1.8-.2-2.6-.6h0c-.4-.2-.7-.4-1-.6h0v5.5c0,.9-.4,1.7-.8,2.4h0c-.8,1.1-2.1,1.9-3.6,2h-.2c-.9,0-1.6-.2-2.3-.6h0c-1.2-.7-2.1-2-2.2-3.5h0v-.9c.2-2.3,2.2-4.3,4.7-4.3s.5,0,.8,0h0v2.7c-.2,0-.4-.1-.7-.1-.9,0-1.7.6-2,1.4h0c0,.2-.1.5-.1.7v.3h0c.2,1,1,1.8,2.1,1.8s0,0,0,0h0c.7,0,1.3-.4,1.7-1h0c.1-.2.2-.4.3-.7h0V0h-.1Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($youtube_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $youtube_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">Youtube</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--youtube"
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="13"
                                            version="1.1" viewBox="0 0 18 13">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M15.6.2C10.7,0,6.3,0,2.4.2c-.6,0-1.1.4-1.5,1C.4,1.9.2,2.5.1,3.2,0,5.4,0,7.6.1,9.8c0,.7.3,1.3.7,1.9.4.6.9,1,1.5,1.1,4.7.3,9.1.3,13.2,0,.6-.1,1.1-.5,1.5-1.1.4-.6.7-1.2.7-1.9.2-2.2.2-4.5,0-6.7,0-.7-.3-1.3-.7-1.9-.4-.6-.9-.9-1.6-.9ZM6.7,9.7V3.2l5.6,3.3-5.6,3.3Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>
                            
                            <?php if (isset($x_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $x_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">X</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--x" xmlns="http://www.w3.org/2000/svg"
                                            width="9.8" height="10" version="1.1" viewBox="0 0 9.8 10">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M9.1,9l-3.3-4.7-.4-.5L3.1.4l-.2-.3H0l.7,1,3.1,4.5.4.5,2.5,3.6.2.3h2.9s-.7-1-.7-1ZM7.2,9.3l-2.6-3.8-.4-.5L1.2.6h1.3l2.4,3.5.4.5,3.2,4.6h-1.3Z" />
                                            <polygon
                                                points="4.1 5.5 4.6 5.6 4.2 6.1 .8 10 0 10 3.8 5.5 4.1 5.5" />
                                            <polygon
                                                points="9.4 0 5.8 4.2 5.4 4.7 5 4.2 5.4 3.7 7.9 .8 8.6 0 9.4 0" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($thread_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $thread_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">Thread</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon-unset u-icon--thread" 
                                            xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 20 14"
                                            viewBox="0 0 20 14" fill="currentColor">
                                            <path 
                                                d="M12.186 0C6.65 0 3.63 2.84 3.63 7.89c0 3.82 2.26 6.07 5.61 6.07 2.77 0 4.62-1.55 4.62-3.96 0-1.84-1.15-2.98-2.97-2.98-1.54 0-2.6.83-2.6 2.06 0 1.05.73 1.7 1.72 1.7.66 0 1.18-.3 1.4-.74.1.18.15.38.15.6 0 1.24-.94 2.03-2.33 2.03-2.18 0-3.61-1.66-3.61-4.22 0-3.46 2.14-5.45 5.79-5.45 3.63 0 5.62 1.93 5.62 5.23 0 2.95-1.54 4.7-4.2 4.7-1.2 0-2.1-.42-2.73-1.18l-.9 1.06c.86.96 2.12 1.5 3.63 1.5 3.7 0 6.03-2.48 6.03-6.08C19.92 2.6 16.93 0 12.186 0z"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($linkedin_link)): ?>
                            <li class="c-footer-contact-info__list-item">
                                <a href="<?php echo $linkedin_link; ?>" class="c-link c-link--secondary" target="_blank" rel="noopener noreferrer">
                                    <span class="c-link__label">LinkedIn</span>
                                    <span class="c-link__icon">
                                        <svg class="u-icon u-icon--linkedin"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            version="1.1" viewBox="0 0 16 16">
                                            <!-- Generator: Adobe Illustrator 29.2.1, SVG Export Plug-In . SVG Version: 2.1.0 Build 116)  -->
                                            <path
                                                d="M3.8,1.9c0,.5-.2,1-.6,1.3-.3.5-.8.6-1.3.6s-1-.2-1.4-.6-.5-.8-.5-1.3S.2,1,.6.5s.8-.5,1.3-.5,1,.2,1.3.6c.5.3.6.8.6,1.3ZM8.8,5.3v1.4h0c.3-.3.6-.8,1.3-1.1.5-.3,1.1-.5,2.1-.5,1.6,0,2.7.5,3.2,1.4s.6,2.1.6,3.5v5.9h-3.4v-5.1c0-.6,0-1.3-.2-1.9-.2-.6-.6-1-1.6-1s-1.3.3-1.6.8c-.2.6-.3,1.3-.3,1.9v5.3h-3.4V5.3h3.2ZM.3,5.3h3.4v10.7H.3V5.3Z" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="c-footer__bottom-unset">
                    <h5 class="u-b1 u-uppercase">Copyright </h5>
                    <div class="c-footer-contact-info u-b2">
                        <ul class="c-footer-contact-info__list">
                            <li class="c-footer-contact-info__list-item no-padding-right">
                                <p class="u-b2">
                                    <a href="https://web-cdn.rimac-automobili.com/wp-content/uploads/2023/06/14110846/Bugatti-Rimac-AboutUs.pdf" class="c-link c-link--secondary">© 2023 Gcar</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>