<!DOCTYPE html>
<html style="font-size: 16px" lang="tr">
<head>
    <style>



    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta
        name="keywords"
        content="​Online music education, ​Music Education, What We Do, ​Performances &amp;amp; Activities, Music School, Music psychology and conducting pedagogy, Contact Us, SEZGİSEL"
    />
    <meta name="description" content="" />
    <title>Giriş</title>
    <link rel="stylesheet" href="{{asset('./site2/nicepage.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('./site2/index.css')}}" media="screen" />
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
    <link
        id="u-page-google-font"
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Roboto+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
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
    <meta property="og:title" content="Giriş" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
</head>
<body
    data-home-page="Giriş.html"
    data-home-page-title="Giriş"
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

<section class="u-clearfix u-image u-section-1" id="carousel_ace0">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div
            class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1"
        >
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-container-style u-image u-layout-cell u-left-cell u-size-28-lg u-size-28-xl u-size-31-md u-size-31-sm u-size-31-xs u-image-1"
                    >
                        <div class="u-container-layout u-container-layout-1"></div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-29-md u-size-29-sm u-size-29-xs u-size-32-lg u-size-32-xl u-layout-cell-2"
                    >
                        <div
                            class="u-container-layout u-valign-middle u-container-layout-2"
                        >
                            <div
                                class="u-align-center u-container-align-center u-container-style u-group u-palette-1-base u-group-1"
                            >
                                <div
                                    class="u-container-layout u-valign-middle u-container-layout-3"
                                >
                                    <h5 class="u-custom-font u-text u-text-font u-text-1">
                                        Modern&amp; fun
                                    </h5>
                                </div>
                            </div>
                            @if($OnlineMusicEducation)
                            <h1
                                class="u-custom-font u-font-roboto-condensed u-text u-text-palette-1-base u-text-2"
                            >
                                {{$OnlineMusicEducation->title}}<br />
                            </h1>
                            <p class="u-text u-text-3">
                                {{ $OnlineMusicEducation->content}}
                            </p>
                            @endif
                            <p class="u-text u-text-black u-text-default u-text-4">

                            </p>
                            <a
                                href="{{route('about')}}"
                                data-page-id="6977341"
                                class="u-border-2 u-border-palette-1-base u-btn u-button-style u-hover-palette-1-base u-none u-text-black u-text-hover-white u-btn-2"
                            >sayfaya git</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="u-align-center u-clearfix u-container-align-center u-palette-1-base u-section-3"
    id="carousel_0150"
>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div
            class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1"
        >
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-1"
                    >
                        <div
                            class="u-container-layout u-valign-top u-container-layout-1"
                        >
                  <span
                      class="u-file-icon u-icon u-icon-circle u-palette-1-light-2 u-text-palette-1-base u-icon-1"
                  >
                    <img src="{{asset('./site2/images/651799-0d5b9183.png')}}" alt="" />
                  </span>
                            <h4 class="u-text u-text-default u-text-1">Music Therapy</h4>
                            <p class="u-text u-text-2">
                                Müzik, ruh ve beden sağlığı üzerinde derin etkiler yaratır.
                                Müzik terapisi, stresi azaltmak, odaklanmayı artırmak ve
                                duygusal iyileşmeyi desteklemek için kullanılan bilimsel bir
                                yöntemdir.
                            </p>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-2"
                    >
                        <div
                            class="u-container-layout u-valign-top u-container-layout-2"
                        >
                  <span
                      class="u-file-icon u-icon u-icon-circle u-palette-1-light-2 u-text-palette-1-base u-icon-2"
                  >
                    <img src="{{asset('./site2/images/1389567-d06f8392.png')}}" alt="" />
                  </span>
                            <h4 class="u-text u-text-default u-text-3">Our Mission</h4>
                            <p class="u-text u-text-4">
                                Online müzik eğitimi ile herkesin kaliteli müzik bilgisine
                                ulaşmasını sağlamak en büyük hedefimizdir. Alanında uzman
                                eğitmenler, interaktif dersler ve kapsamlı kaynaklarla,
                                müzik öğrenmeyi herkes için kolay ve keyifli hale getirmeyi
                                amaçlıyoruz. Sanatı erişilebilir kılmak ve müziğin birleştirici
                                gücünü yaymak için buradayız.
                            </p>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-3"
                    >
                        <div
                            class="u-container-layout u-valign-top u-container-layout-3"
                        >
                  <span
                      class="u-file-icon u-icon u-icon-circle u-palette-1-light-2 u-text-palette-1-base u-icon-3"
                  >
                    <img src="{{asset('./site2/images/702144-78ee4968.png')}}" alt="" />
                  </span>
                            <h4 class="u-text u-text-default u-text-5">Music Camps</h4>
                            <p class="u-text u-text-6">
                                Müzik kampları, öğrencilerin hem pratik becerilerini geliştirdiği hem de
                                farklı müzik tarzlarını deneyimlediği özel etkinliklerdir. Çevrim içi ve
                                yüz yüze formatlarda düzenlenen kamplarımız sayesinde, yeni müzik aletleri
                                çalmayı öğrenebilir, grup çalışmalarıyla sahne deneyimi kazanabilir ve profesyonel
                                sanatçılardan eğitim alabilirsiniz.
                            </p>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-4"
                    >
                        <div
                            class="u-container-layout u-valign-top u-container-layout-4"
                        >
                  <span
                      class="u-file-icon u-icon u-icon-circle u-palette-1-light-2 u-text-palette-1-base u-icon-4"
                  >
                    <img src="{{asset('./site2/images/3629747-fd049edc.png')}}" alt="" />
                  </span>
                            <h4 class="u-text u-text-default u-text-7">Library</h4>
                            <p class="u-text u-text-8">
                                Müzik dünyasına dair en güncel kaynakları,
                                akademik makaleleri ve öğretici blog yazılarını keşfedin!
                                Müziğin tarihi, teori dersleri, nota okumadan ses mühendisliğine
                                kadar birçok konuda zengin içerikler sunan kütüphanemiz, müzik
                                tutkunlarının gelişimini desteklemek için hazırlanmıştır.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="u-align-center u-clearfix u-container-align-center u-palette-1-light-3 u-section-4"
    id="carousel_079a"
