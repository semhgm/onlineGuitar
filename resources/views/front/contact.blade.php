<!DOCTYPE html>
<html style="font-size: 16px" lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="Konuşalım" />
    <meta name="description" content="" />
    <title>İletişim</title>
    <link rel="stylesheet" href="{{asset('./site2/nicepage.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('./site2/İletişim.css')}}" media="screen" />
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
    <meta name="referrer" content="origin" />

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
    <meta property="og:title" content="İletişim" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    <!-- jQuery'yi dahil et -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert2 CSS ve JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
<section class="u-clearfix u-palette-1-base u-section-1" id="sec-64c9">
    <div
        class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1"
    >
        <div
            class="u-align-center u-container-align-center u-container-style u-expanded-width-xs u-group u-white u-group-1"
        >
            <div class="u-container-layout u-valign-top u-container-layout-1">
                <h2 class="u-text u-text-1">Contact Us</h2>
                <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-xs u-form u-form-1">
                    <form action="{{route('contact.send')}}" id="contactForm" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 10px" source="email" method="POST">
                        @csrf
                        <div class="u-form-group u-form-name">
                            <label for="name-5a14" class="u-form-control-hidden u-label">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" />
                        </div>
                        <div class="u-form-email u-form-group">
                            <label for="email-5a14" class="u-form-control-hidden u-label">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" />
                        </div>
                        <div class="u-form-group u-form-message">
                            <label for="message-5a14" class="u-form-control-hidden u-label">Message</label>
                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message" name="message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <button type="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Submit</button>
                            <input type="submit" value="submit" class="u-form-control-hidden" />
                        </div>
                        <input type="hidden" value="" name="recaptchaResponse" />
                        <input type="hidden" name="formServices" value="4df3e0cf-fad5-be81-c7b0-78d64b7df96e" />

                        <p class="u-text u-success-message" style="color: green; margin-top: 10px; display: none;"></p>
                        <p class="u-text u-error-message" style="color: red; margin-top: 10px; display: none;"></p>
                    </form>



                    <script>
                        $(document).ready(function() {
                            $('#contactForm').submit(function(e) {
                                e.preventDefault(); // Formun normal submit'ini engelle

                                $.ajax({
                                    type: 'POST',
                                    url: $(this).attr('action'),
                                    data: $(this).serialize(),
                                    success: function(response) {
                                        if (response.success) {
                                            // Swal ile başarı mesajı göster
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Başarılı!',
                                                text: response.message,
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText: 'Tamam'
                                            });
                                        } else {
                                            // Swal ile hata mesajı göster
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Hata!',
                                                text: response.message,
                                                confirmButtonColor: '#d33',
                                                confirmButtonText: 'Tamam'
                                            });
                                        }
                                    },
                                    error: function() {
                                        // Ajax hatası durumunda Swal ile hata mesajı göster
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Bir hata oluştu!',
                                            text: 'Lütfen tekrar deneyin.',
                                            confirmButtonColor: '#d33',
                                            confirmButtonText: 'Tamam'
                                        });
                                    }
                                });
                            });
                        });




                    </script>

                    <!-- Başarı veya hata mesajı -->



                </div>
            </div>        </div>
        <img
            src="{{asset('./site2/images/wqe-min.jpg')}}"
            alt=""
            class="u-expanded-width-xs u-image u-image-default u-image-1"
            data-image-width="800"
            data-image-height="948"
        />
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div
                    class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-list-item-1"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-2"
                    >
                <span
                    class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"
                >
                  <svg
                      class="u-svg-link"
                      preserveAspectRatio="xMidYMin slice"
                      viewBox="0 0 513.64 513.64"
                      style=""
                  >
                    <use xlink:href="#svg-e0b8"></use>
                  </svg>
                  <svg
                      class="u-svg-content"
                      viewBox="0 0 513.64 513.64"
                      x="0px"
                      y="0px"
                      id="svg-e0b8"
                      style="enable-background: new 0 0 513.64 513.64"
                  >
                    <g>
                      <g>
                        <path
                            d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"
                        ></path>
                      </g>
                    </g>
                  </svg>
                </span>
                        @if($CallUs)
                            <h5 class="u-text u-text-palette-1-base u-text-3">{{$CallUs->title}}</h5>
                            <p class="u-text u-text-4">{{$CallUs->content}}</p>
                        @endif
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-list-item-2"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-3"
                    >
                <span
                    class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"
                >
                  <svg
                      class="u-svg-link"
                      preserveAspectRatio="xMidYMin slice"
                      viewBox="0 0 512 512"
                      style=""
                  >
                    <use xlink:href="#svg-d240"></use>
                  </svg>
                  <svg
                      class="u-svg-content"
                      viewBox="0 0 512 512"
                      x="0px"
                      y="0px"
                      id="svg-d240"
                      style="enable-background: new 0 0 512 512"
                  >
                    <g>
                      <g>
                        <path
                            d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5    c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021    C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333    s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"
                        ></path>
                      </g>
                    </g>
                  </svg>
                </span>
                        @if($Adress)
                            <h5 class="u-text u-text-palette-1-base u-text-5">{{$Adress->title}}</h5>
                            <p class="u-text u-text-6">
                                {{$Adress->content}}
                            </p>
                        @endif
                    </div>
                </div>
                <div
                    class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-list-item-3"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-4"
                    >
                <span
                    class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"
                >
                  <svg
                      class="u-svg-link"
                      preserveAspectRatio="xMidYMin slice"
                      viewBox="0 0 512 512"
                      style=""
                  >
                    <use xlink:href="#svg-4673"></use>
                  </svg>
                  <svg
                      class="u-svg-content"
                      viewBox="0 0 512 512"
                      id="svg-4673"
                  >
                    <g>
                      <path
                          d="m386.058 256c0-8.284 6.716-15 15-15h31.587c-7.224-85.814-75.831-154.421-161.645-161.645v31.588c0 8.284-6.716 15-15 15s-15-6.716-15-15v-31.588c-85.814 7.224-154.421 75.831-161.645 161.645h31.587c8.284 0 15 6.716 15 15s-6.716 15-15 15h-31.587c7.224 85.814 75.831 154.421 161.645 161.645v-31.588c0-8.284 6.716-15 15-15s15 6.716 15 15v31.588c85.814-7.224 154.421-75.831 161.645-161.645h-31.587c-8.284 0-15-6.716-15-15zm-39.467-71.629-79.838 82.087c-5.558 5.714-14.618 6.086-20.625.835l-59.598-52.101c-6.237-5.452-6.873-14.929-1.42-21.165 5.452-6.237 14.928-6.875 21.166-1.421l48.889 42.739 69.921-71.891c5.776-5.938 15.273-6.069 21.211-.295 5.938 5.778 6.07 15.274.294 21.212z"
                      ></path>
                      <path
                          d="m256 0c-141.159 0-256 114.841-256 256s114.841 256 256 256 256-114.841 256-256-114.841-256-256-256zm0 463.286c-114.298 0-207.286-92.988-207.286-207.286s92.988-207.286 207.286-207.286 207.286 92.988 207.286 207.286-92.988 207.286-207.286 207.286z"
                      ></path>
                    </g>
                  </svg>
                </span>
                        @if($BusinessHours)
                            <h5 class="u-text u-text-palette-1-base u-text-7">
                                {{$BusinessHours->title}}
                            </h5>
                            <p class="u-text u-text-8">
                                {{$BusinessHours->content}}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-b71b">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
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
            <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/serhatcohadar/">
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


