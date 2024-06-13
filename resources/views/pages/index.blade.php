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

        .btn-three i {
            color: #175A95;
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

        .news-card-one .news-card-img img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
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
                            @forelse ($populars->take(10) as $popular)
                                <div class="swiper-slide news-card-one">
                                    <div class="news-card-img">
                                        <img src="{{ asset('storage/' . $popular->image) }}" alt="Image" style="object-fit: cover;"/>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a
                                                href="{{ route('news.singlepost', ['news' => $popular->slug]) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                        </h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x dilihat
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-75">
        <div class="news-col-wrap">
            <div class="news-col-one">
                @forelse ($categoryPopulars->take(5) as $key => $categoryPopular)
                    @if (++$key == 1)
                        <div class="news-card-two">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/'. $categoryPopular->image) }}" alt="Image" />
                                <a href="{{ route('categories.show.user', $categoryPopular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $categoryPopular->newsCategories[0]->category->name }}</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="{{ route('news.singlepost', ['news' => $categoryPopular->slug]) }}">{{ $categoryPopular->name }}</a></h3>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $categoryPopular->date }}</a></li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $categoryPopular->news_views_count }}x dilihat</li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="news-card-three">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/'. $categoryPopular->image) }}" alt="Image" />
                            </div>
                            <div class="news-card-info">
                                <a href="{{ route('categories.show.user', $categoryPopular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $categoryPopular->newsCategories[0]->category->name }}</a>
                                <h3><a href="{{ route('news.singlepost', ['news' => $categoryPopular->slug]) }}">{{ $categoryPopular->name }}</a></h3>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $categoryPopular->date }}</a></li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $categoryPopular->news_views_count }}x dilihat</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>

            <div class="news-col-two">
                @forelse ($newsPins->take(3) as $key => $newsPin)
                @if (++$key == 1)
                    <div class="news-card-four">
                        <img src="{{ asset('storage/'. $newsPin->image) }}" alt="Image" />
                        <div class="news-card-info">
                            <h3><a href="{{ route('news.singlepost', ['news' => $newsPin->slug]) }}">{{ $newsPin->name }}</a></h3>
                            <ul class="news-metainfo">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $newsPin->date }}</a></li>
                                <li><i class="fi fi-rr-eye"></i>{{ $newsPin->news_views_count }}x dilihat</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="news-card-five">
                        <div class="news-card-img">
                            <img src="{{ asset('storage/'. $newsPin->image) }}" alt="Image" />
                            <a href="{{ route('categories.show.user', $newsPin->newsCategories[0]->category->slug) }}" class="news-cat">{{ $newsPin->newsCategories[0]->category->name }}</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{ route('news.singlepost', ['news' => $newsPin->slug]) }}">{{ Illuminate\Support\Str::limit($newsPin->name, $limit = 60, $end = '...') }}</a></h3>
                            <p>{!! Illuminate\Support\Str::limit($newsPin->description, $limit = 60, $end = '...') !!}</p>
                            <ul class="news-metainfo">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $newsPin->date }}</a></li>
                                <li><i class="fi fi-rr-eye"></i>{{ $newsPin->news_views_count }} x dilihat</li>
                            </ul>
                        </div>
                    </div>
                @endif
                @empty
                @endforelse
            </div>

            <div class="news-col-three">
            @forelse ($category2Populars->take(5) as $key => $category2Popular)
                @if (++$key == 1)
                    <div class="news-card-two">
                        <div class="news-card-img">
                            <img src="{{ asset('storage/'. $category2Popular->image) }}" alt="Image" />
                            <a href="{{ route('categories.show.user', $category2Popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $category2Popular->newsCategories[0]->category->name }}</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{ route('news.singlepost', ['news' => $category2Popular->slug]) }}">{{ $category2Popular->name }}</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $category2Popular->date }}</a></li>
                                <li><i class="fi fi-rr-eye"></i>{{ $category2Popular->news_views_count }}x dilihat</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="{{ asset('storage/'. $category2Popular->image) }}" alt="Image" />
                        </div>
                        <div class="news-card-info">
                            <a href="{{ route('categories.show.user', $category2Popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $category2Popular->newsCategories[0]->category->name }}</a>
                            <h3><a href="{{ route('news.singlepost', ['news' => $category2Popular->slug]) }}">{{ $category2Popular->name }}</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ $category2Popular->date }}</a></li>
                                <li><i class="fi fi-rr-eye"></i>{{ $category2Popular->news_views_count }}x dilihat</li>
                            </ul>
                        </div>
                    </div>
                @endif
            @empty
            @endforelse
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
                    @forelse ($latests as $latest)
                        <div class="news-card-five pb-3">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/' . $latest->image) }}" alt="{{ $latest->image }}" />
                                <a href="{{ route('categories.show.user', $latest->newsCategories[0]->category->slug) }}"
                                    class="news-cat">{{ $latest->newsCategories[0]->category->name }}</a>
                                {{-- @foreach ($latest->newsCategories() as $item)
                                    <a href="{{route('news.category')}}" class="news-cat">hfgdg</a>
                                @endforeach --}}
                            </div>
                            <div class="news-card-info">
                                <h3><a
                                        href="{{ route('news.singlepost', ['news' => $latest->slug]) }}">{{ Str::limit($latest->name, 150, '...') }}</a>
                                </h3>
                                <p>{!! Str::limit(strip_tags($latest->description), 250) !!}</p>

                                <ul class="news-metainfo list-style">
                                    <li class="author">
                                        <span class="author-img">
                                            @if ($latest->user->image != null && Storage::disk('public')->exists($latest->user->image))
                                                <img src="{{ asset('storage/' . $latest->user->image) }}">
                                            @else
                                                <img src="{{ asset('default.png') }}">
                                            @endif
                                        </span>
                                        <a href="javascript:void(0)">{{ $latest->user->name }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-calendar-minus"></i><a
                                            href="javascript:void(0)">{{ \Carbon\Carbon::parse($latest->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $latest->newsViews()->count() }}x dilihat</li>
                                </ul>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

                <div class="left-content mt-5 pt-5">
                    <div class="row align-items-end mb-40">
                        <div class="col-md-7">
                            <h2 class="section-title">Artikel Paling Populer</h2>
                        </div>
                        <div class="col-md-5 text-md-end">
                            <a href="#" class="link-one">Lihat Semua<i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="row gx-45">
                        <div class="col-xl-7">
                            @forelse ($populars->take(15) as $key => $popular)
                                @if ($key == 11)
                                    <div class="news-card-four">
                                        <img src="{{ asset('storage/'. $popular->image) }}" alt="Image" />
                                        <div class="news-card-info">
                                            <h3><a
                                                    href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                            </h3>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                                </li>
                                                <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                                    dilihat</li>
                                            </ul>
                                        </div>
                                    </div>
                                @elseif ($key >= 13)
                                    <div class="news-card-five">
                                        <div class="news-card-img">
                                            <img src="{{ asset('storage/' . $popular->image) }}" alt="Image" />
                                            <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}"
                                                class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                                        </div>
                                        <div class="news-card-info">
                                            <h3><a
                                                    href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                            </h3>
                                            <p>{{ Str::limit($popular->name, 120, '...') }}</p>
                                            <ul class="news-metainfo list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a
                                                        href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                                </li>
                                                <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                                    dilihat</li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <div class="col-xl-5">
                            @forelse ($populars->take(17) as $key => $popular)
                            @if ($key == 12)
                                <div class="news-card-two">
                                    <div class="news-card-img">
                                        <img src="{{ asset('storage/' . $popular->image) }}" alt="Image" />
                                        <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}"
                                            class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a
                                                href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                        </h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                            </li>
                                            <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x dilihat</li>
                                        </ul>
                                    </div>
                                </div>
                            @elseif ($key >= 14)
                                <div class="news-card-three">
                                    <div class="news-card-img">
                                        <img src="{{ asset('storage/' . $popular->image) }}" alt="Image" />
                                    </div>
                                    <div class="news-card-info">
                                        <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}"
                                            class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                                        <h3><a
                                                href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                        </h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                    href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                            </li>
                                            <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x dilihat</li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Kategori Populer</h3>
                        <ul class="category-widget list-style">
                            @forelse ($popularCategories as $popularCategory)
                                <li>
                                    <a href="{{ route('categories.show.user', $popularCategory->slug) }}"><img
                                            src="assets/img/icons/arrow-right.svg"
                                            alt="Image">{{ $popularCategory->name }}
                                        <span>({{ $popularCategory->newsCategories()->count() }})</span></a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="sidebar-widget-two">
                        <div class="contact-widget">
                            <img src="assets/img/contact-bg.svg" alt="Image" class="contact-shape" />
                            <a href="index.html" class="logo">
                                <img class="logo-light" src="{{ asset('assets/img/logo/get-media-dark.svg') }}"
                                    alt="Image" />
                                <img class="logo-dark" src="{{ asset('assets/img/logo/get-media-light.svg') }}"
                                    alt="Image" />
                            </a>
                            <p>GetMedia berita terlengkap dengan berita terbaru dan terpopuler.</p>
                            <ul class="social-profile list-style">
                                <li>
                                    <a href="https://www.fb.com/" target="_blank"><i class="flaticon-facebook-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i
                                            class="flaticon-twitter-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="flaticon-instagram-2"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget bg-transparent shadow-smer">
                        <h3 class="sidebar-widget-title">Tag Populer</h3>
                        <ul class="tag-list list-style">
                            @forelse ($tags as $tag)
                                <li><a href="{{route('list-tag.user')}}">{{ $tag->name }}</a></li>
                            @empty
                            @endforelse
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
                                    @foreach ($categoriesPin as $key => $category)
                                        <li class="nav-item">
                                            <button class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#hu{{ ++$key }}"
                                                type="button" role="tab">{{ $category->name }}</button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content editor-news-content">
                            @forelse ($categoriesPin as $key => $category)
                                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="hu{{ ++$key }}" role="tabpanel">
                                    <div class="row">
                                        @foreach ($newsByCategory[$category->name]->take(6) as $newsPin)
                                            <div class="col-md-4">
                                                <div class="news-card-six">
                                                    <div class="news-card-img">
                                                        <img src="{{ asset('storage/'. $newsPin->image) }}" alt="Image" />
                                                        <a href="{{ route('categories.show.user', $newsPin->newsCategories[0]->category->slug) }}" class="news-cat">{{ $newsPin->newsCategories[0]->category->name }}</a>
                                                    </div>
                                                    <div class="news-card-info">
                                                        <div class="news-author">
                                                            <div class="news-author-img">
                                                                @if ($newsPin->user->image != null && Storage::disk('public')->exists($newsPin->user->image))
                                                                    <img src="{{ asset('storage/' . $newsPin->user->image) }}">
                                                                @else
                                                                    <img src="{{ asset('default.png') }}">
                                                                @endif
                                                            </div>
                                                            <h5>By <a href="javascript:void(0)">{{ $newsPin->user->name }}</a></h5>
                                                        </div>
                                                        <h3><a href="{{ route('news.singlepost', $newsPin->slug) }}">{{ Str::limit($newsPin->name, 50, '...') }}</a></h3>
                                                        <ul class="news-metainfo list-style">
                                                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                                                    href="javascript:void(0)">{{ \Carbon\Carbon::parse($newsPin->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                                                            <li><i class="fi fi-rr-comment"></i>0</li>
                                                            <li><i class="fi fi-rr-eye"></i>{{ $newsPin->newsViews()->count() }}x dilihat</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @empty
                                
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="{{ route('news.category') }}" class="btn-three d-block w-100 mt-20">Lihat Lainnya<i
                        class="flaticon-arrow-right "></i></a>

            </div>
        </div>
    </div>

    {{-- <div class="container-fluid pb-75 pt-100">
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
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">Apr 08, 2023</a></li>
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
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">Apr 08, 2023</a></li>
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
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">Apr 08, 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i>14x dilihat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>
{{-- 
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
                            <label class="form-check-label" for="test_21"> I've read and accept <a
                                    href="{{ route('privacy-policy') }}">Privacy Policy</a> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="quickview-modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="quickview-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <div class="video-popup">
                        <iframe width="885" height="498" src="https://www.youtube.com/embed/3FjT7etqxt8"
                            title="How to Design an Elvis Movie Poster in Photoshop"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
