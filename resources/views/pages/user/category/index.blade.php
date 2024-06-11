@extends('layouts.user.app')


@section('style')
    <style>
        @media (min-width: 768px) {
            .icon-eye {
                margin-top: 12px;
            }
        }
        .tag-list li a:hover {
            background-color: #175A95;
            color: var(--whiteColor);
        }
        .tag-list li a {
            color: var(--optionalColor);
            background-color: var(--whiteColor);
            border-radius: 5px;
            padding: 7px 15px 3px 17px;
            font-size: 14px;
            line-height: 30px;
            display: inline-block;
            border: 1px solid #eee;
        }
        .theme-dark .tag-list li a:hover {
            background-color: #175A95;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--whiteColor);
        }
        .breadcrumb-menu li:after {
            color: #000;
        }
    </style>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="breadcrumb-wrap">
            <h2 class="breadcrumb-title">Category</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Home</a></li>
                <li>Category</li>
            </ul>
        </div>
    </div>

    <div class="sports-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    <div class="">
                        <div class="news-card-four" style="height: 550px;">
                            <div class="news-card-img">
                                <a href="#"> <img src="{{asset('assets/img/news/news-10.webp')}}" alt="Image" width="100%" style="object-fit: cover" height="450" /></a>
                            </div>

                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Apex Legends Season 11 Start Date, Time, & What To Expect"
                                        href="#">Apex Legends Season 11 Start Date, Time, & What To Expect
                                    </a>
                                </h3>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="mb-5">
                        <div class="d-flex justify-content-between mb-3 mt-3">
                            <h3>Trending</h3>
                            <a href="{{route('all-category.user')}}">
                                <p>Lihat lainnya
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                                    </svg></i>
                                </p>
                            </a>
                        </div>

                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-1.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-1.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-1.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-1.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-1.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="text-center item-center d-flex justify-content-center" style="background-color:#F6F6F6; width:100%;height:200px;">
                    <h5 class="mt-5">Iklan</h5>
                </div> --}}

                    {{-- <div class="mb-5 mt-5">
                        <div class="d-flex justify-content-between mb-3">
                            <h3>Terbaru</h3>
                            <a href="#">
                                <p>Lihat lainnya<i><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                                    </svg></i>
                                </p>
                            </a>
                        </div>

                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-38.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-38.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-38.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-38.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <a href="#"><img src="{{asset('assets/img/news/news-38.webp')}}" alt="Image" height="140" width="100%" /></a>
                                <a data-toggle="tooltip" data-placement="top" title="Sports"
                                    href="#" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                        href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
                                    </a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print, graphic or web desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2023</a></li>
                                    <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">10</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Kategori Populer</h3>
                                <ul class="category-widget list-style">
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar-widget" style="width: 400px">
                                <h3 class="sidebar-widget-title">
                                    Berita Popular
                                </h3>
                                <div class="news-card-three">
                                    <div class="news-card-img" style="height: 100px; width: 100px">
                                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To</a></h3>
                                        <ul class="news-metainfo list-style d-flex">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img" style="height: 100px; width: 100px">
                                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To</a></h3>
                                        <ul class="news-metainfo list-style d-flex">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img" style="height: 100px; width: 100px">
                                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To</a></h3>
                                        <ul class="news-metainfo list-style d-flex">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img" style="height: 100px; width: 100px">
                                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To</a></h3>
                                        <ul class="news-metainfo list-style d-flex">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-three">
                                    <div class="news-card-img" style="height: 100px; width: 100px">
                                        <img src="{{asset('assets/img/news/news-3.webp')}}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To</a></h3>
                                        <ul class="news-metainfo list-style d-flex">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget bg-transparent shadow-sm">
                                <h3 class="sidebar-widget-title">Tag Populer</h3>
                                <ul class="tag-list list-style">
                                <li><a href="{{route('list-tag.user')}}">BUSINESS</a></li>
                                <li><a href="{{route('list-tag.user')}}">FOOD</a></li>
                                <li><a href="{{route('list-tag.user')}}">SCIENCE</a></li>
                                <li><a href="{{route('list-tag.user')}}">LIFESTYLE</a></li>
                                <li><a href="{{route('list-tag.user')}}">SPORTS</a></li>
                                <li><a href="{{route('list-tag.user')}}">PHOTO</a></li>
                                <li><a href="{{route('list-tag.user')}}">TECHNOLOGY</a></li>
                                <li><a href="{{route('list-tag.user')}}">CONTENT</a></li>
                                <li><a href="{{route('list-tag.user')}}">FEATURED</a></li>
                                <li><a href="{{route('list-tag.user')}}">AUDIO</a></li>
                                <li><a href="{{route('list-tag.user')}}">FASHION</a></li>
                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
