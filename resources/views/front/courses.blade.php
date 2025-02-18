<!DOCTYPE html>
<html style="font-size: 16px" lang="tr">
<head>

    <style>
        /* Navbar altındaki hero section için */
        .u-section-1 {
            background-attachment: fixed !important;
            background-position: center !important;
            background-size: cover !important;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Dersler</title>
    <link rel="stylesheet" href="{{asset('./site2/nicepage.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('./site2/Dersler.css')}}" media="screen" />
    <script
        class="u-script"
        type="text/javascript"
        src="{{asset('./site2/jquery.js')}}"
        defer=""
    ></script>
    <script
        class="u-script"
        type="text/javascript"
        src="{{asset('./site2/nicepage.js')}}"
        defer=""
    ></script>
    <meta name="generator" content="Nicepage 7.2.3, nicepage.com" />

    <link
        id="u-theme-google-font"
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/default-logo.png",
          "sameAs": []
        }
    </script>
    <meta name="theme-color" content="#1683ea" />
    <meta property="og:title" content="Dersler" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
</head>
<body
    data-path-to-root="./"
    data-include-products="true"
    class="u-body u-xl-mode"
    data-lang="tr"
>
<header class="u-clearfix u-header u-header" id="sec-d254">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
            <img
                src="{{asset('./site2/images/default-logo.png')}}"
                class="u-logo-image u-logo-image-1"
            />
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div
                class="menu-collapse"
                style="font-size: 1rem; letter-spacing: 0px; font-weight: 500"
            >
                <a
                    class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                    href="#"
                >
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        version="1.1"
                        id="menu-hamburger"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('index')}}"
                            style="padding: 10px 20px"
                        >Anasayfa</a
                        >
                    </li>
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('about')}}"
                            style="padding: 10px 20px"
                        >Hakkımda</a
                        >
                    </li>
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('services')}}"
                            style="padding: 10px 20px"
                        >Hizmetler</a
                        >
                    </li>
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('blog')}}"
                            style="padding: 10px 20px"
                        >Blog</a
                        >
                    </li>
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('courses')}}"
                            style="padding: 10px 20px"
                        >Dersler</a
                        >
                    </li>
                    <li class="u-nav-item">
                        <a
                            class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                            href="{{route('contact')}}"
                            style="padding: 10px 20px"
                        >İletişim</a
                        >
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div
                    class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav"
                >
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul
                            class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"
                        >
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('index')}}">Anasayfa</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('about')}}"
                                >Hakkımda</a
                                >
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('services')}}"
                                >Hizmetler</a
                                >
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('blog')}}"
                                >Blog</a
                                >
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('courses')}}"
                                >Dersler</a
                                >
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{route('contact')}}"
                                >İletişim</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section
    class="u-align-left u-clearfix u-container-align-left u-image u-shading u-section-1"
    id="sec-a7be"
>
    <div class="u-clearfix u-sheet u-sheet-1">
        @if($Courses)
            <h1 class="u-align-left u-text u-text-default u-title u-text-1">
                {{$Courses->title}}
            </h1>
            <p class="u-align-left u-large-text u-text u-text-variant u-text-2">
                {{$Courses->content}}
            </p>
        @endif

    </div>
</section>
<section class="u-clearfix u-grey-10 u-section-2" id="sec-03eb">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-1"
                    >
                        <h3 class="u-text u-text-default u-text-1">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-1"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-1"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/images/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-2">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-1"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-1" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-1"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
                    >
                        <h3 class="u-text u-text-default u-text-3">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-2"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-2"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/images/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-4">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-2"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-2" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-2"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
                    >
                        <h3 class="u-text u-text-default u-text-5">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-3"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-3"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/images/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-6">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-3"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-3" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-3"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
                    >
                        <h3 class="u-text u-text-default u-text-7">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-4"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-4"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/nimages/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-8">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-4"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-4" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-4"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-5"
                    >
                        <h3 class="u-text u-text-default u-text-9">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-5"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-5"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/images/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-10">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-5"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-5" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-5"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-6"
                    >
                        <h3 class="u-text u-text-default u-text-11">Sample Headline</h3>
                        <div
                            class="u-border-4 u-border-palette-3-base u-expanded-width u-line u-line-horizontal u-line-6"
                        ></div>
                        <img
                            alt=""
                            class="custom-expanded u-image u-image-default u-image-6"
                            data-image-width="2000"
                            data-image-height="1333"
                            src="{{asset('./site2/images/90fc53c9.svg')}}"
                        />
                        <p class="u-text u-text-default u-text-12">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <a href="" class="u-btn u-button-style u-palette-3-base u-btn-6"
                        >learn more</a
                        ><!--shopping_cart-->
                        <a class="u-shopping-cart u-shopping-cart-6" href="#sec-0a98">
                  <span
                      class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-shopping-cart-icon u-text-palette-1-base u-icon-6"
                  >
                    <svg
                        class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice"
                        viewBox="0 0 16 16"
                        style=""
                    >
                      <use xlink:href="#svg-9883"></use>
                    </svg>
                    <svg
                        class="u-svg-content"
                        viewBox="0 0 16 16"
                        x="0px"
                        y="0px"
                        id="svg-9883"
                    >
                      <path
                          d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"
                      ></path>
                    </svg>
                    <span
                        class="u-icon-circle u-palette-1-base u-shopping-cart-count"
                        style="font-size: 0.75rem"
                    ><!--shopping_cart_count-->0<!--/shopping_cart_count--></span
                    >
                  </span> </a
                        ><!--/shopping_cart-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-payment-dialog u-valign-middle u-dialog-section-5"
    id="sec-0a98"
