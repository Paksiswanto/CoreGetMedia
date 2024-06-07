@extends('layouts.user.app')

@section('style')
    <style>
    .link-one {
        color: #175A95;
    }
    .news-tablist .nav-item .nav-link.active {
        color: #175A95;
    }
    .btn-three {
        color: var(--secondaryColor);
        background-color: #ffffff;
    } 
    .theme-dark.btn-three {
        color: var(--secondaryColor);
        background-color: #ffffff;
    }    
    </style>
@endsection

@section('content')
<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider" />
            <span class="slider round"></span>
        </label>
    </div>

    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index.html" class="logo d-inline-block">
                <img class="logo-light" src="assets/img/logo.webp" alt="logo" />
                <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo" />
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Home</button>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion2">
                                <div class="accordion-item">
                                    <a class="accordion-link active" href="index.html"> Home Demo One </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-2.html"> Home Demo Two </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-3.html"> Home Demo Three </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapbaxour" aria-expanded="false" aria-controls="collapbaxour">Pages</button>
                    <div id="collapbaxour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion45">
                                <div class="accordion-item">
                                    <a class="accordion-link" href="about.html"> About Us </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="contact.html"> Contact Us </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="team.html" class="accordion-link"> Team </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="author.html" class="accordion-link"> Author </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="privacy-policy.html" class="accordion-link"> Privacy Policy </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="terms-conditions.html" class="accordion-link"> Terms & Conditions </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="error-404.html" class="accordion-link"> 404 Error Page </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Business</button>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="business.html" class="accordion-link"> Business News </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="business-details.html" class="accordion-link"> Business News Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Politics</button>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion30">
                                <div class="accordion-item">
                                    <a href="politics.html" class="accordion-link"> Political News </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="politics-details.html" class="accordion-link"> Political News Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Video</button>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion11">
                                <div class="accordion-item">
                                    <a href="featured-video.html" class="accordion-link"> Featured Video </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="featured-video-details.html" class="accordion-link"> Featured Video Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">Sports</button>
                    <div id="collapseFourth" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion111">
                                <div class="accordion-item">
                                    <a href="sports.html" class="accordion-link"> Sports News </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="sports-details.html" class="accordion-link"> Sports News Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Shop</button>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion70">
                                <div class="accordion-item">
                                    <a href="shop-grid.html" class="accordion-link"> Shop Grid </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-left-sidebar.html" class="accordion-link"> Shop Left Sidebar </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-right-sidebar.html" class="accordion-link"> Shop Right Sidebar </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-details.html" class="accordion-link"> Shop Details </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="cart.html" class="accordion-link"> Cart </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="wishlist.html" class="accordion-link"> Wishlist </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="checkout.html" class="accordion-link"> Checkout </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="login.html" class="accordion-link"> Login </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="signup.html" class="accordion-link"> Sign Up </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <h4>Contact Info</h4>
                <ul class="contact-info list-style">
                    <li>
                        <i class="ri-map-pin-fill"></i>
                        <p>28/A Street, New York, USA</p>
                    </li>
                    <li>
                        <i class="ri-mail-fill"></i>
                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9df5f8f1f1f2ddfffce5f2b3fef2f0"><span class="__cf_email__" data-cfemail="fa929f969695ba989b8295d4999597">[email&#160;protected]</span></a>
                    </li>
                    <li>
                        <i class="ri-phone-fill"></i>
                        <a href="tel:1800123456789">+1 800 123 456 789</a>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li>
                        <a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
                    </li>
                </ul>
            </div>
            <div class="others-option d-flex d-lg-none align-items-center">
                <div class="option-item">
                    <a href="login.html" class="btn-two">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <input type="text" class="form-control" placeholder="Search here...." />
                    <button type="submit"><i class="fi fi-rr-search"></i></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="trending-news-box">
            <div class="row gx-5">
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <h4>Trending Now</h4>
                    <div class="trending-prev"><i class="flaticon-left-arrow"></i></div>
                    <div class="trending-next"><i class="flaticon-right-arrow"></i></div>
                </div>
                <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-8">
                    <div class="trending-news-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="assets/img/news/trending-1.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Climate Change & Your Future Health</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="assets/img/news/trending-2.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Female Hawks Win $10,000 Funding Boost</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="assets/img/news/trending-3.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Goodwin Must Break Clarkson Hold</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="assets/img/news/trending-4.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Major GWC Collection Is Coming To QVC</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-75">
        <div class="news-col-wrap">
            <div class="news-col-one">
                <div class="news-card-two">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-1.webp" alt="Image" />
                        <a href="business.html" class="news-cat">Politics</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="business-details.html">What The Federal Infrastructure Package Means For Minnesota</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-3.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Fashion</a>
                        <h3><a href="business-details.html">How To Recreate The High Pony-tail That Celebrities Love</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-4.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Fashion</a>
                        <h3><a href="business-details.html">Tempores Imperdiet Rhoncus Ipsam Lobortis Kolats.</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-5.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Fashion</a>
                        <h3><a href="business-details.html">Beauty Queens Need Beauty Material & Products</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 10, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-col-two">
                <div class="news-card-four">
                    <img src="assets/img/news/news-58.webp" alt="Image" />
                    <div class="news-card-info">
                        <h3><a href="business-details.html">Best VR Headsets For PC And Gaming This Year</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>14 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-five">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-59.webp" alt="Image" />
                        <a href="business.html" class="news-cat">Fashion</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke Light In</a></h3>
                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-five">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-60.webp" alt="Image" />
                        <a href="business.html" class="news-cat">Travel</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="business-details.html">Selective Focus Photography Of Orange Fox Life</a></h3>
                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-col-three">
                <div class="news-card-two">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-2.webp" alt="Image" />
                        <a href="business.html" class="news-cat">Politics</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="business-details.html">Elijah James: The Nashville Photographer Shares Her Unique Journey</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-7.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Travel</a>
                        <h3><a href="business-details.html">A Complimentary Day At Mandarin The Oriental</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 15, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-6.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Business</a>
                        <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch System</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-8.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="business.html" class="news-cat">Health</a>
                        <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 15, 2023</a></li>
                            <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="">
        iklan
    </div> --}}

    <div class="container-fluid pb-75">
        <div>
            <h2 class="section-title">Artikel Terbaru</h2>
            <div class="mb-4 col-1" style="border: 1px solid #E93314; width 200px"></div>
        </div>
        <div class="row gx-45">
            <div class="col-xl-9">
                <div class="news-col-wrap">
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="business.html" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="business.html" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="business.html" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="business.html" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="business.html" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="left-content mt-5 pt-5">
                    <div class="row align-items-end mb-40">
                        <div class="col-md-7">
                            <h2 class="section-title">Artikel Paling Populer</h2>
                        </div>
                        <div class="col-md-5 text-md-end">
                            <a href="business.html" class="link-one">Lihat Semua<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="row gx-45">
                        <div class="col-xl-7">
                            <div class="news-card-four">
                                <img src="assets/img/news/news-31.webp" alt="Image" />
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Kyrgios And Djokovic Agree To Post-match Meal</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-32.webp" alt="Image" />
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-33.webp" alt="Image" />
                                    <a href="business.html" class="news-cat">Fashion</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Selective Focus Photography Of Orange Fox Life</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-34.webp" alt="Image" />
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Beyond Good & Evil 2 Has Been In Development Longer Than Literally Any Game, Ever</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-35.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Travel</a>
                                    <h3><a href="business-details.html">World Trending Best 10 Website Travel Tips For Runners Groups Of</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-36.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Business</a>
                                    <h3><a href="business-details.html">How To Find The Right Template For Your Specific Product</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-37.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Health</a>
                                    <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 16, 2023</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Kategori</h3>
                        <ul class="category-widget list-style">
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori <span>(6)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(3)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(2)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(8)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(6)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(2)</span></a></li>
                            <li><a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(4)</span></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget-two">
                        <div class="contact-widget">
                            <img src="assets/img/contact-bg.svg" alt="Image" class="contact-shape" />
                            <a href="index.html" class="logo">
                                <img class="logo-light" src="assets/img/logo.webp" alt="Image" />
                                <img class="logo-dark" src="assets/img/logo-white.webp" alt="Image" />
                            </a>
                            <p>Mauris mattis auctor cursus. Phasellus iso tellus tellus, imperdiet ut imperdiet eu, noiaculis a sem Donec vehicula luctus nunc in laoreet Aliquam</p>
                            <ul class="social-profile list-style">
                                <li>
                                    <a href="https://www.fb.com/" target="_blank"><i class="flaticon-facebook-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram-2"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Popular Tags</h3>
                        <ul class="tag-list list-style">
                            <li><a href="news-by-tags.html">BUSINESS</a></li>
                            <li><a href="news-by-tags.html">FOOD</a></li>
                            <li><a href="news-by-tags.html">SCIENCE</a></li>
                            <li><a href="news-by-tags.html">LIFESTYLE</a></li>
                            <li><a href="news-by-tags.html">SPORTS</a></li>
                            <li><a href="news-by-tags.html">PHOTO</a></li>
                            <li><a href="news-by-tags.html">TECHNOLOGY</a></li>
                            <li><a href="news-by-tags.html">CONTENT</a></li>
                            <li><a href="news-by-tags.html">FEATURED</a></li>
                            <li><a href="news-by-tags.html">AUDIO</a></li>
                            <li><a href="news-by-tags.html">FASHION</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <div class="bg_gray editor-news pt-100 pb-75">
        <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <div class="editor-box">
                        <div class="row align-items-end mb-40">
                            <div class="col-xl-6 col-md-6">
                                <h2 class="section-title">Pilihan Editor<img class="section-title-img" src="assets/img/section-img.webp" alt="Image" /></h2>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <ul class="nav nav-tabs news-tablist d-flex justify-content-end" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Poilitics</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Sports</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">Business</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content editor-news-content">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-38.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">How Maps Reshape American Politics In World</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-39.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Will Humans be able to live in Mars in the future?</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-40.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Here’s the proof momentum strategy work</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-41.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">The Promise And Potential Of Synthetic Assets</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-42.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-5.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Joe Gibbs discusses Ty Gibbs incident at Martinsville</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-43.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">The Heart of a Champion: Mental Toughness in Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-44.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Breaking Barriers: Inspiring Stories in Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-45.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Unleashing Your Inner Athlete: The Power of Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>14 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_3" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-46.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Navigating the Entrepreneurial Journey: Tips for Success</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-47.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Revolutionizing Business: The Power of Innovation</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-48.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">From Start-Up to Scale-Up: Growing Your Business</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-49.webp" alt="Image" />
                                                <a href="business.html" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="business-details.html">Building a Thriving Business: Strategies for Success</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 05, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="business.html" class="btn-three d-block w-100 mt-20">More Posts<i class="flaticon-arrow-right"></i></a>

            </div>
        </div>
    </div>




    <div class="container-fluid pb-50">
        <div class="instagram-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-1.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-2.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-3.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-4.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-5.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="instagram-slide" href="https://www.instagram.com/" target="_blank">
                        <img src="assets/img/instagram/insta-6.webp" alt="Image" />
                        <span>@Baxo on Instagram<i class="flaticon-right-arrow-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="footer-wrap">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright-text">© <span>Baxo</span> is proudly owned by <a href="https://hibootstrap.com/">HiBootstrap</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="social-profile list-style">
                        <li>
                            <a href="https://www.fb.com/" target="_blank"><i class="flaticon-facebook-1"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter-1"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram-2"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="footer-right">
                        <button class="subscribe-btn" data-bs-toggle="modal" data-bs-target="#newsletter-popup">Become a subscriber<i class="flaticon-right-arrow"></i></button>
                        <p>Get all the latest posts delivered straight to your inbox.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>

    <div class="modal fade" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-rr-cross"></i>
                </button>
                <div class="modal-body">
                    <div class="newsletter-bg bg-f"></div>
                    <div class="newsletter-content">
                        <img src="assets/img/newsletter-icon.webp" alt="Image" class="newsletter-icon" />
                        <h2>Join Our Newsletter & Read The New Posts First</h2>
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Email Address" />
                            <button type="button" class="btn-one">Subscribe<i class="flaticon-arrow-right"></i></button>
                        </form>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_21" />
                            <label class="form-check-label" for="test_21"> I've read and accept <a href="privacy-policy.html">Privacy Policy</a> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quickview-modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickview-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <div class="video-popup">
                        <iframe
                            width="885"
                            height="498"
                            src="https://www.youtube.com/embed/3FjT7etqxt8"
                            title="How to Design an Elvis Movie Poster in Photoshop"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection