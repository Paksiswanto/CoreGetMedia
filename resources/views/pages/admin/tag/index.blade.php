@extends('layouts.admin.app')

@section('style')
<style>
    .card-table{
        background-color: #fff;
        padding: 25px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')

    <div class="mb-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <form class="d-flex">
                    <div class="position-relative d-flex">
                        <div class="">
                            <input type="text" name="search" id="search-name" class="form-control search-chat py-2 px-5 ps-5"
                            value="{{ request('search') }}" placeholder="Cari..">
                            <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex justify-content-end">
                <button type="button" style="background-color: #175A95;" class="btn btn-mdx text-white px-5"
                    data-bs-toggle="modal" data-bs-target="#tambahdataLabel">
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

    <div class="modal fade" id="tambahdataLabel" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdataLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-create" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tag" class="form-label">Tambahkan Tag: </label>
                            <input type="text" id="tag" name="name" placeholder="Tag"
                                value="{{ old('tag') }}" class="form-control @error('tag') is-invalid @enderror">
                            @error('tag')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="background-color: #FBF2EF;" class="btn btn-rounded btn-light-danger text-danger"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" style="background-color: #E6FFFA;" class="btn text-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive rounded-2">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead>
                <tr>
                    <th style="background-color: #D9D9D9;">No</th>
                    <th style="background-color: #D9D9D9;">Tag</th>
                    <th style="background-color: #D9D9D9;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>news</td>
                    <td>
                        <button style="background-color: #FFD643;" class="btn btn-sm btn-edit text-white me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="#ffffff" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h8.925l-2 2H5v14h14v-6.95l2-2V19q0 .825-.587 1.413T19 21zm4-6v-4.25l9.175-9.175q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4t-.137.738t-.438.662L13.25 15zM21.025 4.4l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z"/></svg>
                        </button>
                        <button type="submit" style="background-color: #EF6E6E" class="btn btn-sm btn-delete text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="#ffffff" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zm-7 11q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17M7 6v13z"/></svg>    
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="modal-update Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal content -->
                <div class="modal-header">
                    <h3 class="modal-title">Edit data tag</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <form id="form-update">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Edit Tag:</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Tags">
                            @error('name')
                                <span class="invalid-feedback" role="alert" style="color: red;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-rounded btn-light-warning text-warning">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection