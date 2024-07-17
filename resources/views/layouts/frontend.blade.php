<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangon Home</title>
    <meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an">
    <meta name="keywords" content="kyaw , fashion , kyaw fashion, KYAW FASHION, Kyaw Fashion ">
    <meta name="robots" content="index, follow">
    <meta name="language" content="EN">
    <link rel="icon" href="{{asset('frontend/images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

</head>
<body>
    <!-- Start Logo -->
    <div class="container-fluid px-3">
        <div class="row pe-lg-5">
            <div class="col-12 col-md-7 col-lg-6">
                <div class="row">
                    <div class="col-3 mb-2 mb-md-2 pt-2 pt-md-2 ">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="" class="logo img-fluid ms-lg-5">
                    </div>
                    <div class="col-9 pt-4 pt-lg-2">
                        <h4 class="text-danger">Yangon Home <span class="d-none d-lg-inline">Real Estate</span></h4>
                        <p class="d-lg-block fst-italic custom-letter-spacing d-none d-lg-block" style="color: #18206f;">Top One Real Estate Service <span class="d-md-inline d-none">in Yangon</span></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6 ps-4 ps-md-0 pe-4 mt-md-5 mb-2 text-md-end">
                 <a href="login.html" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-lock me-2"></i>Login</a>
                |
                <a href="register.html" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-person me-2"></i>Register</a>|
                <a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-telephone me-2"></i> Call</a>
                |
                <a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-envelope me-2"></i> Email</a>
            </div>
        </div>
    </div>
    <!-- End Logo -->

    <!-- Start discover your drem home -->
    <div class="container-fluid bgBlue px-4 px-md-5 py-4">
        <h5 class="text-danger d-md-inline">Discover Your Dream <span class=" d-inline d-none">at Yangon Home</span></h5>
        <span class="text-white fst-italic d-none d-md-inline">In the heart of every person lies the dream of place "Home"!</span>
        <div class="row mt-1 mt-md-2">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mt-2 mt-lg-0">
                    <p class="mb-1 text-white" style="font-size: 13px;">Loctions</p>
                    <select class="form-select text-secondary">
                        <option selected>South Okkalapa</option>
                        <option value="1">North Dagon</option>
                        <option value="2">Bahan</option>
                        <option value="3">Yankin</option>
                    </select>
                </div>
                <div class="col mt-2 mt-lg-0">
                    <p class="mb-1 text-white" style="font-size: 13px;">Types</p>
                    <select class="form-select text-secondary">
                        <option selected>Condominum</option>
                        <option value="1">Industrial None</option>
                        <option value="2">Land</option>
                        <option value="3">Apartment</option>
                    </select>
                </div>
                <div class="col mt-2 mt-lg-0">
                    <p class="mb-1 text-white" style="font-size: 13px;">Services</p>
                    <select class="form-select text-secondary">
                        <option selected>Rent</option>
                        <option value="1">Buy</option>
                        <option value="2">Sell</option>
                        <option value="3">Installmant</option>
                    </select>
                </div>
                <div class="col mt-2 mt-lg-0">
                    <p class="mb-1 text-white" style="font-size: 13px;">Min Price</p>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="500,000">
                        <datalist id="datalistOptions">
                            <option value="Under 100,000">
                            <option value="500,000">
                            <option value="1,000,000">
                            <option value="10,000,000">
                            <option value="100,000,000">
                            <option value="Over 100,000,000"></option>
                        </datalist>
                </div>
                <div class="col mt-2 mt-lg-0">
                    <p class="mb-1 text-white" style="font-size: 13px;">Max Price</p>
                    <input class="form-control" list="datalistOptions" id="exampleDataList1" placeholder="5,000,000">
                        <datalist id="datalistOptions">
                            <option value="1,000,000">
                            <option value="5,000,000">
                            <option value="10,000,000">
                            <option value="100,000,000">
                            <option value="500,000,000">
                            <option value="Over 500,000,000"></option>
                        </datalist>
                  </div>
                <div class="col mt-4 mt-lg-4">
                        <button type="button" class="btn btn-danger w-100 h-100">
                            <i class="fa-solid fa-magnifying-glass-location fa-lg pe-2"></i>
                            <span class="fw-bold">Search</span>
                        </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Find your dream home -->

    <!-- Start nav -->
    <div class="container-fluid px-md-5 bg-danger">
        <div class="navbar navbar-expand-lg navbar-dark px-lg-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link me-4">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="sale.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                For Sale
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="sale.html">Land</a></li>
                                <li><a class="dropdown-item" href="sale.html">Condo</a></li>
                                <li><a class="dropdown-item" href="sale.html">Apartment</a></li>
                                <li><a class="dropdown-item" href="sale.html">Industrial Zone</a></li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="rent.html" class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" type="button">For Rent</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="sale.html">Land</a></li>
                                <li><a class="dropdown-item" href="sale.html">Condo</a></li>
                                <li><a class="dropdown-item" href="sale.html">Apartment</a></li>
                                <li><a class="dropdown-item" href="sale.html">Industrial Zone</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="news.html" class="nav-link me-4">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link me-4">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.html" class="nav-link me-4">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link me-4">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="favourite.html" class="nav-link me-2">Favourite <i class="fa-regular fa-heart fa-1x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav -->

    @yield('content')

    <!-- Start footer -->
    <div class="container-fluid bgBlue px-4 px-md-5 py-4 text-white">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-7 pb-3 pb-md-0">
                        <h6 class="text-danger">Contact Us</h6>
                        <p><i class="fa-solid fa-house"></i><span class="ps-2">No.34, Building 6, Yathawaddy Road, South Okkalapa Township, Yangon, Myanmar.</span></p>
                        <p><i class="fa-solid fa-phone"></i><span class="ps-2">09973791484, 09974904900</span></p>
                        <p><i class="fa-solid fa-envelope"></i><span class="ps-2">miss.eiphyu@gmail.com, service.yhhome@gmail.com</span></p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="row">
                            <h6 class="text-danger">Site Map</h6>
                            <div class="col-12">
                                <a href="index.html" class="text-decoration-none text-white px-2">Home</a> |
                                <a href="sale.html" class="text-decoration-none text-white px-2">Sale</a> |
                                <a href="rent.html" class="text-decoration-none text-white px-2">Rent</a> |
                                <a href="news.html" class="text-decoration-none text-white px-2">News</a> |
                                <a href="about.html" class="text-decoration-none text-white px-2">About</a>
                            </div>
                            <div class="col-12">

                                <a href="faq.html" class="text-decoration-none text-white px-2">FAQ</a> |
                                <a href="contact.html" class="text-decoration-none text-white px-2">Contact</a> |
                                <a href="favourite.html" class="text-decoration-none text-white px-2">Favourite</a> |
                                <a href="login.html" class="text-decoration-none text-white px-2">Login</a> |
                                <a href="register.html" class="text-decoration-none text-white px-2">Register</a>
                            </div>
                        </div>
                        <h6 class="pt-5 pt-lg-4 text-danger">Follow Us</h6>
                        <p><i class="fa-brands fa-square-facebook fa-xl me-3 ps-2"></i><i class="fa-brands fa-facebook-messenger fa-xl me-3"></i><i class="fa-brands fa-square-twitter fa-xl me-3"></i><i class="fa-brands fa-youtube fa-xl me-3"></i><i class="fa-brands fa-tiktok fa-xl me-3"></i></p>

                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="col-12 text-center text-white">
                <span class="text-center d-block d-md-inline" style="font-size: 13px;">Copy right @2023-2024 by Yangon Home Real Estate. All rights reserved. Design & Develped by EI EI. </span>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Start JS -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            // Start Most View Home List Carousel
            $(".customer-logos").slick({
                 slidesToShow: 3,
                 slidesToScroll: 1,
                 autoplay: true,
                 autoplaySpeed: 5000,
                 arrows: false,
                 dots: false,
                 pauseOnHover: false,
                 responsive: [
                 { breakpoint: 576, settings: { slidesToShow: 1 } },
                 { breakpoint: 758, settings: { slidesToShow: 1 } },
                 { breakpoint: 992, settings: { slidesToShow: 2 } },
                 { breakpoint: 1200, settings: { slidesToShow: 3 } },
                 ]
            });
            // End Most View Home List Carousel

            // Start News
            $('#readMore').hide();
            $('#toggle').click(function(){
                $('#readMore').toggle('slow');
            })

            $('#readMore1').hide();
            $('#toggle1').click(function(){
                $('#readMore1').toggle('slow');
            })

            $('#readMore2').hide();
            $('#toggle2').click(function(){
                $('#readMore2').toggle('slow');
            })
            // End News

        });
     </script>
     <!-- End of JS -->
</body>
</html>
