@section('navBar')
<header class="u-clearfix u-header u-header" id="sec-10b7">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="1500" data-image-height="1500">
            <img src="{{ asset('img/logo.jpg') }}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
            <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; " wfd-invisible="true">
                <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container" wfd-invisible="true">
                <ul class="u-custom-font u-font-montserrat u-nav u-spacing-20 u-unstyled u-nav-1">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" href="#" style="padding: 21px 14px;">Kezdőoldal</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" href="#" style="padding: 21px 14px;">Szolgáltatások</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                <li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-white" href="#nail">Körmök</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-hover-palette-3-base u-nav-link u-white" href="#eyelash">Pillák</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 21px 14px;">Képfeltöltés</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" href="#opinions" style="padding: 21px 14px;">Vélemények</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" href="#contact" style="padding: 21px 14px;">Kapcsolatok</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-grey-90 u-text-hover-palette-2-base" style="padding: 21px 14px;">Kilépés</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse" wfd-invisible="true">
                <div class="u-container-style u-inner-container-layout u-opacity u-opacity-95 u-palette-3-base u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-text-palette-2-base u-unstyled u-nav-3">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Kezdőoldal</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Szolgáltatások</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#nail">Körmök</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#eyelash">Pillák</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Képfeltöltés</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#opinions">Vélemények</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#contact">Kapcsolatok</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Kilépés</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
            </div>
        </nav>
    </div>
</header>
@endsection