@extends('layouts.author.app')

@section('style')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        .card-profile {
            box-shadow: 0 5px 2px rgba(0, 0, 0, 0.1);
            border: 1px solid #f4f4f4;
            padding: 30px;
            border-radius: 10px;
            /* width: 400px;
                height: 130px; */
        }

        .badge {
            width: fit-content;
            height: fit-content;
            padding: 0.25em 0.5em;
            font-size: inherit;
        }
    </style>
@endsection

<head>
    <title>Author | Inbox</title>
</head>

@section('content')
    <div class="">
        <div class="container-fluid">
            <div class="card bg-light-info shadow-sm position-relative overflow-hidden">
                <div class="card-body px-4 py-4">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Inbox Application</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                            href="index-2.html">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Inbox</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img src="{{ asset('assets/img/em.png') }}" alt="" class="img-fluid mb-n4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card overflow-hidden chat-application">
                <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">
                    <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                        <i class="ti ti-menu-2 fs-5"></i>
                    </button>
                    <form class="position-relative w-100">
                        <input type="text" class="form-control search-chat py-2 px-5 ps-5" id="text-srh"
                            placeholder="Search Contact">
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div class="d-flex w-100">
                    <div class="left-part border-end w-20 flex-shrink-0 d-none d-lg-block">
                        <div class="px-9 pt-4 pb-3">
                            <h4>Kotak Surat</h4>
                        </div>
                        <ul class="list-group" style="height: calc(100vh - 400px)" data-simplebar>

                            <li class="list-group-item border-0 d-flex p-0 mx-9">
                                    <a id="contactButton" class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1 buttonContact"
                                    href="javascript:void(0)"><i class="ti ti-inbox fs-5"></i>Pesan</a>
                                    <span id="messageCountBadge" class="badge ms-auto bg-danger"></span>
                            </li>

                            <li class="list-group-item border-0 d-flex p-0 mx-9">
                                <a id="reportButton" class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1 buttonReport"
                                    href="javascript:void(0)"><i class="ti ti-flag fs-5"></i>Laporan</a>
                                <span id="messageRejectBadge" class="badge ms-auto bg-danger"></span>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-9">
                                <a id="trashButton" class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1 buttonDelete"
                                    href="javascript:void(0)"><i class="ti ti-trash fs-5"></i>Sampah</a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex w-100">
                        <div class="min-width-340">
                            <div class="border-end user-chat-box h-100">
                                <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                                    <form class="position-relative">
                                        <input type="text" class="form-control search-chat py-2 px-5 ps-5" id="text-srh" placeholder="Cari" />
                                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                    </form>
                                </div>
                                <div class="app-chat">
                                    <ul class="chat-users" style="height: calc(100vh - 400px)" data-simplebar>
                                        <li class="contact">
                                            <a href="javascript:void(0)"
                                                class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user bg-light show-contact">
                                                <div class="position-relative w-100 ms-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h6 class="mb-0 fw-semibold">Jovita</h6>
                                                    </div>
                                                    <h6 class="text-dark">Halo</h6>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0 fs-2 text-muted">34 Mei 2024
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="w-100">
                            <div class="chat-container h-100 w-100">
                                <div class="chat-box-inner-part h-100">
                                    <div class="chatting-box app-email-chatting-box">
                                        <div class="chat-content" style="display: block;">
                                            <div class="p-9 py-3 border-bottom chat-meta-user">
                                                <h5>Detail Pesan</h5>
                                            </div>
                                            <div class="position-relative overflow-hidden">
                                                <div class="position-relative">
                                                    <div class="p-9" style="height: calc(100vh - 428px)" data-simplebar>
                                                        <div class="chat active-chat">
                                                            <div
                                                                class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <img src="storage/img/usr1.svg"
                                                                        alt="user8" width="48" height="48"
                                                                        class="rounded-circle" />
                                                                    <div>
                                                                        <h6 class="fw-semibold mb-0">Jovita</h6>
                                                                        <p class="mb-0">jov@gmail.com
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <span class="badge fs-2 rounded-4 py-1 px-4"
                                                                    style="background-color: #175A95;">Pesan</span>
                                                            </div>
                                                            <div class="border-bottom pb-7 mb-7">
                                                                <h4 class="fw-semibold text-dark mb-3">Silakan periksa
                                                                    pembaruan terbaru ini</h4>
                                                                <p class="mb-3 text-dark">Hello Author,
                                                                </p>
                                                                <p class="mb-3 text-dark">
                                                                    Halo
                                                                </p>
                                                                <p class="mb-0 text-dark">Salam dari,..</p>
                                                                <h6 class="fw-semibold mb-0 text-dark pb-1">Jovita</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-9 py-3 border-top chat-send-message-footer">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <ul
                                                                class="list-unstyledn mb-0 d-flex align-items-center gap-7">
                                                                <li>
                                                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1 btn-reply"
                                                                        href="javascript:void(0)">
                                                                        <i class="ti ti-arrow-back-up fs-5"></i>
                                                                        Balas
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1 btn-delete-message"
                                                                        href="javascript:void(0)">
                                                                        <i class="ti ti-trash fs-5"></i>
                                                                        Hapus
                                                                    </a>
                                                                </li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
