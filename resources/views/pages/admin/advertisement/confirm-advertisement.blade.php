@extends('layouts.admin.app')
@section('content')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <form class="d-flex gap-2">
            <div class="position-relative d-flex">
                <input type="text" name="search" class="form-control search-chat py-2 px-5 ps-5"
                    id="search-name" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>

            <div>
                <div class="d-flex">
                    <select class="form-select" id="opsi-latest">
                        <option disabled selected>Pilih opsi</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                    </select>
                </div>
            </div>

            <div>
                <div class="d-flex">
                    <select class="form-select" id="opsi-jenis">
                        <option disabled selected>Pilih jenis</option>
                        <option value="foto">Foto</option>
                        <option value="vidio">Video</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="modal-detail Label"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal content -->
            <div class="modal-header">
                <h3 class="modal-title">Detail data User</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="" id="detail-photo" width="150"
                        alt="" height="150" />
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-weight: bold;">Penambah : <span
                                    id="detail-created" style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;">Url : <span
                                    id="detail-url" style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;">Posisi : <span
                                    id="detail-position" style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;">Mulai iklan : <span
                                    id="detail-start_date" style="font-weight: normal;"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-weight: bold;">Jenis Iklan : <span
                                    id="detail-type" style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;">Halaman : <span
                                    id="detail-page" style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;"><span
                                    style="font-weight: normal;"></span>
                                </li>
                                <li class="list-group-item" style="font-weight: bold;"><span
                                    style="font-weight: normal;"></span>
                                </li>

                                <li class="list-group-item" style="font-weight: bold;">Akhir Iklan : <span
                                    id="detail-end_date" style="font-weight: normal;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex gap-2">
                <form id="form-accept">
                    <button type="button" class="btn btn-light-danger mt-3 text-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" data-id="detail-id" class="btn btn-light-primary mt-3 text-primary" data-bs-dismiss="modal">Terima Iklan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-3">
    <div class="table-responsive rounded-2 mb-3">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead>
                <tr>
                    <th style="background-color: #D9D9D9;">No</th>
                    <th style="background-color: #D9D9D9;">Nama</th>
                    <th style="background-color: #D9D9D9;">Jenis Iklan</th>
                    <th style="background-color: #D9D9D9;">Tanggal Awal</th>
                    <th style="background-color: #D9D9D9;">Tanggal Akhir</th>
                    <th style="background-color: #D9D9D9;">Halaman</th>
                    <th style="background-color: #D9D9D9;">Posisi Iklan</th>
                    <th style="background-color: #D9D9D9;">Status</th>
                    <th style="background-color: #D9D9D9;;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nama</td>
                    <td>01/01/2022</td>
                    <td>01/05/2022</td>
                    <td>Sub Kategori</td>
                    <td>Bawah Berita</td>
                    <td><span class="mb-1 badge rounded-pill font-medium bg-light-danger text-danger">Belum Bayar</span></td>
                    <td>
                        <div class="d-flex gap-2">
                            <button style="background-color: #EF6E6E"
                                class="btn btn-sm btn-delete text-white ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="#ffffff" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5q0-.425.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8q-.425 0-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8q-.425 0-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z"/></svg>
                            </button>

                            <button data-bs-toggle="tooltip" title="Detail" class="btn btn-sm btn-primary btn-detail me-2" style="background-color:#5D87FF">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12 6.5a9.77 9.77 0 0 1 8.82 5.5c-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12A9.77 9.77 0 0 1 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5m0 5a2.5 2.5 0 0 1 0 5a2.5 2.5 0 0 1 0-5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5"/></svg></i>
                            </button>
                    </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form id="form-delete" class="modal-content">
            @method('DELETE')
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myModalLabel">
                    Hapus data
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Apakah anda yakin akan menghapus data ini?  </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-light-danger text-secondery font-medium waves-effect" data-bs-dismiss="modal">
                    Hapus
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