>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-palette-1-base u-text-1">
            🎵 Müzik Tutkunuzu Profesyonel Bir Yolculuğa Dönüştürün!
        </h2>
        <p class="u-text u-text-2">
            Enstrüman çalmayı öğrenmek artık daha kolay ve eğlenceli! Online müzik eğitim platformumuzda, gitar, piyano, nota okuma ve daha fazlası için uzman eğitmenlerle bir aradasınız. Canlı dersler, adım adım eğitim videoları ve kişiye özel programlarla müzik becerilerinizi geliştirin. İster evinizden, ister dünyanın herhangi bir yerinden… Müzik, sizinle anlam kazansın!
        </p>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-container-layout-1"
                    >
                        <div
                            class="u-border-8 u-border-palette-1-light-2 u-line u-line-horizontal u-line-1"
                        ></div>
                        <h4
                            class="u-text u-text-default u-text-palette-1-base u-text-3"
                        >
                            Öğrencilerimiz İçin
                        </h4>
                        <p class="u-text u-text-grey-50 u-text-4">
                            🌟 Neden Binlerce Öğrenci Bizi Tercih Ediyor?

                            "Hiç piyano çalmamıştım, şimdi ilk parçamı çalabiliyorum!"

                            "Gitar dersleriyle hayalimdeki müzik tarzını keşfettim."

                            "Esnek ders saatleri sayesinde iş ve müziği birleştirdim."
                            Siz de başarı hikayemize ortak olun!
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-container-layout-2"
                    >
                        <div
                            class="u-border-8 u-border-palette-1-light-2 u-line u-line-horizontal u-line-2"
                        ></div>
                        <h4
                            class="u-text u-text-default u-text-palette-1-base u-text-5"
                        >
                            Eğitim Programlarımız
                        </h4>
                        <p class="u-text u-text-grey-50 u-text-6">
                            🎸 Her Seviyeye ve Enstrümana Özel Programlar

                            Yeni Başlayanlar İçin: Temel akorlar, nota okuma, ritim çalışmaları.

                            Orta Seviye: Teknik geliştirme, parça çalma, stil analizi.

                            İleri Seviye: Profesyonel performans teknikleri, beste yapımı.
                            Hangi enstrümanı seçerseniz seçin, sizin için bir yol haritası hazırladık!
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-container-layout-3"
                    >
                        <div
                            class="u-border-8 u-border-palette-1-light-2 u-line u-line-horizontal u-line-3"
                        ></div>
                        <h4
                            class="u-text u-text-default u-text-palette-1-base u-text-7"
                        >
                             Müzik ve Teknik
                        </h4>
                        <p class="u-text u-text-grey-50 u-text-8">
                            📚 Müziğin Sırlarını Keşfedin

                            Gitar Teli Nasıl Değiştirilir? Pratik ipuçları.

                            Piyanoda Doğru Duruşun Önemi.

                            Nota Okuma: Başlangıç Rehberi.
                            Blogumuzda müzikle ilgili detaylı makaleler sizi bekliyor!
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div
                        class="u-container-layout u-similar-container u-container-layout-4"
                    >
                        <div
                            class="u-border-8 u-border-palette-1-light-2 u-line u-line-horizontal u-line-4"
                        ></div>
                        <h4
                            class="u-text u-text-default u-text-palette-1-base u-text-9"
                        >
                            Müzik ve Motivasyon

                        </h4>
                        <p class="u-text u-text-grey-50 u-text-10">
                            🧠 Müziğin Zihninize Katkıları

                            Müzik yapmak stresi azaltır, odaklanmayı artırır.

                            Enstrüman çalmak yaratıcı düşünme becerilerini geliştirir.

                            Ritim ve melodi, duygusal dengeyi sağlar.
                            "Müzik ruhun gıdasıdır" sözünü hayata geçirin!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-5" id="carousel_e301">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-palette-1-base u-group-1">
            <div
                class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1"
            >
                @if($WhatWeDo)
                    <h2 class="u-text u-text-default u-text-1">{{$WhatWeDo->title}}</h2>
                    <p class="u-text u-text-default u-text-2">
                        {{$WhatWeDo->content}}
                    </p>
                @endif

                <a
                    href="{{route('services')}}"
                    data-page-id="18164924"
                    class="u-active-white u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-1"
                >Hizmetler
                </a>
            </div>
        </div>
        <div
            alt=""
            class="u-image u-image-circle u-image-1"
            data-image-width="900"
            data-image-height="900"
        ></div>
        <div class="u-palette-1-light-2 u-shape u-shape-circle u-shape-1"></div>
    </div>
