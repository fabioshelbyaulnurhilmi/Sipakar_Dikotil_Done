@extends('layouts.main')
@section('page')
    {{-- @foreach ($obat as $key)
        {{ $key->obatToPenyakit->namaPenyakit }}
    @endforeach --}}
    {{-- @dd($obat) --}}
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-obat') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">Nama Penyakit</th>
                        <th class="text-center" style="width: 5%">Nama Obat</th>
                        <th class="text-center" style="width: 35%"> Cara Pakai</th>
                        <th class="text-center" style="width: 5%">Jenis Obat</th>
                        <th class="text-center" style="width: 35%"> Khasiat</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $key)
                        <tr>
                            <td class="text-center fs-sm text-center">{{ $key->obatToPenyakit->namaPenyakit }}</td>
                            <td class="fw-normal fs-sm text-center"> {{ '(' . $key->idObat . ') ' . $key->namaObat }}</td>
                            <td class="fw-normal fs-sm " style="text-align: justify">{{ $key->cara }} </td>
                            <td class="fw-normal fs-sm text-center"> {{ $key->jenis }}</td>
                            <td class="fw-normal fs-sm " style="text-align: justify"> {{ $key->khasiat }}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambarObat) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambarObat) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-obat', $key->idObat) }}" type="button"
                                        style="background-color: rgb(216, 84, 84)"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="Edit" data-bs-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    {{-- <button data-id="{{ $key->idObat }}" onclick="deletePost(this)" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled delete-user"
                                        data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button> --}}

                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                        data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $key->idObat }}"> <i
                                            class="fa fa-fw fa-trash-alt"></i></button>

                                    <div class="modal" id="modal-delete-{{ $key->idObat }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-block-vcenter" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="block block-rounded block-transparent mb-0">
                                                    <form action="{{ route('delete-data-obat', $key->idObat) }}">

                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title" style="text-align: start;">Hapus Obat
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
                                                                Apakah anda yakin menghapus {{ $key->namaObat }}
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
