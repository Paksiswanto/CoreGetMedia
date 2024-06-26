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
        <h2 class="breadcrumb-title">{{ $news->name }}</h2>
        <ul class="breadcrumb-menu list-style">
            <li><a href="/">Beranda</a></li>
            <li>{{ $news->name }}</li>
        </ul>
    </div>
</div>

<div class="sports-wrap ptb-100">
    <div class="container">
        <div class="row gx-55 gx-5">
            <div class="col-lg-8">
                <div class="">
                    @forelse ($news_tags as $item)
                    <div class="news-card-four" style="height: 550px;">
                        <div class="news-card-img">
                            <a href="javascript:void(0)"> <img src="{{asset('storage/' . $item->news->image)}}" alt="Image" width="100%" style="object-fit: cover" height="450" /></a>
                        </div>

                        <div class="news-card-info">
                            <h3><a data-toggle="tooltip" data-placement="top" title="Apex Legends Season 11 Start Date, Time, & What To Expect" href="#">{!! Illuminate\Support\Str::limit(strip_tags($item->news->name), 300, '...') !!}
                                </a>
                            </h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">{{ \Carbon\Carbon::parse($item->news->date)->translatedFormat('d F Y') }}</a></li>
                                <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus">{{ $item->news->newsViews_count ? $item->news->newsViews_count : '0' }}x dilihat</a></li>
                            </ul>
                        </div>
                    </div>

                    @empty

                    @endforelse

                </div>


                <div class="mb-5">
                    <div class="d-flex justify-content-between mb-3 mt-3">
                        <h3>Terbaru</h3>
                        <a href="{{ route('all-tag-list.user', ['tag' => $news->slug]) }}">
                            <p>Lihat lainnya
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                                    </svg></i>
                            </p>
                        </a>
                    </div>

                    @forelse ($newsTags as $data)
                    <div class="news-card-five">
                        <div class="news-card-img">
                            <a href="#"><img src="{{asset('storage/' . $data->news->image)}}" alt="Image" height="140" width="100%" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">{{ $data->news->newsCategories[0]->category->name }}</a>
                        </div>
                        <div class="news-card-info">
                            <h3><a data-toggle="tooltip" data-placement="top" title="{{ $data->news->name }}" href="{{ route('news.singlepost', ['news' => $data->news->slug]) }}">{!! Illuminate\Support\Str::limit(strip_tags($data->news->name), 200, '...') !!}
                                </a>
                            </h3>
                            <p>{!! Illuminate\Support\Str::limit(strip_tags($data->news->description), 200, '...') !!}</p>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($data->news->created_at)->translatedFormat('d F Y') }}</a></li>
                                <li><i class="fi fi-rr-eye"></i><a href="javascript:void(0)">{{ $data->news->newsViews_count ? $data->news->newsViews_count : '0' }}x dilihat</a></li>
                            </ul>
                        </div>
                    </div>
                    @empty

                    @endforelse

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
                <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">Sports</a>
            </div>
            <div class="news-card-info">
                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange" href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
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
                <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">Sports</a>
            </div>
            <div class="news-card-info">
                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange" href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
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
                <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">Sports</a>
            </div>
            <div class="news-card-info">
                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange" href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
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
                <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">Sports</a>
            </div>
            <div class="news-card-info">
                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange" href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
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
                <a data-toggle="tooltip" data-placement="top" title="Sports" href="#" class="news-cat">Sports</a>
            </div>
            <div class="news-card-info">
                <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange" href="#">Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange
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
                    @foreach ($CategoryPopulars as $category)
                    <li><a data-toggle="tooltip" data-placement="top" title="{{ $category->name }}" href="{{ route('categories.show.user', ['category' => $category->slug]) }}"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}" alt="Image">{{ $category->name }}
                            <span>({{ $category->news_categories_count }})</span></a></li>
                    @endforeach
                </ul>
            </div>

            <div class="sidebar-widget" style="width: 400px">
                <h3 class="sidebar-widget-title">
                    Berita Popular
                </h3>
                @forelse ($trendings as $trending)
                <div class="news-card-three">
                    <div class="news-card-img" style="height: 100px; width: 100px">
                        <img src="{{ asset('storage/' . $trending->image) }}" alt="Image" />
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{ route('news.singlepost', ['news' => $trending->slug]) }}">{{$trending->name}}</a></h3>
                        <ul class="news-metainfo list-style d-flex">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html" style="font-size: 15px;">15 Apr 2023</a></li>
                            <li><i class="fi fi-rr-eye"></i><a href="news-by-dateus" style="font-size: 15px;">10</a></li>
                        </ul>
                    </div>
                </div>
                @empty
                <div class="d-flex justify-content-center">
                    <div class="my-auto ">
                        <img src="{{ asset('assets/img/no-data.svg') }}" width="200" />
                        <h4 class="text-center">Tidak ada data!!</h4>
                    </div>
                </div>
                @endforelse
            </div>

            <div class="sidebar-widget bg-transparent shadow-sm">
                <h3 class="sidebar-widget-title">Tag Populer</h3>
                <ul class="tag-list list-style">
                    @forelse ($popularTags as $popularTag)
                    <li><a href="{{route('news-tag-list.user', ['tag' => $popularTag->slug])}}">{{ $popularTag->name }}</a></li>
                    @empty

                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
