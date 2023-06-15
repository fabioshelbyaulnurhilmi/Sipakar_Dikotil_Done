@extends('layouts.main')
@section('profile')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url({{ asset('assets/jeruk.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    {{-- <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar13.jpg" alt=""> --}}
                    @if (Auth::user()->gambar)
                        <img class="img-avatar  img-avatar-thumb" src="{{ asset('storage/' . Auth::user()->gambar) }}"
                            alt="">
                    @else
                        <img class="img-avatar  img-avatar-thumb" src="/assets/media/avatars/avatar10.jpg" alt="">
                    @endif
                </div>
                <h1 class="h2 text-white mb-0">{{ Auth::user()->namaPengguna }}</h1>
                <span
                    class="text-white-75">{{ Auth::user()->userRole == 'user' ? 'Petani' : (Auth::user()->userRole == 'admin' ? 'Admin' : 'Pemilik') }}</span>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Stats -->
    <div class="bg-body-extra-light">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-12 col-md-12">
                </div>
            </div>
        </div>
    </div>
    <!-- END Stats -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <div class="block-content block-content-full">
                            <a href="{{ route('edit-profile', Auth::user()->key) }}" type="button"
                                class="btn rounded-pill btn-success me-1 mb-3" style="margin-left: 95%">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </a>
                            {{-- <input type="hidden" name="_token" value="uHjg1TD3FGp9ULu9X0Y0LlhOsnqvmOGVpxoYiZxr"> --}}
                            @csrf
                            <input type="hidden" name="idUser" value="{{ Auth::user()->idUser }}">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                                    <div class="mb-4">
                                        <div class="col-12">
                                            <label class="form-label" for="example-text-input">Id Petani</label>
                                            <input type="text" value="{{ Auth::user()->idUser }}" readonly=""
                                                class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-xl-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="example-text-input">Nama</label>
                                            <div class="input-group">
                                                <input type="text" value="{{ Auth::user()->namaPengguna }}" readonly
                                                    class="form-control " id="example-group2-input1" name="namaPengguna">
                                                {{-- <span class="input-group-text">
                                                    <i class="far fa-user"></i>
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="example-text-input">Nama Pengguna</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control "
                                                    value="{{ Auth::user()->username }}" readonly id="example-group2-input1"
                                                    name="username">
                                                {{-- <span class="input-group-text">
                                                    <i class="far fa-user"></i>
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row push">
                                    <div class="mb-4">
                                        {{-- <label class="form-label" for="example-select"> Jenis Kelamin </label>
                                        <select class="form-select " id="example-select" name="jenisKelamin"
                                            aria-readonly="">
                                            <option value=""> -- Jenis Kelamin -- </option>
                                            <option value="Laki-Laki" selected="">
                                                Laki-Laki</option>
                                            <option value="Perempuan">
                                                Perempuan</option>
                                        </select> --}}
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="example-text-input">Jenis Kelamin</label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ Auth::user()->jenisKelamin }}" readonly
                                                        class="form-control " id="example-group2-input1"
                                                        name="jenisKelamin">
                                                    {{-- <span class="input-group-text">
                                                        <i class="far fa-user"></i>
                                                    </span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </div> --}}
                                        <div class="col-lg-8 col-xl-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="example-text-input">Alamat</label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ Auth::user()->alamat }}" readonly
                                                        class="form-control  " id="example-group2-input1" name="alamat">
                                                    {{-- <span class="input-group-text">
                                                        <i class="far fa-address-card"></i>
                                                    </span> --}}
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
        <!-- END Page Content -->
    @endsection
