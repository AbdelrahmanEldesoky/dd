<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>الشركة الهندسية</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('front/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        @foreach ($contects as $contect )
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{$contect->address}}</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{$contect->phone}}</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{$contect->email}}</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contect->twitter}}"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contect->facebook}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contect->linkedin}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contect->instagram}}"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{$contect->youtube}}"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('index')}}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>الشركة الهندسية</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('index')}}" class="nav-item nav-link active">الصفحة الرئسية</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">من نحن</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">خدماتنا</a>
                    <a href="{{route('product',1)}}" class="nav-item nav-link">مشاريع</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">صفحات</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('feature')}}" class="dropdown-item">لماذا نحن</a>
                            <a href="{{route('plan',1)}}" class="dropdown-item">خطط العمل</a>
                            <a href="{{route('team')}}" class="dropdown-item">فريق العمل</a>
                            <a href="{{route('comment_get')}}" class="dropdown-item">طلب او شكوى</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">تواصل معنا</a>
                </div>
                <!--butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></!--butaton>
                <a-- href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a-->
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
               @foreach ($indexs as $index )
                <div class="carousel-item active">
                    <img class="w-100" src="{{ $index->image_path }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$index->tittle_small}}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{$index->tittle_larg}}</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{$index->button_l}}</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{$index->button_r}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--div class="carousel-item">
                    <img class="w-100" src="{{-- asset('front/img/carousel-1.jpg')--}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">dddddddddddd & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & dddddddddddddd Digital Solution</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free fffffff</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div-->
            </div>
            <!--button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button-- class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button-->
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    @foreach ($indexs as $index)
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">{{$index->button_1t}}</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$index->button_1r}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">{{$index->button_2t}}</h5>
                            <h1 class="mb-0" data-toggle="counter-up">{{$index->button_2c}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">{{$index->button_3t}}</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$index->button_3l}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">

                    @foreach ($abouts as $about)
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{$about->tittal}}</h5>
                        <h1 class="mb-0">{{$about->description}}</h1>
                    </div>
                    <p class="mb-4">{{$about->service}}</p>

                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{$about->feture1}}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{$about->feture2}}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{$about->feture3}}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{$about->feture4}}</h5>
                        </div>

                    </div>
                    @endforeach


                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        @foreach ($contects as $contect)
                        <div class="ps-4">
                            <h5 class="mb-2">تواصل معنا</h5>
                            <h4 class="text-primary mb-0">{{$contect->phone}}</h4>
                        </div>
                        @endforeach
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">تقديم طلب</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">

                    @foreach ($abouts as $about)
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{$about->image_path}}" style="object-fit: cover;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    @foreach ($our_fetures as $feture)
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{$feture->tittle}}</h5>
                <h1 class="mb-0">{{$feture->description}}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>{{$feture->feture1}}</h4>
                            <p class="mb-0">{{$feture->description1}}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>{{$feture->feture2}}</h4>
                            <p class="mb-0">{{$feture->description2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{$about->image_path}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>{{$feture->feture3}}</h4>
                            <p class="mb-0">{{$feture->description3}}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>{{$feture->feture4}}</h4>
                            <p class="mb-0">{{$feture->description4}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            @foreach ($services as $service)
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{$service->titale}}</h5>
                <h1 class="mb-0">{{$service->description}}</h1>
            </div>
            @endforeach

            <div class="row g-5">
                @foreach ($service_features as $service)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">{{$service->name}}</h4>
                        <p class="m-0">{{$service->description}}</p>
                    </div>
                </div>
                @endforeach

                @foreach ($contects as $contect)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">{{$contect->tittle}}</h3>
                        <p class="text-white mb-3">{{$contect->description}}</p>
                        <h2 class="text-white mb-0">{{$contect->phone}}</h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

            @foreach ($prices as $price)
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{$price->tittle}}</h5>
                <h1 class="mb-0">{{$price->description}}</h1>
            </div>
            @endforeach

            <div class="row g-0">

                @foreach ($prices_Feaure as $index=>$price)
                @if($index!=1)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">{{$price->tittle}}</h4>
                            <small class="text-uppercase">{{$price->description}}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$price->price}}<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure1}}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure2}}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure3}}</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>{{$price->feaur4}}</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">{{$price->tittle}}</h4>
                            <small class="text-uppercase">{{$price->description}}</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$price->price}}<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure1}}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure2}}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>{{$price->feaure3}}</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>{{$price->feaure4}}</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                @foreach ($commentTittle as $comment)
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{$comment->tittle}}</h5>
                        <h1 class="mb-0">{{$comment->description1}}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{$comment->feture1}}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>{{$comment->feture2}}</h5>
                        </div>
                    </div>
                    <p class="mb-4">{{$comment->description2}}</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">نقديم طلب او شكوي</h5>
                            <h4 class="text-primary mb-0">{{$comment->phone}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">

                    <form action="{{-- route('dashboard.comment.store') --}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">تقديم الطلب </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->





    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">فريق العمل</h5>
                <h1 class="mb-0">فريق عمل ممتاز ومدرب بكفاءة عالية</h1>
            </div>
            <div class="row g-5">

                @foreach ($teams as $team)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$team->image_path}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$team->facebook}}"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$team->twitter}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$team->instagram}}"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$team->linkedin}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{$team->name}}</h4>
                            <p class="text-uppercase m-0">{{$team->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            @foreach ($productTittle as $product)
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{$product->tittle}}</h5>
                <h1 class="mb-0">{{$product->description}}</h1>
            </div>
            @endforeach
            <div class="row g-5">
            @foreach ($products as $product)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{$product->path_image}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{$product->user}}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$product->date_at}}</small>
                            </div>
                            <h4 class="mb-3">{{$product->description}}</h4>
                            <p>{{$product->description1}}</p>
                            <a class="text-uppercase" href="">قراءة المذيد <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <!-- Vendor Start -->
    <!--div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div-->
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">

                @foreach ($footers as $footer)
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>{{$footer->tittle}}</h1>
                        </a>
                        <p class="mt-3 mb-4">{{$footer->description}}</p>
                    </div>
                </div>
                @endforeach


                @foreach ($contects as $contect)
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">{{$contect->tittle}}</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">{{$contect->address}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">{{$contect->email}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">{{$contect->phone}}</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="{{$contect->twitter}}"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{$contect->facebook}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="{{$contect->linkedin}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="{{$contect->instagram}}"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">روابط موقعنا</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>الصفحة الرئسية</a>
                                <a class="text-light mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>من نحن</a>
                                <a class="text-light mb-2" href="{{route('service')}}"><i class="bi bi-arrow-right text-primary me-2"></i>خدمتنا</a>
                                <a class="text-light mb-2" href="{{route('product')}}"><i class="bi bi-arrow-right text-primary me-2"></i>مشاريع</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">روابط اخري</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('feature')}}"><i class="bi bi-arrow-right text-primary me-2"></i>لماذا نحن</a>
                                <a class="text-light mb-2" href="{{route('team')}}"><i class="bi bi-arrow-right text-primary me-2"></i>فريق العمل</a>
                                <a class="text-light mb-2" href="{{route('comment_get')}}"><i class="bi bi-arrow-right text-primary me-2"></i>طلبات و شكاوي</a>
                                <a class="text-light mb-2" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>تواصل معنا</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Engineering Company</a>.

						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">Baha Tarda</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('front/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('front/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('front/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front/js/main.js')}}"></script>
</body>

</html>