>
    <div
        class="u-align-center u-container-align-center u-container-style u-dialog u-radius-25 u-shape-round u-white u-dialog-1"
    >
        <div class="u-container-layout u-valign-top u-container-layout-1">
            <h5 class="u-align-left u-text u-text-1">Buy Now</h5>
            <div
                class="u-expanded-width u-products u-products-1"
                data-site-sorting-prop="created"
                data-site-sorting-order="desc"
                data-items-per-page="1"
            >
                <div class="u-list-control"></div>
                <div class="u-repeater u-repeater-1">
                    <!--product_item-->
                    <div class="u-container-style u-products-item u-repeater-item">
                        <div
                            class="u-container-layout u-similar-container u-container-layout-2"
                        >
                            <h5 class="u-align-left u-product-control u-text u-text-2">
                                <a class="u-product-title-link" href="#">Product 1 Title</a>
                            </h5>
                            <div
                                class="u-align-left u-product-control u-product-desc u-text u-text-3"
                            >
                                <p>
                                    Sample text. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit nullam nunc justo sagittis suscipit
                                    ultrices.
                                </p>
                            </div>
                            <div
                                class="u-align-left u-product-control u-product-quantity u-product-quantity-1"
                            >
                                <div class="u-hidden u-quantity-label">Quantity</div>
                                <div
                                    class="u-border-1 u-border-grey-30 u-quantity-input u-radius-50"
                                >
                                    <a
                                        class="disabled minus u-button-style u-quantity-button u-text-body-color"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="m 4 8 h 8"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1"
                                                fill-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </a>
                                    <input
                                        class="u-input"
                                        type="text"
                                        value="1"
                                        pattern="[0-9]+"
                                    />
                                    <a
                                        class="plus u-button-style u-quantity-button u-text-body-color"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="m 4 8 h 8 M 8 4 v 8"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1"
                                                fill-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div
                                data-add-zero-cents="true"
                                class="u-align-left u-product-control u-product-price u-product-price-1"
                            >
                                <div class="u-price-wrapper u-spacing-10">
                                    <div
                                        class="u-old-price"
                                        style="text-decoration: line-through !important"
                                    >
                                        $20.00
                                    </div>
                                    <div
                                        class="u-price"
                                        style="font-size: 1.25rem; font-weight: 700"
                                    >
                                        $17.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/product_item-->
                </div>
                <div class="u-list-control"></div>
            </div>
            <div
                class="u-expanded-width u-payment-services u-tab-links-align-justify u-tab-payment u-tab-vertical u-tabs u-payment-services-1"
                data-payment-order-approved-message="Your order has been approved. Thank you!"
                data-payment-order-cancelled-message="Unable to process your order. Please try again later."
            >
                <ul class="u-tab-list u-unstyled" role="tablist">
                    <li class="u-tab-item" role="presentation">
                        <a
                            class="active u-active-grey-10 u-button-style u-payment-paypal u-tab-link u-text-body-color"
                            id="link-tab-9cb3"
                            href="#tab-9cb3"
                            role="tab"
                            aria-controls="tab-9cb3"
                            aria-selected="true"
                        ><input
                                type="radio"
                                class="u-field-input u-grey-15 u-radius-15"
                                name="payment-group"
                                checked="checked"
                            /><span>Paypal</span
                            ><svg
                                class="u-svg-content"
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                            >
                                <path
                                    fill="#009EE3"
                                    d="M11,5.9H18c3.8,0,5.2,1.9,4.9,4.7c-0.3,4.7-3.2,7.2-6.9,7.2h-1.9c-0.5,0-0.8,0.3-0.9,1.3l-0.8,4.3
  c-0.1,0.3-0.2,0.5-0.5,0.6H7.6c-0.4,0-0.5-0.3-0.4-1l2.6-16C9.9,6.3,10.2,5.9,11,5.9z"
                                ></path>
                                <path
                                    fill="#113984"
                                    d="M6.7,0h7.1c2,0,4.3,0.1,5.9,1.5c1.1,0.9,1.6,2.4,1.5,4c-0.4,5.4-3.7,8.5-8,8.5H9.6c-0.6,0-0.9,0.4-1.2,1.5
  l-0.9,5.1C7.4,21,7.3,21.3,7,21.3H2.6C2,21.3,1.9,21,2,20.1L5.2,1.3C5.3,0.4,5.7,0,6.7,0z"
                                ></path>
                                <path
                                    fill="#172C70"
                                    d="M8.6,14.8l1.3-7.9c0.1-0.7,0.5-1,1.3-1h7.1c1.2,0,2.1,0.2,2.8,0.5c-0.7,4.8-3.8,7.5-7.9,7.5H9.6
  C9.1,13.9,8.8,14.1,8.6,14.8z"
                                ></path>
                            </svg>
                        </a>
                    </li>
                    <li class="u-tab-item" role="presentation">
                        <a
                            class="u-active-grey-10 u-button-style u-payment-stripe u-tab-link u-text-body-color"
                            id="link-tab-ab80"
                            href="#tab-ab80"
                            role="tab"
                            aria-controls="tab-ab80"
                            aria-selected="false"
                        ><input
                                type="radio"
                                class="u-field-input u-grey-15 u-radius-15"
                                name="payment-group"
                            /><span>Stripe</span
                            ><svg
                                class="u-svg-content"
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    fill="#635BFF"
                                    d="M14,9.2c-2.3-0.8-3.4-1.5-3.4-2.4c0-0.8,0.8-1.3,2-1.3c2.3,0,4.7,0.8,6.4,1.6l0.9-5.5
  c-1.3-0.5-4-1.6-7.7-1.6C9.6,0,7.5,0.7,5.8,1.9C4.1,3.2,3.4,4.9,3.4,7.2c0,4,2.6,5.7,6.8,7.2c2.7,0.9,3.6,1.6,3.6,2.5
  c0,0.9-0.9,1.6-2.4,1.6c-1.9,0-5.2-0.9-7.3-2.1L3,22c1.8,0.9,5.1,2,8.7,2c2.8,0,5.1-0.7,6.6-1.9c1.8-1.3,2.7-3.2,2.7-5.7
  C20.9,12.3,18.2,10.7,14,9.2L14,9.2z"
                                ></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="u-tab-content">
                    <div
                        class="u-container-style u-payment-paypal u-tab-active u-tab-pane"
                        id="tab-9cb3"
                        role="tabpanel"
                        aria-labelledby="link-tab-9cb3"
                    >
                        <div
                            class="u-container-layout u-payment-services-inner u-container-layout-3"
                        >
                            Loading...
                        </div>
                    </div>
                    <div
                        class="u-container-style u-payment-stripe u-tab-pane"
                        id="tab-ab80"
                        role="tabpanel"
                        aria-labelledby="link-tab-ab80"
                    >
                        <div class="u-container-layout u-container-layout-4">
                            <a
                                href="#"
                                class="u-btn u-button-style u-stripe-button u-btn-1"
                            >Pay with Stripe</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1">
            <svg
                class="u-svg-link"
                preserveAspectRatio="xMidYMin slice"
                viewBox="0 0 16 16"
                style=""
            >
                <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="#svg-efe9"
                ></use>
            </svg>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                xml:space="preserve"
                class="u-svg-content"
                viewBox="0 0 16 16"
                x="0px"
                y="0px"
                id="svg-efe9"
            >
            <rect
                x="7"
                y="0"
                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)"
                width="2"
                height="16"
            ></rect>
                <rect
                    x="0"
                    y="7"
                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)"
                    width="16"
                    height="2"
                ></rect>
          </svg>
        </button>
    </div>
