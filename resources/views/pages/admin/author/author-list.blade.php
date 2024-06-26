@extends('layouts.admin.app')

@section('style')
    <style>
        .card-table {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
        }

        .table-border {
            border: 1px solid #DADADA;
            border-radius: 5px;
            /* padding: 25px; */
        }
    </style>
@endsection

<head>
    <title>Admin | Author-List</title>
</head>

@section('content')
    <div class="">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3 gap-2 ">
                <form class="d-flex gap-2">
                    <div class="position-relative">
                        <div class="">
                            <input type="text" name="search" class="form-control search-chat py-2 px-5 ps-5"
                                id="search-name" placeholder="Search">
                            <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <select name="banned" class="form-select" id="search-status">
                            <option value="">Pilih status</option>
                            <option value="approved">Aktif</option>
                            <option value="reject">Blokir</option>
                            <option value="">Tampilkan semua</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-md py-1 px-5 text-white" type="button" style="background-color: #175A95;"
                        data-bs-toggle="modal" data-bs-target="#modal-create">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 2 30 24">
                            <path fill="currentColor"
                                d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2" />
                        </svg>
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="table-responsive rounded-2">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead>
                    <tr>
                        <th style="background-color: #D9D9D9;">No</th>
                        <th style="background-color: #D9D9D9;">Name</th>
                        <th style="background-color: #D9D9D9;">Email</th>
                        <th style="background-color: #D9D9D9;">Status</th>
                        <th style="background-color: #D9D9D9;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($authors as $author)
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="{{ asset('admin/dist/images/profile/user-2.jpg') }}"
                                    class="rounded-circle me-2 user-profile" style="object-fit: cover" width="35"
                                    height="35" alt="" />
                                {{ $author->user->name }}
                            </td>
                            <td>{{ $author->user->email }}</td>
                            <td>
                                @if ($author->user->status == 'active')
                                    <div
                                        class="
                                    fs-3
                                    badge
                                    bg-light-success
                                    text-success
                                    font-weight-medium
                                    ">
                                        Aktif</div>
                                @endif
                            <td>
                                <div class="d-flex">

                                    <button data-bs-toggle="tooltip" title="Detail" class="btn btn-sm btn-primary me-2"
                                        style="background-color:#5D87FF">
                                        <i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 6.5a9.77 9.77 0 0 1 8.82 5.5c-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12A9.77 9.77 0 0 1 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5m0 5a2.5 2.5 0 0 1 0 5a2.5 2.5 0 0 1 0-5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5" />
                                            </svg></i>
                                    </button>

                                    <a data-bs-toggle="tooltip" title="Buka Blokir"
                                        class="btn unblock btn-sm btn-success me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="#fff"
                                                d="M6.615 9H15V7q0-1.25-.875-2.125T12 4q-1.25 0-2.125.875T9 7H8q0-1.671 1.164-2.836T12 3q1.671 0 2.836 1.164T16 7v2h1.385q.666 0 1.14.475q.475.474.475 1.14v8.77q0 .666-.475 1.14q-.474.475-1.14.475H6.615q-.666 0-1.14-.475Q5 20.051 5 19.385v-8.77q0-.666.475-1.14Q5.949 9 6.615 9M12 16.5q.633 0 1.066-.434q.434-.433.434-1.066t-.434-1.066Q12.633 13.5 12 13.5t-1.066.434Q10.5 14.367 10.5 15t.434 1.066q.433.434 1.066.434" />
                                        </svg>
                                    </a>
                                    <a data-bs-toggle="tooltip" title="delete" class="btn delete btn-sm btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="modal-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Akun
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="POST" id="form-create" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row container">
                                <div class="col-md-12 col-lg-6 mb-3">
                                    <label class="form-label" for="nomor">Nama</label>
                                    <input type="text" id="create-name" name="name" placeholder="nama"
                                        value="{{ old('name') }}" class="form-control ">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-lg-6 mb-3">
                                    <label class="form-label" for="nomor">Nomor Telepon</label>
                                    <input type="text" id="create-phone_number" name="phone_number"
                                        placeholder="nomor telepon" value="{{ old('phone_number') }}"
                                        class=" @error('phone_number') is-invalid @enderror form-control">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-lg-6 mb-3">
                                    <label class="form-label" for="nomor">Email</label>
                                    <input type="text" id="create-email" name="email" placeholder="email"
                                        value="{{ old('email') }}"
                                        class=" @error('email') is-invalid @enderror form-control">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-lg-6 mb-3">
                                    <label class="form-label" for="nomor">CV</label>
                                    <input type="file" id="create-cv" name="cv" placeholder="name"
                                        value="{{ old('cv') }}"
                                        class=" @error('cv') is-invalid @enderror form-control">
                                    @error('cv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-lg-6 mb-3">
                                    <label class="form-label" for="nomor">Password</label>
                                    <input type="password" id="create-password" name="password" placeholder="password"
                                        value="{{ old('password') }}"
                                        class=" @error('password') is-invalid @enderror form-control">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-rounded btn-light-success text-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <form id="form-delete" method="POST" class="modal-content">
                    @csrf
                    @method('post')
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myModalLabel">
                            Hapus data
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p>Apakah anda yakin akan menghapus data ini? </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-light-danger text-secondery font-medium waves-effect"
                            data-bs-dismiss="modal">
                            Hapus
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Detail Modal -->
        <div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="modal-detail Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal content -->
                    <div class="modal-header">
                        <h3 class="modal-title">Detail data Author</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="" class="rounded-circle mb-4" id="detail-photo" width="150"
                                alt="photo-siswa" height="150" />
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-weight: bold;">Nama : <span
                                                id="detail-name" style="font-weight: normal;"></span>
                                        </li>
                                        <li class="list-group-item" style="font-weight: bold;">Email: <span
                                                id="detail-email" style="font-weight: normal;"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-weight: bold;">Tanggal Lahir: <span
                                                id="detail-birth_date" style="font-weight: normal;"></span></li>
                                        <li class="list-group-item" style="font-weight: bold;">Alamat: <span
                                                id="detail-address" style="font-weight: normal;"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a id="download-cv" target="_blank" download>
                            <span class="badge bg-light-primary text-primary me-2 fs-4 px-2 py-2">
                                Download CV
                            </span>
                        </a>
                        <button type="button" class="btn btn-light-danger mt-3 text-danger"
                            data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modal-blokir" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form id="form-blokir" method="POST" class="modal-content">
                @csrf
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Blokir Penulis
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan memblokir penulis ini? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-light-danger text-secondery font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Blokir
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-unblock" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form id="form-unblock" method="POST" class="modal-content">
                @csrf
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Buka Blokir Penulis
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>Apakah anda yakin akan Membuka Blokir penulis ini? </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-light-danger text-secondery font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Buka
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-hapus" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form id="form-delete" method="POST" class="modal-content">
                @csrf
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Hapus Penulis
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>Apakah anda yakin menghapus Penulis ini?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-light-danger text-secondery font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
