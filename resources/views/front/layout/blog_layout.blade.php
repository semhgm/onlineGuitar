<!DOCTYPE html>
<html style="font-size: 16px" lang="tr">
<head>
    <style>
        .u-blog {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Kartları ortala */
            gap: 20px; /* Kartlar arasındaki boşluğu belirle */
            max-width: 1200px; /* Blog alanını genişlet */
            margin: auto; /* Sayfa ortasına al */
        }

        .u-blog-post {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        .u-blog-post:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .u-blog-post img {
            width: 100%;
            height: 220px; /* Sabit yükseklik ver */
            object-fit: cover; /* Resmin düzgün görünmesini sağla */
            display: block;
        }

        .u-container-layout {
            padding: 20px;
            text-align: center;
        }

        .u-post-header-link {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        .u-btn {
            display: block;
            text-align: center;
            margin: 10px auto;
            padding: 10px;
            width: 90%;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
        }

        .u-btn:hover {
            background-color: #0056b3;
        }

        /* Hero section için */
        .u-section-1 {
            background-attachment: fixed !important;
            background-position: center !important;
            background-size: cover !important;
        }

        /* Footer stillerini küçültmek için */

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta
        name="keywords"
        content="Blogumdan yazılar​, 1. Yazı Başlığı, 2. Yayın Başlığı, Yazı 3 Başlığı"
    />
    <meta name="description" content="" />
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('./site2/nicepage.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('./site2/Blog.css')}}" media="screen" />
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
    <meta property="og:title" content="Blog" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
</head>
<body
    data-path-to-root="./"
    data-include-products="true"
    class="u-body u-xl-mode"
    data-lang="tr"
>
<header class="modern-header">
    <div class="modern-header-container">
        <div class="modern-logo">
            <a href="{{route('index')}}">
                <img src="{{asset('site2/images/default-logo.png')}}" class="modern-logo-image" alt="Logo" />
            </a>
        </div>

        <nav class="modern-nav">
            <button class="modern-mobile-toggle">
                <svg width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" fill="#333"/>
                </svg>
            </button>

            <ul class="modern-nav-list">
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('index')}}">Anasayfa</a>
                </li>
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('about')}}">Hakkımda</a>
                </li>
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('services')}}">Hizmetler</a>
                </li>
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('courses')}}">Dersler</a>
                </li>
                <li class="modern-nav-item">
                    <a class="modern-nav-link" href="{{route('contact')}}">İletişim</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section
    class="u-clearfix u-image u-shading u-section-1"
    id="carousel_3794"
    data-image-width="1280"
    data-image-height="783"
>
    <div
        class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1"
    >
        @if($MyBlog)
            <h1 class="u-text u-text-1">{{$MyBlog->title}}</h1>
            <p class="u-text u-text-2">

                {{$MyBlog->content}}
            </p>
        @endif

    </div>
</section>




@yield('content')




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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.querySelector('.modern-mobile-toggle');
        const navList = document.querySelector('.modern-nav-list');

        mobileToggle.addEventListener('click', function() {
            navList.classList.toggle('open');
        });
    });
</script>

</body>
</html>