</section>
<footer class="u-clearfix u-footer u-grey-80" id="sec-e35a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div
            class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1"
        >
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-30-md u-layout-cell-1"
                    >
                        <div class="u-container-layout u-container-layout-1">
                            <!--position-->
                            <div data-position="" class="u-position">
                                <!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">
                                        @if($FooterContent1)
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content-->
                                                {{$FooterContent1->title}}
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header--><!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content-->
                                                {{$FooterContent1->content}}
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        @endif

                                    </div>
                                </div>
                                <!--/block-->
                            </div>
                            <!--/position-->
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2"
                    >
                        <div class="u-container-layout u-container-layout-2">
                            <!--position-->
                            <div data-position="" class="u-position">
                                <!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">
                                        @if($FooterContent2)
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content-->
                                                {{$FooterContent2->title}}
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header--><!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content-->
                                                {{$FooterContent2->content}}
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        @endif

                                    </div>
                                </div>
                                <!--/block-->
                            </div>
                            <!--/position-->
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-3"
                    >
                        <div class="u-container-layout u-container-layout-3">
                            <!--position-->
                            <div data-position="" class="u-position">
                                <!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix">
                                        @if($FooterContent3)
                                            <!--block_header-->
                                            <h5 class="u-block-header u-text">
                                                <!--block_header_content-->
                                                {{$FooterContent3->title}}
                                                <!--/block_header_content-->
                                            </h5>
                                            <!--/block_header--><!--block_content-->
                                            <div class="u-block-content u-text">
                                                <!--block_content_content-->
                                                {{$FooterContent3->content}}
                                                <!--/block_content_content-->
                                            </div>
                                            <!--/block_content-->
                                        @endif
                                    </div>
                                </div>
                                <!--/block-->
                            </div>
                            <!--/position-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"
        ></div>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
            <a class="u-social-url" title="facebook" target="_blank" href="">
            <span class="u-icon u-social-facebook u-social-icon u-icon-1">
              <svg
                  class="u-svg-link"
                  preserveAspectRatio="xMidYMin slice"
                  viewBox="0 0 112 112"
                  style=""
              >
                <use xlink:href="#svg-dd33"></use>
              </svg>
              <svg
                  class="u-svg-content"
                  viewBox="0 0 112 112"
                  x="0"
                  y="0"
                  id="svg-dd33"
              >
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path
                    fill="#FFFFFF"
                    d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"
                ></path>
              </svg>
            </span>
            </a>
            <a class="u-social-url" title="twitter" target="_blank" href="">
            <span class="u-icon u-social-icon u-social-twitter u-icon-2">
              <svg
                  class="u-svg-link"
                  preserveAspectRatio="xMidYMin slice"
                  viewBox="0 0 112 112"
                  style=""
              >
                <use xlink:href="#svg-4a9f"></use>
              </svg>
              <svg
                  class="u-svg-content"
                  viewBox="0 0 112 112"
                  x="0"
                  y="0"
                  id="svg-4a9f"
              >
                <circle
                    fill="currentColor"
                    class="st0"
                    cx="56.1"
                    cy="56.1"
                    r="55"
                ></circle>
                <path
                    fill="#FFFFFF"
                    d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"
                ></path>
              </svg>
            </span>
            </a>
            <a class="u-social-url" title="instagram" target="_blank" href="">
            <span class="u-icon u-social-icon u-social-instagram u-icon-3">
              <svg
                  class="u-svg-link"
                  preserveAspectRatio="xMidYMin slice"
                  viewBox="0 0 112 112"
                  style=""
              >
                <use xlink:href="#svg-9792"></use>
              </svg>
              <svg
                  class="u-svg-content"
                  viewBox="0 0 112 112"
                  x="0"
                  y="0"
                  id="svg-9792"
              >
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path
                    fill="#FFFFFF"
                    d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"
                ></path>
                <path
                    fill="#FFFFFF"
                    d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"
                ></path>
                <path
                    fill="#FFFFFF"
                    d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"
                ></path>
              </svg>
            </span>
            </a>
            <a class="u-social-url" title="pinterest" target="_blank" href="">
            <span class="u-icon u-social-icon u-social-pinterest u-icon-4">
              <svg
                  class="u-svg-link"
                  preserveAspectRatio="xMidYMin slice"
                  viewBox="0 0 112 112"
                  style=""
              >
                <use xlink:href="#svg-8ceb"></use>
              </svg>
              <svg
                  class="u-svg-content"
                  viewBox="0 0 112 112"
                  x="0"
                  y="0"
                  id="svg-8ceb"
              >
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path
                    fill="#FFFFFF"
                    d="M61.1,76.9c-4.7-0.3-6.7-2.7-10.3-5c-2,10.7-4.6,20.9-11.9,26.2c-2.2-16.1,3.3-28.2,5.9-41
      c-4.4-7.5,0.6-22.5,9.9-18.8c11.6,4.6-10,27.8,4.4,30.7C74.2,72,80.3,42.8,71,33.4C57.5,19.6,31.7,33,34.9,52.6
      c0.8,4.8,5.8,6.2,2,12.9c-8.7-1.9-11.2-8.8-10.9-17.8C26.5,32.8,39.3,22.5,52.2,21c16.3-1.9,31.6,5.9,33.7,21.2
      C88.2,59.5,78.6,78.2,61.1,76.9z"
                ></path>
              </svg>
            </span>
            </a>
        </div>
        <a
            href="#"
            class="u-image u-logo u-image-1"
            data-image-width="80"
            data-image-height="40"
        >
            <img
                src="{{asset('./site2/images/default-logo.png')}}"
                class="u-logo-image u-logo-image-1"
            />
        </a>
    </div>
</footer>


</body>
</html>
