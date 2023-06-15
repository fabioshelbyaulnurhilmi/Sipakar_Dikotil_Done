@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-gejala') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">Kode Gejala</th>
                        <th class="text-center">Nama Gejala</th>
                        <th class="text-center" style="width: 15%;">Gambar Gejala 1</th>
                        <th class="text-center" style="width: 15%;">Gambar Gejala 2</th>
                        <th class="text-center" style="width: 15%;">Gambar Gejala 3</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($gejala as $key)
                        <tr>
                            <td class="text-center fs-sm">{{ $key->idGejala }}</td>
                            <td class="fw-normal fs-sm"> {{ $key->namaGejala }}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambarGejala) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambarGejala) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambarGejala2) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambarGejala2) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambarGejala3) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambarGejala3) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-gejala', $key->idGejala) }}" type="button"
                                        style="background-color: rgb(216, 84, 84)"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="Edit" data-bs-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                                        data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $key->idGejala }}"> <i
                                            class="fa fa-fw fa-trash-alt"></i></button>

                                    <div class="modal" id="modal-delete-{{ $key->idGejala }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-block-vcenter" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="block block-rounded block-transparent mb-0">
                                                    <form action="{{ route('delete-data-gejala', $key->idGejala) }}">

                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title" style="text-align: start;">Hapus Gejala
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
                                                                Apakah anda yakin menghapus {{ $key->namaGejala }}
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
