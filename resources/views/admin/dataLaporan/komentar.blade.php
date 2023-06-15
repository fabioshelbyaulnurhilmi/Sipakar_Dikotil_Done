@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default" style="padding-bottom: 25px">
            {{-- <button type="button" class="btn btn-alt-success me-1 mb-1">
            <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
        </button> --}}
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">ID Petani</th>
                        <th class="text-center" style="width: 15%">Nama Petani</th>
                        <th class="text-center" style="width: 15%">Nilai</th>
                        <th class="text-center" style="width: 40%">Saran</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($komentar as $rating)
                        {{-- @json($rating->chatToUser) --}}

                        <tr>
                            <td class="fs-sm text-center">{{ $rating->idUser }}</td>
                            <td class="fw-normal fs-sm text-center"> {{ $rating->username }}</td>
                            <td class="fw-normal fs-sm text-center" style="text-align: justify">

                                <div class="js-rating" data-score="{{ $rating->nilai }}" data-read-only="true"
                                    data-star-on="fa fa-fw fa-star text-info"></div>

                            <td class="fw-normal fs-sm text-center">{{ $rating->saran }}</td>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    {{-- <button data-id="{{ $rating->id }}" onclick="deletePost(this)" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled delete-user"
                                        data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button> --}}

                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                        data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $rating->id }}"> <i
                                            class="fa fa-fw fa-trash-alt"></i></button>

                                    <div class="modal" id="modal-delete-{{ $rating->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-block-vcenter" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="block block-rounded block-transparent mb-0">
                                                    <form action="{{ route('delete-komentar', $rating->id) }}">

                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title" style="text-align: start;">Hapus
                                                                Komentar
                                                            </h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-fw fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content fs-sm">
                                                            <div class="mb-4">
                                                                <img src="/homepage/assets/img/Cross.png"
                                                                    style="width: 35%">
                                                            </div>
                                                            <p style="font-weight: bold">
                                                                Apakah anda yakin menghapus komentar dari
                                                                {{ $rating->komenUser->namaPengguna }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="block-content
                                                            block-content-full text-end bg-body">
                                                            <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
