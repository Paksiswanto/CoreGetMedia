@extends('layouts.user.app')

@section('style')
<style>
    .border-primary {
        border-color: #0f4d8a !important;
        border-width: 5px !important;
    }

    .btn-primary {
        --bs-btn-color: #fff;
        --bs-btn-bg: #0f4d8a;
        --bs-btn-border-color: #0f4d8a;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #0b5ed7;
        --bs-btn-hover-border-color: #0a58ca;
        --bs-btn-focus-shadow-rgb: 49, 132, 253;
        --bs-btn-active-color: #fff;
        --bs-btn-a --ctive-bg: #0a58ca;
        --bs-btn-active-border-color: #0a53be;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #0f4d8a;
        --bs-btn-disabled-border-color: #0f4d8a;
    }

    .strip-right {
        border-right: 1px solid #0f4d8a;
        padding-right: 30px;
        height: 60%;
    }

    .strip-right h6,
    .strip-right p {
        margin-left: 1px;
    }

    .card-detail {
        border-radius: 8px;
        border: 1px solid #eee;
    }

    .card-author {
        position: absolute;
        /* margin-top: ;  */
    }

    .box {
        background-image: linear-gradient(180deg, #ffffff 50%, #aad7ff 300%);
        background-size: 100% 0%;
        background-repeat: no-repeat;
        background-position: bottom;
        transition: background-size 0.5s ease;
    }

    .box:hover {
        background-size: 100% 100%;
    }

    .theme-dark .box {
        background-color: #000000;
        background-image: linear-gradient(180deg, #000000 24%, #175A95 200%);
        background-size: 100% 0%;
        background-repeat: no-repeat;
        background-position: bottom;
        transition: background-size 0.5s ease;
    }

    .theme-dark .box:hover {
        background-size: 100% 100%;
    }

    .theme-dark .text-card {
        color: #fff !important;
    }

    .theme-dark .card-detail {
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
    }

    .author-box {
        width: 1200px;
        padding: 30px 40px 0px 40px;
        border-radius: 20px;
    }

    .search-box-widget button {
        position: absolute;
        top: 10px;
        right: 10px;
        height: 40px;
        background-color: #175A95;
        border-radius: 5px;
        padding: 10px 10px 10px 10px;
        border: none;
        width: 40px;
    }

    .page-nav li a.active,
    .page-nav li a:hover {
        color: var(--whiteColor);
        opacity: 1;
        background-color: #175A95;
        border-color: transparent;
    }

    .breadcrumb-wrap {
        padding: 80px 0 74px;
        background-image: url("assets/img/contact/contact-bg.jpg");
    }

</style>
@endsection

@section('content')
<div class="breadcrumb-wrap">
    <div class="container">
        <h2 class="breadcrumb-title text-white">Penulis</h2>
        <ul class="breadcrumb-menu list-style text-white">
            <li><a class="text-white" href="/">Beranda</a></li>
            <li>Penulis</li>
        </ul>
    </div>
</div>

<div class="container-fluid pb-75 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="background-color: #183249;">
                <div class="card-body p-5">
                    <h3 class="text-white">Hubungi Kami</h3>
                    <p class="text-white mt-4">
                        Masukan Anda berharga bagi kami. Bantu kami meningkatkan portal berita kami dengan membagikan pemikiran Anda
                    </p>

                    <div class="row mt-5">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">getmedia@gmail.com</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">+62-8909-1234-1223</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zM20 8l-7.475 4.675q-.125.075-.262.113t-.263.037t-.262-.037t-.263-.113L4 8v10h16zm-8 3l8-5H4zM4 8v.25v-1.475v.025V6v.8v-.012V8.25zv10z"/></svg>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-10 col-sm-10">
                            <p class="text-white">Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur 65152.</p>
                        </div>
                    </div>

                    <div class="">
                        <ul class="social-profile list-style">
                            <li><a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="ri-instagram-line"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
