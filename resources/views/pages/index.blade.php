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
    .btn-three {
        color: #175A95;
    }
    .theme-dark .btn-three {
        background-color: #222222;
        color: #ffffff;
    }
    .btn-three i{
        color: #175A95;
    }

    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="mt-3">
        @php
            use Carbon\Carbon;
            Carbon::setLocale('id');
            $today = Carbon::now()->isoFormat('dddd, D MMMM YYYY');
        @endphp
        <p>{{ $today }}</p>
        </div>
        {{-- <p>Senin, 10 Juni 2024</p> --}}
        <div class="trending-news-box">
            <div class="row gx-5">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 d-flex justify-content-center">
                    <div class="trending-prev me-3"><i class="flaticon-left-arrow"></i></div>
                    <h4>Artikel Popular</h4>
                    <div class="trending-next ms-3"><i class="flaticon-right-arrow"></i></div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="trending-news-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="{{asset('assets/img/news/trending-1.webp')}}" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Climate Change & Your Future Health</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="{{asset('assets/img/news/trending-2.webp')}}" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Female Hawks Win $10,000 Funding Boost</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="{{asset('assets/img/news/trending-3.webp')}}" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Goodwin Must Break Clarkson Hold</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-eye"></i>8x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide news-card-one">
                                <div class="news-card-img">
                                    <img src="assets/img/news/trending-4.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Major GWC Collection Is Coming To QVC</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-eye"></i>12x dilihat</li>
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
                        <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">What The Federal Infrastructure Package Means For Minnesota</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Fashion</a>
                        <h3><a href="{{route('singlepost.news')}}">How To Recreate The High Pony-tail That Celebrities Love</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>11x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="{{asset('assets/img/news/news-4.webp')}}" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Fashion</a>
                        <h3><a href="{{route('singlepost.news')}}">Tempores Imperdiet Rhoncus Ipsam Lobortis Kolats.</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="{{asset('assets/img/news/news-5.webp')}}" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Fashion</a>
                        <h3><a href="{{route('singlepost.news')}}">Beauty Queens Need Beauty Material & Products</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 10, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>8x dilihat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-col-two">
                <div class="news-card-four">
                    <img src="assets/img/news/news-58.webp" alt="Image" />
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Best VR Headsets For PC And Gaming This Year</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-five">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-59.webp" alt="Image" />
                        <a href="{{route('news.category')}}" class="news-cat">Fashion</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Man Wearing Black Pullover Hoodie To Smoke Light In</a></h3>
                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-five">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-60.webp" alt="Image" />
                        <a href="{{route('news.category')}}" class="news-cat">Travel</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Selective Focus Photography Of Orange Fox Life</a></h3>
                        <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>11x dilihat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="news-col-three">
                <div class="news-card-two">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-2.webp" alt="Image" />
                        <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Elijah James: The Nashville Photographer Shares Her Unique Journey</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>12x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-7.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Travel</a>
                        <h3><a href="{{route('singlepost.news')}}">A Complimentary Day At Mandarin The Oriental</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 15, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-6.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Business</a>
                        <h3><a href="{{route('singlepost.news')}}">First Prototype Flight Using Kinetic Launch System</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>8x dilihat</li>
                        </ul>
                    </div>
                </div>
                <div class="news-card-three">
                    <div class="news-card-img">
                        <img src="assets/img/news/news-8.webp" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <a href="{{route('news.category')}}" class="news-cat">Health</a>
                        <h3><a href="{{route('singlepost.news')}}">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 15, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
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
                            <a href="{{route('news.category')}}" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{route('singlepost.news')}}">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="{{route('news.category')}}" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{route('singlepost.news')}}">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="{{route('news.category')}}" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{route('singlepost.news')}}">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="{{route('news.category')}}" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{route('singlepost.news')}}">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-five mb-3">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-9.webp" alt="Image" />
                            <a href="{{route('news.category')}}" class="news-cat">Lifestyle</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{route('singlepost.news')}}">Good Day To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style To Take A Photo With Your Favorite Style</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, harum. Dolore voluptate nisi fugit, expedita ipsum accusamus porro iure placeat asperiores deleniti corrupti voluptatibus, harum earum</p>
                            
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
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
                            <a href="{{route('news.category')}}" class="link-one">Lihat Semua<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="row gx-45">
                        <div class="col-xl-7">
                            <div class="news-card-four">
                                <img src="assets/img/news/news-31.webp" alt="Image" />
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Kyrgios And Djokovic Agree To Post-match Meal</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 25, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-32.webp" alt="Image" />
                                    <a href="{{route('news.category')}}" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-33.webp" alt="Image" />
                                    <a href="{{route('news.category')}}" class="news-cat">Fashion</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Selective Focus Photography Of Orange Fox Life</a></h3>
                                    <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-34.webp" alt="Image" />
                                    <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="{{route('singlepost.news')}}">Beyond Good & Evil 2 Has Been In Development Longer Than Literally Any Game, Ever</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-35.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="{{route('news.category')}}" class="news-cat">Travel</a>
                                    <h3><a href="{{route('singlepost.news')}}">World Trending Best 10 Website Travel Tips For Runners Groups Of</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-36.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="{{route('news.category')}}" class="news-cat">Business</a>
                                    <h3><a href="{{route('singlepost.news')}}">How To Find The Right Template For Your Specific Product</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-card-three">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-37.webp" alt="Image" />
                                </div>
                                <div class="news-card-info">
                                    <a href="{{route('news.category')}}" class="news-cat">Health</a>
                                    <h3><a href="{{route('singlepost.news')}}">Life Health Continues To Spread Rapidly, Are Many People</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 16, 2023</a></li>
                                        <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
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
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori <span>(6)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(3)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(2)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(8)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(6)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
                                        alt="Image">Kategori<span>(2)</span></a></li>
                            <li><a href="{{route('news.category')}}"><img src="assets/img/icons/arrow-right.svg"
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
                                <h2 class="section-title">Pilihan Editor</h2>
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
                                                <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">How Maps Reshape American Politics In World</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-39.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Will Humans be able to live in Mars in the future?</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-40.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Here’s the proof momentum strategy work</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-41.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Politics</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">The Promise And Potential Of Synthetic Assets</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 14, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
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
                                                <a href="{{route('news.category')}}" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-5.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Joe Gibbs discusses Ty Gibbs incident at Martinsville</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>12x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-43.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">The Heart of a Champion: Mental Toughness in Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-44.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Breaking Barriers: Inspiring Stories in Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>12x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-45.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Sports</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Unleashing Your Inner Athlete: The Power of Sports</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
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
                                                <a href="{{route('news.category')}}" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">OLIVIA EMMA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Navigating the Entrepreneurial Journey: Tips for Success</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-47.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-2.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">ELIJAH JAMES</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Revolutionizing Business: The Power of Innovation</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>10x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-48.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-3.webp" alt="Image" />
                                                    </div>
                                                    <h5>By<a href="author.html">BANKS GAIN</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">From Start-Up to Scale-Up: Growing Your Business</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 22, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-card-six">
                                            <div class="news-card-img">
                                                <img src="assets/img/news/news-49.webp" alt="Image" />
                                                <a href="{{route('news.category')}}" class="news-cat">Business</a>
                                            </div>
                                            <div class="news-card-info">
                                                <div class="news-author">
                                                    <div class="news-author-img">
                                                        <img src="assets/img/author/author-thumb-4.webp" alt="Image" />
                                                    </div>
                                                    <h5>By <a href="author.html">HARPAR LUNA</a></h5>
                                                </div>
                                                <h3><a href="{{route('singlepost.news')}}">Building a Thriving Business: Strategies for Success</a></h3>
                                                <ul class="news-metainfo list-style">
                                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 05, 2023</a></li>
                                                    <li><i class="fi fi-rr-comment"></i>03</li>
                                                    <li><i class="fi fi-rr-eye"></i>15x dilihat</li>
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
                <a href="{{route('news.category')}}" class="btn-three d-block w-100 mt-20">Lihat Lainnya<i class="flaticon-arrow-right "></i></a>

            </div>
        </div>
    </div>

    <div class="container-fluid pb-75 pt-100">
        <div>
            <h2 class="section-title">Artikel Premium</h2>
        </div>
        <div class="row gx-5 mt-5">
            <div class="col-xl-4">
                <div class="news-card-four">
                    <img src="{{asset('assets/img/news/news-32.webp')}}" alt="Image" />
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Best VR Headsets For PC And Gaming This Year</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="news-card-four">
                    <img src="{{asset('assets/img/news/news-32.webp')}}" alt="Image" />
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Best VR Headsets For PC And Gaming This Year</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="news-card-four">
                    <img src="{{asset('assets/img/news/news-32.webp')}}" alt="Image" />
                    <div class="news-card-info">
                        <h3><a href="{{route('singlepost.news')}}">Best VR Headsets For PC And Gaming This Year</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
                        </ul>
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