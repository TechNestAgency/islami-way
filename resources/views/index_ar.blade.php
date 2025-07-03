<!DOCTYPE html>
<html lang="ar" class="light-style layout-navbar-fixed layout-wide" dir="rtl" data-theme="theme-default" data-assets-path="{{asset('assets') }}" data-template="front-pages-no-customizer">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>أكاديمية بلال بن رباح</title>
    <meta name="description" content="أكاديمية القرآن الكريم عبر الإنترنت" />
    <meta name="keywords" content="أكاديمية القرآن الكريم عبر الإنترنت">
    <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}" />
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-landing.css')}}" />
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('assets/js/front-config.js')}}"></script>
    <style>
        body {
            font-family: 'Cairo', sans-serif !important;
        }
        * {
            font-family: 'Cairo', sans-serif !important;
        }
        .landing-live-sessions video {
            display: block;
            margin: 0 auto;
            max-width: 400px;
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<script src="{{asset('assets/vendor/js/dropdown-hover.js')}}"></script>
<script src="{{asset('assets/vendor/js/mega-dropdown.js')}}"></script>
<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 me-4">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تبديل القائمة">
                    <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="{{url('/ar')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('logo.png')}}" style="width:30px">
              </span>
                    <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">بلال بن رباح</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تبديل القائمة">
                    <i class="tf-icons bx bx-x bx-sm"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link fw-medium" aria-current="page" href="#landingHero">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#landingFeatures">المميزات</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#FeedBack">آراء العملاء</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#landingFAQ">الأسئلة الشائعة</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#landingCourses">الدورات</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#landingContact">التسجيل</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#landingPricing">الأسعار</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#OurStudents">طلابنا</a></li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- navbar button: Start -->
                <li>
                    <a href="#landingContact" class="btn btn-primary"><span class="tf-icons bx bx-user me-md-1"></span><span class="d-none d-md-block">سجل الآن</span></a>
                </li>
                <!-- Language Switcher -->
                <li class="nav-item dropdown ms-2">
                    <a class="nav-link dropdown-toggle" href="#" id="langSwitcher" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        العربية
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="langSwitcher">
                        <li><a class="dropdown-item" href="/en">English</a></li>
                    </ul>
                </li>
                <!-- navbar button: End -->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
<!-- Navbar: End -->

<!-- Sections:Start -->
<div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="landingHero" class="section-py landing-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-text-content text-center text-lg-start">
                        <span class="badge bg-label-primary mb-3">أكاديمية بلال بن رباح</span>
                        <h1 class="display-3 fw-bold mb-4">
                            أتقن القرآن الكريم واللغة العربية
                        </h1>
                        <p class="lead mb-5">
                            ابدأ رحلة تحويلية مع دوراتنا بقيادة خبراء. تعلم مخصص وجداول مرنة ومجتمع داعم ينتظرك.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                            <a href="#landingContact" class="btn btn-primary btn-lg">سجل الآن للحصول على تجربة مجانية</a>
                            <a href="#landingCourses" class="btn btn-outline-secondary btn-lg">استكشف دوراتنا</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-container mt-5 mt-lg-0">
                        <img src="{{asset('quran.jpg')}}" alt="تعلم القرآن" class="hero-image" />
                        <div class="hero-image-overlay"></div>
                        <div class="hero-image-decoration hero-image-decoration-1"></div>
                        <div class="hero-image-decoration hero-image-decoration-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero: End -->

    <style>
    .landing-hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #f5f7fa 0%, #eef2f5 100%);
        position: relative;
        overflow: hidden;
    }

    .landing-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(var(--bs-primary-rgb), 0.05) 0%, rgba(var(--bs-primary-rgb), 0) 70%);
        animation: rotateBackground 20s linear infinite;
        z-index: 0;
    }

    @keyframes rotateBackground {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .hero-text-content {
        animation: slideInFromLeft 1s ease-out;
        position: relative;
        z-index: 1;
    }

    @keyframes slideInFromLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .hero-image-container {
        position: relative;
        animation: slideInFromRight 1s ease-out;
        z-index: 1;
    }

    @keyframes slideInFromRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .hero-image {
        width: 100%;
        border-radius: 1rem;
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
        position: relative;
        z-index: 2;
    }

    .hero-image-overlay {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(var(--bs-primary-rgb), 0.1), transparent);
        border-radius: 1rem;
        z-index: 3;
        pointer-events: none;
    }

    .hero-image-decoration {
        position: absolute;
        border-radius: 1rem;
        z-index: 1;
        transition: all 0.5s ease-out;
    }

    .hero-image-container:hover .hero-image-decoration-1 {
        transform: rotate(-8deg) scale(1.05);
    }

    .hero-image-container:hover .hero-image-decoration-2 {
        transform: rotate(6deg) scale(1.05);
    }

    .hero-image-decoration-1 {
        width: 100%;
        height: 100%;
        top: -1rem;
        left: -1rem;
        background: linear-gradient(135deg, var(--bs-warning), var(--bs-danger));
        transform: rotate(-5deg);
        opacity: 0.8;
    }

    .hero-image-decoration-2 {
        width: 100%;
        height: 100%;
        bottom: -1rem;
        right: -1rem;
        background: linear-gradient(135deg, var(--bs-info), var(--bs-success));
        transform: rotate(3deg);
    }

    .btn-primary {
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(var(--bs-primary-rgb), 0.3);
    }

    .btn-outline-secondary:hover {
        transform: translateY(-3px);
    }

    .islamic-bg {
        background-color: #f8f9fa;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d4d4d8' fill-opacity='0.2'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    </style>

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">المميزات المفيدة</span>
            </div>
            <h3 class="text-center mb-1">
                <span class="section-title">كل ما تحتاجه</span> لتبدأ معنا
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                نضمن لك المميزات التالية.
            </p>
            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('arabic.png')}}" alt="شحن الكمبيوتر المحمول" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">معلمون متعددو اللغات</h5>
                    <p class="features-icon-description">
                        معلمون محترفون يتحدثون العربية والإنجليزية والأردية لضمان التعلم الفعال في أكاديمية القرآن عبر الإنترنت.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('family.png')}}" alt="الانتقال لأعلى" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">دورات للأطفال والكبار</h5>
                    <p class="features-icon-description">
                        دوراتنا تقدم برامج مصممة للأطفال والكبار مع معلمين ذوي خبرة يمكنهم تعليم الأطفال والكبار.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('free-trial.png')}}" alt="تحرير" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">دروس تجريبية مجانية</h5>
                    <p class="features-icon-description">
                        قبل البدء معنا، استمتع بدرس تجريبي مجاني للقاء المعلم وتجربة عملية التدريس لدينا.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('responsive.png')}}" alt="اختيار ثلاثي الأبعاد" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">في أي مكان، على أي جهاز</h5>
                    <p class="features-icon-description">
                        جرب التعلم السهل عبر الإنترنت من أي جهاز، بوتيرتك الخاصة وجدولك الزمني، كل ذلك من راحة منزلك.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('working-hours.png')}}" alt="طوق النجاة" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">جدول مرن على مدار الساعة</h5>
                    <p class="features-icon-description">استمتع بجدول مرن على مدار الساعة، مما يتيح لك التعلم في أي وقت يناسبك، صمم جدولك الخاص.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('couple.png')}}" alt="مستندات جوجل" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">معلمون ومعلمات</h5>
                    <p class="features-icon-description">معلمون ومعلمات ذوو خبرة في القرآن الكريم في أكاديميتنا، يقدمون خيارات للإخوة والأخوات الذين يفضلون التعلم من معلمين من نفس الجنس.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful features: End -->

    <!-- Real customers reviews: Start -->
    <section id="FeedBack" class="section-py landing-reviews pb-0 islamic-bg">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="row align-items-center gx-0 gy-4 g-lg-5">
                <div class="col-md-6 col-lg-5 col-xl-3">
                    <div class="mb-3 pb-1">
                        <span class="badge bg-label-primary">آراء العملاء الحقيقيين</span>
                    </div>
                    <h3 class="mb-1"><span class="section-title">ماذا يقول الناس</span></h3>
                    <p class="mb-3 mb-md-5">
                        شاهد ما يقوله عملاؤنا<br class="d-none d-xl-block" />
                        عن تجربتهم.
                    </p>
                    <div class="landing-reviews-btns d-flex align-items-center gap-3">
                        <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                            <i class="bx bx-chevron-left bx-sm"></i>
                        </button>
                        <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                            <i class="bx bx-chevron-right bx-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-9">
                    <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                        <div class="swiper" id="swiper-reviews">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "لقد جربت منصات مختلفة عبر الإنترنت لتعلم القرآن والعربية، لكن لا شيء يقارن بالتجربة التي حظيت بها في هذه الأكاديمية. المنهج منظم جيداً والمعلمون مؤهلون تأهيلاً عالياً."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('3.png')}}" alt="الصورة الرمزية" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">محمد خان</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "ابنتي تحضر دروساً في هذه الأكاديمية وجودة التعليم تثير إعجابي باستمرار. المعلمون ليسوا فقط على دراية ولكنهم يهتمون حقاً بالتقدم. ثقتها في تلاوة القرآن وفهم الإسلام ارتفعت."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('5.png')}}" alt="الصورة الرمزية" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">عائشة محمود</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "كنت متردداً بشأن الدراسات العربية والإسلامية. لكن هذه الأكاديمية فاجأتني ببيئتها الداعمة والتدريس الفعال. المفاهيم المعقدة تصبح واضحة، وقد حققت تقدماً ملحوظاً بسرعة. ممتن لهذه الرحلة الروحية."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('4.png')}}" alt="الصورة الرمزية" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">عبد الله باتيل</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "كنت متردداً بشأن الدراسات العربية والإسلامية. لكن هذه الأكاديمية فاجأتني ببيئتها الداعمة والتدريس الفعال. المفاهيم المعقدة تصبح واضحة، وقد حققت تقدماً ملحوظاً بسرعة. ممتن لهذه الرحلة الروحية."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('4.png')}}" alt="الصورة الرمزية" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">عبد الله باتيل</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What people say slider: End -->
    </section>
    <!-- Real customers reviews: End -->

    <!-- Courses -->
    <section id="landingCourses" class="section-py landing-fun-facts islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">الدورات</span>
            </div>
            <h3 class="text-center mb-1">
                <span class="section-title">دوراتنا</span>
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                هذه الدورات نقدمها للكبار والأطفال
            </p>
            <div class="row gy-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-primary shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('6.png')}}" alt="الكمبيوتر المحمول" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">القرآن</h5>
                            <p class="fw-medium mb-0">
                                يمكنك تعلم كيفية حفظ القرآن الكريم وتصبح حافظاً للقرآن.
                            </p><br>
                            <a href="#" class="btn btn-primary">سجل الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-success shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('7.png')}}" alt="الكمبيوتر المحمول" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">الفقه</h5>
                            <p class="fw-medium mb-0">
                                الفقه يوفر إرشادات واضحة حول كيفية عيش حياة جيدة وهادفة وفقاً لتعاليم الإسلام.
                            </p><br>
                            <a href="#" class="btn btn-primary">سجل الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-info shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('8.png')}}" alt="الكمبيوتر المحمول" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">العقيدة</h5>
                            <p class="fw-medium mb-0">
                                تعلم العقيدة الإسلامية الصحيحة إلزامي لحياتنا وتحديد مصيرنا في الآخرة.
                            </p><br>
                            <a href="#" class="btn btn-primary">سجل الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-warning shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('9.png')}}" alt="الكمبيوتر المحمول" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">العربية</h5>
                            <p class="fw-medium mb-0">
                                معرفة العربية تفتح الباب أمام موارد واسعة من المعرفة الإسلامية. يمكنك البدء في تعلمها معنا الآن.
                            </p><br>
                            <a href="#" class="btn btn-primary">سجل الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses -->

    <!-- Live Sessions: Start -->
    <section id="liveSessions" class="section-py landing-live-sessions islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">الجلسات المباشرة</span>
            </div>
            <h3 class="text-center mb-1">
                <span class="section-title">جلسات مباشرة مع المعلمين</span>
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                شاهد بعض الجلسات المباشرة المسجلة مع معلمينا.
            </p>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3">جلسة مباشرة 1</h5>
                                                    <video controls style="width: 100%; max-width: 400px; height: auto; border-radius: 10px;">
                            <source src="/vid1.mp4" type="video/mp4">
                            متصفحك لا يدعم تشغيل الفيديو.
                        </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3">جلسة مباشرة 2</h5>
                                                    <video controls style="width: 100%; max-width: 400px; height: auto; border-radius: 10px;">
                            <source src="/vid2.mp4" type="video/mp4">
                            متصفحك لا يدعم تشغيل الفيديو.
                        </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Live Sessions: End -->

    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py landing-pricing islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">خطط الأسعار</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">الباقات</span></h3>
            <div class="row gy-4 pt-lg-3">
                <!-- Basic Plan: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة الأولى</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$7.00</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        30 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        3 أيام/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Plan: End -->
                <!-- Basic Plan: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة الثانية</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$7.00</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        30 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        4 أيام/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Plan: End -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة الثالثة</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$8.75</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        30 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        5 أيام/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة الرابعة</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$7.00</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        60 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        2 يوم/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة الخامسة</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$10.50</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        60 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        3 أيام/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="أيقونة الطائرة الورقية" class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">الباقة السادسة</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$14.00</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/أسبوع</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        درس تجريبي مجاني
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        60 دقيقة/درس
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i class="bx bx-check bx-xs"></i></span>
                                        4 أيام/أسبوع
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing plans: End -->

    <!-- Fun facts: Start -->
    <section id="landingFunFacts" class="section-py landing-fun-facts islamic-bg">
        <div class="container">
            <div class="row gy-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-primary shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/laptop.png" alt="الكمبيوتر المحمول" class="mb-2" />
                            <h5 class="h2 mb-1">50000+</h5>
                            <p class="fw-medium mb-0">
                                 ساعة<br />
                                تم إجراؤها عبر الإنترنت
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-success shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/user-success.png" alt="الكمبيوتر المحمول" class="mb-2" />
                            <h5 class="h2 mb-1">1000+</h5>
                            <p class="fw-medium mb-0">
                                طالب<br />
                                حول العالم
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-info shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/diamond-info.png" alt="الكمبيوتر المحمول" class="mb-2" />
                            <h5 class="h2 mb-1">+500</h5>
                            <p class="fw-medium mb-0">
                                طالب<br />
                                أعطوا تقييماً إيجابياً
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-warning shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/check-warning.png" alt="الكمبيوتر المحمول" class="mb-2" />
                            <h5 class="h2 mb-1">100%</h5>
                            <p class="fw-medium mb-0">
                                مرونة<br />
                                في الوقت
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->

    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py landing-faq islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">الأسئلة الشائعة</span>
            </div>
            <h3 class="text-center mb-1">الأسئلة <span class="section-title">المتكررة</span></h3>
            <p class="text-center mb-5 pb-3">تصفح هذه الأسئلة الشائعة للعثور على إجابات للأسئلة المطروحة بشكل متكرر.</p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{asset('man.png')}}" alt="صبي الأسئلة الشائعة مع الشعارات" class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-header-primary" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    ما هي الدورات التي تقدمونها لتعلم القرآن؟
                                </button>
                            </h2>
                            <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نقدم مجموعة متنوعة من الدورات تشمل قراءة القرآن والتجويد (قواعد النطق) وحفظ القرآن (الحفظ) وترجمة القرآن مع التفسير لتلبية مستويات وأهداف تعليمية مختلفة.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    كيف يتم إجراء الدروس؟
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    يتم إجراء دروسنا مباشرة عبر جلسات فردية مع معلمين مؤهلين. نستخدم أدوات مؤتمرات الفيديو والسبورات التفاعلية لضمان تجربة تعليمية مخصصة وجذابة.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                    هل يمكنني اختيار جدول دروسي؟
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نعم، نقدم خيارات جدولة مرنة. يمكنك اختيار الأيام والأوقات التي تناسب توفرك، وإعادة الجدولة ممكنة مع إشعار مسبق.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                    هل تقدمون دروساً تجريبية؟
                                </button>
                            </h2>
                            <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نعم، نقدم درساً تجريبياً مجانياً لمساعدتك في تجربة طرق التدريس لدينا والبت في ما إذا كان برنامجنا يلبي توقعاتك قبل الالتزام بدورة كاملة.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                    ما هي خيارات الدفع؟
                                </button>
                            </h2>
                            <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نقبل المدفوعات من خلال طرق مختلفة، بما في ذلك بطاقات الائتمان/الخصم وباي بال والتحويلات المصرفية. يمكنك اختيار الدفع شهرياً أو ربع سنوياً أو سنوياً بناءً على الخطة التي تختارها.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ: End -->

    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py landing-contact islamic-bg">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">سجل الآن</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">دعنا ندرس</span> معاً</h3>
            <p class="text-center mb-4 mb-lg-5 pb-md-3">املأ النموذج وسنتواصل معك قريباً.</p>
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-img-box position-relative border p-2 h-100">
                        <img src="{{asset('enroll.jpg')}}" alt="خدمة العملاء" class="contact-img w-100 scaleX-n1-rtl img-fluid" />
                        <div class="pt-3 px-4 pb-1">
                            <div class="row gy-3 gx-md-4">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="bx bx-envelope bx-sm"></i></div>
                                        <div>
                                            <p class="mb-0">البريد الإلكتروني</p>
                                            <h5 class="mb-0">
                                                <a href="mailto:elmajd1000@gmail.com" class="text-heading">emadelwan055@gmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-success rounded p-2 me-2">
                                            <i class="bx bx-phone-call bx-sm"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">الهاتف</p>
                                            <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+201012935526</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-1">سجل الآن</h4>
                            <p class="mb-4">
                                املأ النموذج أدناه وسنتواصل معك قريباً.
                            </p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">الاسم الكامل</label>
                                        <input type="text" class="form-control" name="name" required id="contact-form-fullname" placeholder="محمد" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-email">البريد الإلكتروني</label>
                                        <input type="text" id="contact-form-email" class="form-control" placeholder="mohamed@gmail.com" required name="email" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">الهاتف</label>
                                        <input type="text" class="form-control" required name="phone" id="contact-form-fullname" placeholder="+201554134201" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">عمر الطالب</label>
                                        <input type="number" class="form-control" required name="student_age" id="contact-form-fullname" placeholder="أحمد" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">جنس الطالب</label>
                                        <select type="number" class="form-control" required name="student_gender" id="contact-form-fullname">
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">جنس المعلم</label>
                                        <select type="number" class="form-control" required name="teacher_gender" id="contact-form-fullname">
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">عنوان الدورة</label>
                                        <select type="number" class="form-control" required name="course" id="contact-form-fullname">
                                            <option value="Quran with tajweed">القرآن مع التجويد</option>
                                            <option value="Arabic">العربية</option>
                                            <option value="Islamic studies">الدراسات الإسلامية</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">الباقة المطلوبة</label>
                                        <select type="number" class="form-control" required name="package" id="contact-form-fullname">
                                            <option value="package1">الباقة الأولى</option>
                                            <option value="package2">الباقة الثانية</option>
                                            <option value="package3">الباقة الثالثة</option>
                                            <option value="package1">الباقة الرابعة</option>
                                            <option value="package2">الباقة الخامسة</option>
                                            <option value="package3">الباقة السادسة</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">اليوم المفضل</label>
                                        <input type="text" class="form-control" required name="days" id="contact-form-fullname" placeholder="الأحد، الاثنين، ..." />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="contact-form-message">الرسالة</label>
                                        <textarea id="contact-form-message" class="form-control" rows="9" name="message" placeholder="أرسل لنا المزيد من التفاصيل إذا كنت تحتاج"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">سجل الآن</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('form').on('submit', function(event) {
                    event.preventDefault();
                    var formData = $(this).serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/enrolls',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                          if(response.status === 'success'){
                              console.log('done');
                              Swal.fire(
                                  'تم!',
                                  'سنتواصل معك قريباً',
                                  'success'
                              )
                          }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                });
            });
        </script>
    </section>
    <!-- Contact Us: End -->
</div>

<script>
    $('#videoModal1').on('hide.bs.modal', function (e) {
        var video = $("video")[0];
        video.pause();
    });
</script>

<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
    <div class="footer-top">
        <div class="container">
            <div class="row gx-0 gy-4 g-md-5">
                <div class="col-lg-5">
                    <a href="#landingHero" class="app-brand-link mb-4">
                <span class="app-brand-logo demo">
                    <img src="{{asset('logo.png')}}" width="50px">
                </span>
                        <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">بلال بن رباح</span>
                    </a>
                    <p class="footer-text footer-logo-description mb-4">
                        تأسست منذ 6 سنوات، ولديها العديد من الطلاب من جميع أنحاء العالم.
                    </p>
                    <a class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top" href="#Enroll">سجل الآن</a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">الصفحات</h6>
                    <ul class="list-unstyled mb-md-0">
                        <li class="mb-3">
                            <a href="#landingHero" class="footer-link">الرئيسية</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingPricing" class="footer-link">الأسعار</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingContact" class="footer-link">التسجيل</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingFAQ" class="footer-link">الأسئلة الشائعة</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">المزيد من الصفحات</h6>
                    <ul class="list-unstyled mb-md-0">
                        <li class="mb-3">
                            <a href="#FeedBack" class="footer-link">آراء العملاء</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingCourses" class="footer-link">الدورات</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingFeatures" class="footer-link">المميزات</a>
                        </li>
                        <li class="mb-3">
                            <a href="#OurStudents" class="footer-link">طلابنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-3">
        <div class="container d-flex flex-wrap justify-content-center flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
            <span class="footer-text">©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
                <a href="https://www.facebook.com/profile.php?id=61571489512337" target="_blank" class="fw-medium text-white footer-link">تم إنشاؤه بواسطة Tech-Nest Agency</a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer: End -->

<!-- Core JS -->
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/front-main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/front-page-landing.js')}}"></script>
</body>
</html> 