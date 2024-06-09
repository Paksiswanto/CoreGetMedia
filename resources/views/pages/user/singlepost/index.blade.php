@extends('layouts.user.app')

@section('style')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

@endsection                        

@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="breadcrumb-title">Business Article Details</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Home</a></li>
                <li><a href="">Business</a></li>
                <li>Business Article Details</li>
            </ul>
        </div>
    </div>


    <div class="news-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    <article>
                        <div>
                            <h1>Jiraiya Banks Wants To Teach You How To Build A House</h1>
                        </div>
                        <div class="news-img">
                            <img src="{{asset('assets/img/news/single-news-1.webp')}}" alt="Image">
                            <a href="business.html" class="news-cat">Business</a>
                        </div>
                        <div>
                            <ul class="news-metainfo list-style">
                                <div class="d-flex justify-content-between">
                                    <div class="col-lg-11 col-md-11">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 mb-3">
                                                <li class="author">
                                                    <span class="author-img">
                                                        <img src="{{asset('admin/dist/images/profile/user-1.jpg')}}"
                                                            alt="Image" width="40px" height="30px"
                                                            style="border-radius: 50%; object-fit:cover;" />
                                                    </span>
                                                    <div>
                                                        <a style="display: inline;text-decoration:none"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="author - Karin"
                                                            href="#">Karin</a>
                                                        </span>
                                                    </div>
                                                </li>
                                            </div>
    
                                            <div class="col-md-12 col-sm-12 col-lg-9">
                                                <li><i class="fi fi-rr-calendar-minus"></i>
                                                    <span id="formattedDate" class="font-date">09 Mei 2024</span>
                                                </li>
                                                <li>
                                                    <i class="fi fi-rr-eye" style="margin-top: 2px;"></i>
                                                    <span>20x dilihat</span>
                                                </li>
                                                <li>
                                                    <form class="d-flex">
                                                        
                                                        <i><button type="submit"
                                                            style="background: transparent;border:transparent"
                                                            class="liked">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#434343" d="M14.17 1L7 8.18V21h12.31L23 12.4V8h-8.31l1.12-5.38zM1 9h4v12H1z"/></svg>
                                                        </button></i>
                                                    </form>
    
                                                    {{-- @auth()
                                                        <form id="form-like">
                                                            @csrf
                                                            @if (auth()->check())
                                                                <button type="submit"
                                                                    style="background: transparent;border:transparent"
                                                                    class="like">
                                                                    <svg class="last mb-1" xmlns="http://www.w3.org/2000/svg"
                                                                        width="18" height="18" viewBox="0 0 24 24">
                                                                        <path fill="#E93314"
                                                                            d="M18 21H7V8l7-7l1.25 1.25q.175.175.288.475t.112.575v.35L14.55 8H21q.8 0 1.4.6T23 10v2q0 .175-.05.375t-.1.375l-3 7.05q-.225.5-.75.85T18 21m-9-2h9l3-7v-2h-9l1.35-5.5L9 8.85zM9 8.85V19zM7 8v2H4v9h3v2H2V8z" />
                                                                    </svg>
                                                                </button>
                                                            @endif
    
                                                        </form>
    
                                                        <form id="form-liked" style="display: none;">
                                                            @csrf
                                                            <button type="submit"
                                                                style="background: transparent;border:transparent"
                                                                class="liked">
                                                                <svg class="last mb-1" xmlns="http://www.w3.org/2000/svg"
                                                                    width="18" height="18" viewBox="0 0 24 24">
                                                                    <path fill="red"
                                                                        d="M18 21H8V8l7-7l1.25 1.25q.175.175.288.475t.112.575v.35L15.55 8H21q.8 0 1.4.6T23 10v2q0 .175-.037.375t-.113.375l-3 7.05q-.225.5-.75.85T18 21M6 8v13H2V8z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form id="form-like">
                                                            @csrf
                                                            <button type="button"
                                                                style="background: transparent;border:transparent"
                                                                class="like not-login">
                                                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg"
                                                                    width="18" height="18" viewBox="0 0 24 24">
                                                                    <path fill="#E93314"
                                                                        d="M18 21H7V8l7-7l1.25 1.25q.175.175.288.475t.112.575v.35L14.55 8H21q.8 0 1.4.6T23 10v2q0 .175-.05.375t-.1.375l-3 7.05q-.225.5-.75.85T18 21m-9-2h9l3-7v-2h-9l1.35-5.5L9 8.85zM9 8.85V19zM7 8v2H4v9h3v2H2V8z" />
                                                                </svg>
                                                            </button>
                                                        </form>
    
                                                        <form id="form-liked" style="display: none;">
                                                            @csrf
                                                            <button type="submit"
                                                                style="background: transparent;border:transparent"
                                                                class="liked">
                                                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg"
                                                                    width="18" height="18" viewBox="0 0 24 24">
                                                                    <path fill="red"
                                                                        d="M18 21H8V8l7-7l1.25 1.25q.175.175.288.475t.112.575v.35L15.55 8H21q.8 0 1.4.6T23 10v2q0 .175-.037.375t-.113.375l-3 7.05q-.225.5-.75.85T18 21M6 8v13H2V8z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    @endauth --}}
    
                                                    <span class="ms-2">12</span>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-1 col-sm-1 col-lg-1">
                                        <li>
                                            <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="3" d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z"/>
                                                </svg>
                                            </a>
                                            
                                            {{-- <a class="" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linejoin="round"
                                                        stroke-width="3"
                                                        d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" />
                                                </svg>
                                            </a> --}}
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li>
                                                    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#share">
                                                        Bagikan
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#tambahdataLabel">
                                                        Laporkan
                                                    </button>
                                                </li>
                                            </ul>
                                            
                                            {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li>
                                                    <button class="btn btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#share">
                                                        Bagikan
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#tambahdataLabel">
                                                        Laporkan
                                                    </button>
                                                </li>
                                            </ul> --}}
                                        </li>
                                    </div>
                                </div>
                                {{-- <li class="author">
                                    <span class="author-img">
                                        <img src="{{asset('assets/img/author/author-thumb-4.webp')}}" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03, 2023</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li> --}}
                            </ul>
                        </div>
                        <div class="news-para">
                            
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's stand dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specim book. It has survived not
                                only five <strong>gravida</strong> but also the leap into electronic typesetting,
                                remaining essentially unchange was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum <a href="index.html">Ipsum</a> and more recently with
                                desktop publishing software like Aldus Page maker including versions of Lorem Ipsum.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                        <div class="news-img">
                            <img src="{{asset('assets/img/news/single-news-6.webp')}}" alt="Image">
                        </div>
                        <div class="news-para">
                            <h5>Mastering Digital Transformation: How to Stay Ahead in a Rapidly Changing Business
                                Landscape</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <h5>Unordered & Ordered Lists</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                            <ul class="content-feature-list list-style mt-15">
                                <li>
                                    <span><i class="flaticon-arrow-right"></i></span>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content.
                                </li>
                                <li>
                                    <span><i class="flaticon-arrow-right"></i></span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                </li>
                                <li>
                                    <span><i class="flaticon-arrow-right"></i></span>
                                    It was popularised in the 1960s with the release of Letraset sheets
                                </li>
                                <li>
                                    <span><i class="flaticon-arrow-right"></i></span>
                                    Publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </li>
                                <li>
                                    <span><i class="flaticon-arrow-right"></i></span>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined.
                                </li>
                            </ul>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a <strong>adipisicing</strong> of
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                of text.</p>
                        </div>
                        <blockquote class="wp-block-quote">
                            <i class="fi fi-rr-quote-right"></i>
                            <p>“ People find waiting more tolerable when they can see the work being done on their
                                behalf ”</p>
                            <h6>William Benjamin</h6>
                        </blockquote>
                        <div class="news-para">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's stand dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specim book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchange was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ol>
                                <li>Lacus sed viverra tellus in hac habitasse platea dictumst.</li>
                                <li>Gravida neque convallis a <strong>cras</strong> semper auctor neque vitae.</li>
                                <li>Lacus sed turpis tincidunt id aliquet risus feugiat in.</li>
                                <li>Risus commodo viverra manas accumsan lacus vel facilisis</li>
                            </ol>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam culpa reprehenderit ad
                                ipsa porro obcaecati accusantium tempore officiis tenetur est!</p>
                        </div>
                    </article>
                    
                    <div id="cmt-form">
                        @auth                            
                            <div class="mb-30">
                                <h3 class="comment-box-title">Tinggalkan Komentar</h3>
                            </div>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="messages" id="messages" cols="30" rows="10"
                                                placeholder="Tinggalkan komentar"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mt-1 d-flex justify-content-end">
                                        <button class="btn-two">Komentar</button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="mb-30">
                                <h3 class="comment-box-title">Tinggalkan Komentar</h3>
                            </div>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" required placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required
                                                placeholder="Alamat Email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="messages" id="messages" cols="30" rows="10"
                                                placeholder="Tinggalkan komentar"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 mt-1 d-flex justify-content-end">
                                        <button class="btn-two">Komentar</button>
                                    </div>
                                </div>
                            </form>
                        @endauth
                    </div>

                    <h3 class="comment-box-title mt-5">3 Komentar</h3>
                    <div class="comment-item-wrap">
                        <div class="comment-item">
                            <div class="comment-author-img">
                                <img src="{{asset('admin/dist/images/profile/user-6.jpg')}}" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Killian Mider</h5>
                                                <span class="comment-date">2 Menit yang lalu</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-3 col-sm-3 col-3 text-md-end order-md-1 order-sm-1 order-1">
                                            <a href="#cmt-form">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-3 order-3">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam.
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-12 col-sm-12 col-12 text-md-start order-md-3 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Balas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-item reply">
                            <div class="comment-author-img">
                                <img src="{{asset('assets/img/author/author-thumb-4.webp')}}" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Everly Leah </h5>
                                                <span class="comment-date">Jul 23, 2023 | 7:10 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam erat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-item">
                            <div class="comment-author-img">
                                <img src="{{asset('assets/img/author/author-thumb-4.webp')}}" alt="Image">
                            </div>
                            <div class="comment-author-wrap">
                                <div class="comment-author-info">
                                    <div class="row align-items-start">
                                        <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                            <div class="comment-author-name">
                                                <h5>Michel Ohio</h5>
                                                <span class="comment-date">Jun 14, 2023 | 7:10 PM</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                            <a href="#cmt-form" class="reply-btn">Reply</a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                            <div class="comment-text">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Kategori</h3>
                            <ul class="category-widget list-style">
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori <span>(6)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(3)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(2)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(8)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(6)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(2)</span></a></li>
                                <li><a href="business.html"><img src="{{asset('assets/img/icons/arrow-right.svg')}}"
                                            alt="Image">Kategori<span>(4)</span></a></li>
                            </ul>
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
    </div>

    {{-- <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button> --}}

    <div class="modal fade" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-rr-cross"></i>
                </button>
                <div class="modal-body">
                    <div class="newsletter-bg bg-f"></div>
                    <div class="newsletter-content">
                        <img src="{{asset('assets/img/newsletter-bg.webp')}}" alt="Image" class="newsletter-icon">
                        <h2>Join Our Newsletter & Read The New Posts First</h2>
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Email Address">
                            <button type="button" class="btn-one">Subscribe<i class="flaticon-arrow-right"></i></button>
                        </form>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_21">
                            <label class="form-check-label" for="test_21">
                                I've read and accept <a href="privacy-policy.html">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quickview-modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="quickview-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <div class="video-popup">
                        <iframe width="885" height="498" 
                        {{-- src="https://www.youtube.com/embed/3FjT7etqxt8" --}}
                            title="How to Design an Elvis Movie Poster in Photoshop"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection