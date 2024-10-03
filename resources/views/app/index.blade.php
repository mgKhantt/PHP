<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FDC14 Frontend Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/storage/app/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/app/vendors/fontawesome6/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/app/style.css') }}">
</head>

<body id="myPage">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div id="header" class="text-center">
        <h1>COMPANY</h1>
        <p>We specialized in bla bla bla</p>
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Subscribe Email">
                <button class="input-group-text">Subscribe</button>
            </div>
        </form>
    </div>

    <!-- about -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2>About Company Page</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <button class="btn btn-orange">Get In Touch</button>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-signal icon-lg"></i>
            </div>
        </div>
    </div>
    <div id="about" class="container-fluid bg-gray">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-globe icon-lg slideObject"></i>
            </div>
            <div class="col-md-8">
                <h2>OUR VALUES</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
        </div>
    </div>

    <!-- our services -->
    <div id="services" class="text-center container-fluid">
        <h2>Our Services</h2>
        <h4>What we offer</h4>
        <div class="row slideObject">
            <div class="col-md-4">
                <i class="fa-solid fa-power-off icon-sm"></i>
                <h4>POWER</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-heart icon-sm"></i>
                <h4>LOVE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-lock icon-sm"></i>
                <h4>JOB DONE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
        <div class="row slideObject">
            <div class="col-md-4">
                <i class="fa-solid fa-leaf icon-sm"></i>
                <h4>GREEN</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-certificate icon-sm"></i>
                <h4>CERTIFIED</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-wrench icon-sm"></i>
                <h4>HARD WORK</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>

    </div>

    <!-- portfolio -->
    <div id="portfolio" class="text-center container-fluid bg-gray">
        <h2>Portfolio</h2>
        <h4>What we have created</h4>
        <div class="row slideObject d-flex align-items-end justify-content-center">
            @foreach ($portfolios as $portfolio)
            <div class="col-md-4">
                <img src="{{ asset('/storage/' . $portfolio->image) }}" class="mb-3 img-thumbnail">
                <p>{{$portfolio->title}}</p>
                <p>{{$portfolio->description}}.</p>
            </div>
            @endforeach
            <!-- <div class="col-md-4">
                <img src="{{ asset('/storage/app/images/paris.jpg') }}" alt="paris" class="mb-3 img-thumbnail">
                <p>Paris</p>
                <p>We created Paris.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/storage/app/images/newyork.jpg') }}" alt="newyork" class="mb-3 img-thumbnail">
                <p>New York</p>
                <p>We created New York.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/storage/app/images/sanfran.jpg') }}" alt="sanfran" class="mb-3 img-thumbnail">
                <p>Sanfrancisco</p>
                <p>We created Sanfrancisco.</p>
            </div> -->
        </div>

        <h2>What our customer say</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4>"Could I... BE any more happy with this company?" Chandler Bing, Actor, FriendsAlot</h4>
                        </div>
                        <div class="carousel-item">
                            <h4>"This company is the best. I am so happy with the result!" Michael Roe, Vice President, Comment Box</h4>
                        </div>
                        <div class="carousel-item">
                            <h4>"One word... WOW!!" John Doe, Salesman, Rep Inc</h4>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- pricing -->
    <div id="pricing" class="text-center container-fluid">
        <h2>Pricing</h2>
        <div class="row slideObject">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p>20 Lorem</p>
                        <p>15 Lorem</p>
                        <p>10 Lorem</p>
                        <p>5 Lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                        <p>20 Lorem</p>
                        <p>15 Lorem</p>
                        <p>10 Lorem</p>
                        <p>5 Lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">
                        <p>20 Lorem</p>
                        <p>15 Lorem</p>
                        <p>10 Lorem</p>
                        <p>5 Lorem</p>
                        <p>Endless Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$30</h3>
                        <h4>Per Month</h4>
                        <button class="btn btn-lg btn-orange mb-3">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div id="contact" class="container-fluid bg-gray">
        <h2 class="text-center">Contact</h2>
        <div class="row">
            <div class="col-md-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Chicago, US</p>
                <p><i class="fas fa-phone"></i>&nbsp;&nbsp;+00 1515151515</p>
                <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;mymail@gmail.com</p>
            </div>
            <div class="col-md-7 slideObject">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <textarea class="form-control" style="height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-orange">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- location map -->
    <img src="{{ asset('/storage/app/images/map.jpg') }}" alt="map" width="100%" height="600px">

    <!-- footer -->
    <div id="footer" class="container-fluid text-center bg-gray">
        <a href="#myPage">
            <i class="fas fa-angle-up"></i>
        </a>
        <p>
            Developed By
            <a href="https://www.strongforcetech.com" target="_blank">
                STRONGFORCE TECHNOLOGY
            </a>
        </p>
    </div>

    <script src="{{ asset('/storage/app/vendors/bootstrap/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('/storage/app/vendors/jquery/jquery-3.7.1.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('.nav-item').click((event) => {
                $('.nav-item a').removeClass('active');
                const element = $(event.currentTarget).children().eq(0);
                element.addClass('active');
            });

            $(window).scroll(() => {
                // winTop > (objectTop - 200)   
                const winTop = $(window).scrollTop(); //1900
                // console.log(winTop);

                const slideObjects = $('.slideObject');

                slideObjects.each((index, slideObject) => {
                    const slideObjectTop = $(slideObject).offset().top; // 2400
                    // console.log(slideObject,slideObjectTop)

                    //debugging code
                    console.log('object', index);
                    console.log("wintop", winTop);
                    console.log('slideObject Top - 600', slideObjectTop - 600);
                    console.log(winTop > slideObjectTop - 600)
                    console.log('------------------------');
                    //end

                    if (winTop > slideObjectTop - 600) { // 1800
                        $(slideObject).addClass('slide');
                    }

                });
            });
        });
    </script>
</body>

</html>