</section>
<section
    class="u-clearfix u-palette-1-light-3 u-section-6"
    id="carousel_be55"
>
    <div class="u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
    <img
        class="u-image u-image-default u-image-1"
        src="{{asset('./site2/images/vbvf-min.jpg')}}"
        data-image-width="1620"
        data-image-height="1080"
    />
    <div
        class="data-layout-selected u-clearfix u-gutter-50 u-layout-wrap u-layout-wrap-1"
    >
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-size-37">
                    <div class="u-layout-col">
                        <div
                            class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-60 u-white u-layout-cell-1"
                        >
                            <div class="u-container-layout u-container-layout-1">

                                @if($PerformanceAndActivities)
                                    <h2
                                        class="u-text u-text-default u-text-palette-1-base u-text-1"
                                    >
                                        {{$PerformanceAndActivities->title}}
                                    </h2>
                                    <p class="u-text u-text-default u-text-2">

                                        {{$PerformanceAndActivities->content}}
                                    </p>

                                @endif


                                <a
                                    href="{{route('blog')}}"
                                    data-page-id="202909025"
                                    class="u-border-2 u-border-palette-1-base u-btn u-button-style u-hover-palette-1-base u-none u-text-black u-text-hover-white u-btn-2"
                                >read more</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-size-23">
                    <div class="u-layout-col">
                        <div
                            class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-right-cell u-size-30 u-layout-cell-2"
                        >
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                        <div
                            class="u-container-style u-image u-layout-cell u-right-cell u-size-30 u-image-2"
                            data-image-width="626"
                            data-image-height="417"
                        >
                            <div class="u-container-layout u-container-layout-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-7" id="carousel_c98f">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-container-style u-layout-cell u-size-30 u-layout-cell-1"
                    >
                        <div
                            class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1"
                        >
                            @if($Mission)
                                <h6
                                    class="u-align-justify u-custom-font u-font-montserrat u-text u-text-1"
                                >
                                    {{$Mission->title}}
                                </h6>
                            <p
                                class="u-align-justify u-custom-font u-font-montserrat u-text u-text-2"
                            >
                                {{$Mission->content}}
                            </p>
                            @endif
                            <img
                                class="u-image u-image-default u-image-1"
                                src="{{asset('./site2/images/-min.jpg')}}"
                                alt=""
                                data-image-width="1543"
                                data-image-height="1080"
                            />

                        </div>
                    </div>
                    <div
                        class="u-container-style u-layout-cell u-size-30 u-layout-cell-2"
                    >
                        <div
                            class="u-container-layout u-valign-bottom u-container-layout-2"
                        >
                            <img
                                class="u-image u-image-default u-image-2"
                                src="{{asset('./site2/images/jkjk.jpg')}}"
                                alt=""
                                data-image-width="700"
                                data-image-height="889"
                            />
                            @if($Goals)
                            <h6
                                class="u-align-left u-custom-font u-font-montserrat u-text u-text-4"
                            >
                                {{$Goals->title}}
                            </h6>
                            <p
                                class="u-align-justify u-custom-font u-font-montserrat u-text u-text-5"
                            >
                                {{$Goals->content}}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-8" id="carousel_99bd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div
            class="u-palette-1-light-1 u-shape u-shape-rectangle u-shape-1"
        ></div>
        <div
            class="u-expanded-width-xs u-palette-1-base u-shape u-shape-rectangle u-shape-2"
        ></div>
        <img
            src="{{asset('./site2/images/bnbnbn.jpg')}}"
            class="u-align-left u-image u-image-1"
            data-image-width="1200"
            data-image-height="675"
        />
        <div
            class="u-align-left u-container-align-left u-container-style u-expanded-width-xs u-group u-white u-group-1"
        >
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                @if($Courses)
                <h2 class="u-text u-text-default u-text-palette-1-base u-text-1">
                    {{$Courses->title}}
                </h2>
                <p class="u-text u-text-2">
                    {{$Courses->content}}
                </p>
                @endif
                <p class="u-text u-text-default u-text-3">

                </p>
                <a
                    href="{{route('courses')}}"
                    data-page-id="755524619"
                    class="u-border-2 u-border-palette-1-base u-btn u-button-style u-hover-palette-1-base u-none u-text-black u-text-hover-white u-btn-2"
                >read more</a
                >
            </div>
        </div>
    </div>
</section>
<section
    class="u-clearfix u-palette-1-light-3 u-section-9"
    id="carousel_0db3"
>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div
            class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1"
        >
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-container-style u-layout-cell u-palette-1-base u-shape-rectangle u-size-30 u-layout-cell-1"
                    >
                        <div
                            class="u-container-layout u-valign-middle u-container-layout-1"
                        >
                            <h2 class="u-text u-text-1">
                                Music psychology and conducting pedagogy
                            </h2>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2"
                    >
                        <div
                            class="u-container-layout u-valign-top u-container-layout-2"
                        >
                            <img
                                src="{{asset('./site2/images/44720b5f-d674-4089-b6ec-12c44ea13947.jpg')}}"
                                alt=""
                                class="u-image u-image-default u-image-1"
                                data-image-width="720"
                                data-image-height="1080"
                            />
                            <h4
                                class="u-text u-text-default u-text-palette-1-base u-text-2"
                            >
                                Top Ranked Program
                            </h4>
                            <p class="u-text u-text-3">
                                In mollis nunc sed id semper risus in hendrerit gravida.
                                Aliquet enim tortor at auctor urna nunc id cursus. Risus at
                                ultrices mi tempus imperdiet. Sapien pellentesque habitant
                                morbi tristique senectus et netus. Id cursus metus aliquam
                                eleifend mi in. Quis commodo odio aenean sed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="u-clearfix u-palette-1-base u-section-10"
    id="carousel_2f7e"
>
    <div
        class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1"
    >
        <img
            src="{{asset('./site2/images/wqe-min.jpg')}}"
            alt=""
            class="custom-expanded u-image u-image-default u-image-1"
            data-image-width="800"
            data-image-height="948"
        />
        <div
            class="custom-expanded u-align-center u-container-align-center u-container-style u-group u-white u-group-1"
        >
            <div class="u-container-layout u-container-layout-1">
                @if($Contact)
                    <h2 class="u-text u-text-1">{{$Contact->title}}</h2>
                    <p
                        class="u-large-text u-text u-text-default u-text-variant u-text-2"
                    >
                        {{$Contact->content}}
                    </p>
                @endif
                <a
                    href="{{route('contact')}}"
                    data-page-id="273684015"
                    class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"
                >İletişime geç
                </a>
            </div>
        </div>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div
                    class="u-container-style u-list-item u-palette-1-light-3 u-repeater-item u-list-item-1"
                >
                    <div
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
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
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
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
                        class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
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

            <a class="u-social-url" title="pinterest" target="_blank" href="https://www.linkedin.com/in/semih-g%C3%BCm%C3%BC%C5%9F-185638225/">
            <span class="u-icon u-social-icon u-social-pinterest u-icon-4">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
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
