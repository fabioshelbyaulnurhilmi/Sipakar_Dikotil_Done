<div>
    <div class="row">
        <div class="col-2  col-lg-1 col-xl-2 col-xxl-2 ms-auto" style="position: fixed; top: 13%;right:1%; ">
            <a wire:click.prevent="store()" class="block block-rounded bg-success" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center">
                    <i class="fa fa-fw fa-magnifying-glass me-1 text-white"></i>
                    <div class="ms-3 d-none d-xl-block">
                        <p class="fw-semibold text-white mb-0">Mulai Diagnosa</p>
                    </div>
                </div>
            </a>
            <a wire:click="add({{ $i }})" class="block block-rounded bg-success" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center"
                    style="background-color: #FFBF00">
                    <i class="fa fa-fw fa-plus me-1 text-white"></i>
                    <div class="ms-3 d-none d-xl-block">
                        <p class="fw-semibold text-white mb-0">Tambah Tanaman
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-10">
            <form>
                {{-- =========== --}}
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Mulai Diagnosa Tanaman </h3>

                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        {{-- @foreach ($inputs as $key => $value) --}}
                        <div class="row push">
                            <div class="col-lg-12 col-xl-12">
                                {{-- @error("inputs.{$key}") <span class="error">{{ $message }}</span> @enderror --}}

                                @error('jnsTanaman.0')
                                    <div class="mb-1">

                                        <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                            role="alert">
                                            <div class="flex-grow-1 me-3">
                                                <p class="mb-0">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="fa fa-fw fa-exclamation-circle"></i>
                                            </div>
                                        </div>

                                    </div>
                                @enderror

                                @error('bgnTanaman.0')
                                    <div class="mb-1">
                                        <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                            role="alert">
                                            <div class="flex-grow-1 me-3">
                                                <p class="mb-0">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="fa fa-fw fa-exclamation-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                @enderror
                                @error('gjlTanaman.0')
                                    <div class="mb-1">
                                        <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                            role="alert">
                                            <div class="flex-grow-1 me-3">
                                                <p class="mb-0">
                                                    {{ $message }}
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="fa fa-fw fa-exclamation-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                @enderror
                                <div class="mb-1">
                                    <label class="form-label">Jenis Tanaman </label>
                                    <div class="row space-y-2">
                                        <div class="col space-y-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Mangga"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default1">Mangga</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Alpukat"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default2">Alpukat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Rambutan"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Rambutan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Nangka"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Nangka</label>
                                            </div>


                                        </div>
                                        <div class="col space-y-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Durian"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Durian</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Anggur"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Anggur</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Kelengkeng"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Kelengkeng</label>
                                            </div>
                                        </div>
                                        <div class="col space-y-2">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Jambu Biji"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label" for="example-radios-default3">Jambu
                                                    Biji</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Jeruk"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Jeruk</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Sawo"
                                                    wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Sawo</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($showBGN[0] == 'true')
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="mb-1">
                                        <label class="form-label">Bagian Tanaman </label>
                                        <div class=" row space-y-2">
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Buah"
                                                        wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                                    <label class="form-check-label"
                                                        for="example-radios-default11">Buah</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Batang"
                                                        wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                                    <label class="form-check-label"
                                                        for="example-radios-default12">Batang</label>
                                                </div>
                                            </div>
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Akar"
                                                        wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                                    <label class="form-check-label"
                                                        for="example-radios-default13">Akar</label>
                                                </div>
                                            </div>
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Daun"
                                                        wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Daun</label>
                                                </div>
                                            </div>
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        value="Batang dan Daun" wire:model="bgnTanaman.0"
                                                        wire:click="showGejala(0)">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Batang &
                                                        Daun</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($showGJL[0] == 'true')
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-5">
                                    <label class="form-label">Pilih Gejala </label>
                                    @php
                                        $no = 0;
                                    @endphp
                                    <div class="row">
                                        @foreach ($gejala as $key)
                                            @if (isset($jnsTanaman[0]) && isset($bgnTanaman[0]))
                                                @if ($key->Buah == $jnsTanaman[0] && $key->Bagian == $bgnTanaman[0])
                                                    <div class="col-6">
                                                        <div class="space-y-2">
                                                            <div class="col">

                                                                <div class="form-check d-flex align-items-center">
                                                                    <div>
                                                                        <input class="form-check-input"
                                                                            name="option-{{ $key->id }}"
                                                                            type="checkbox"
                                                                            id="option-{{ $key->id }}"
                                                                            value="{{ $key->id }}"
                                                                            wire:model="gjlTanaman.0.{{ $no++ }}">
                                                                    </div>
                                                                    <div class="p-1">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-xl-4">
                                                                                <img class="img-thumbnail m-2 "
                                                                                    width="500px"
                                                                                    src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="col-lg-4 col-xl-4">
                                                                                <img class="{{ !is_null($key->DetailPenyakitToGejala->gambarGejala2) ? 'img-thumbnail' : '' }} m-2 "
                                                                                    width="500px"
                                                                                    src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala2) ? '' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala2) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="col-lg-4 col-xl-4">
                                                                                <img class=" {{ !is_null($key->DetailPenyakitToGejala->gambarGejala3) ? 'img-thumbnail' : '' }}  m-2 "
                                                                                    width="500px"
                                                                                    src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala3) ? '' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala3) }}"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <label class="form-check-label"
                                                                                    for="option{{ $key->id }}">
                                                                                    <p>

                                                                                        {{ $key->DetailPenyakitToGejala->namaGejala }}
                                                                                    </p>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- @endforeach --}}
                        {{-- <div class="flex d-flex justify-between justify-content-between">
                            <button type="button" wire:click.prevent="add({{ $i }})"
                                class="btn rounded-pill btn-alt-success me-1 mb-3">
                                <i class="fa fa-fw fa-plus me-1"></i> Tambah Tanaman
                            </button>
                            <button type="button" class="btn rounded-pill  btn-alt-success me-1 mb-3"
                                wire:click.prevent="store()">
                                <i class="fa fa-fw fa-rotate me-1"></i> Mulai Diagnosa
                            </button>
                        </div> --}}
                    </div>
                </div>
                {{-- ============= --}}

                @foreach ($inputs as $key => $value)
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Mulai Diagnosa Tanaman </h3>
                            <button type="button" wire:click.prevent="remove({{ $key }})"
                                class="btn rounded-pill btn-alt-danger me-1 mb-3">
                                <i class="fa fa-fw fa-trash me-1"></i> Delete
                            </button>

                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                            <div class="row push">
                                <div class="col-lg-12 col-xl-12">
                                    @error('jnsTanaman.' . $value)
                                        <div class="mb-1">
                                            <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                                role="alert">
                                                <div class="flex-grow-1 me-3">
                                                    <p class="mb-0">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="fa fa-fw fa-exclamation-circle"></i>
                                                </div>
                                            </div>

                                        </div>
                                    @enderror

                                    @error('bgnTanaman.' . $value)
                                        <div class="mb-1">
                                            <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                                role="alert">
                                                <div class="flex-grow-1 me-3">
                                                    <p class="mb-0">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="fa fa-fw fa-exclamation-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @enderror
                                    @error('gjlTanaman.' . $value)
                                        <div class="mb-1">
                                            <div class="alert alert-warning d-flex align-items-center justify-content-between"
                                                role="alert">
                                                <div class="flex-grow-1 me-3">
                                                    <p class="mb-0">
                                                        {{ $message }}
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <i class="fa fa-fw fa-exclamation-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @enderror
                                    <div class="mb-1">
                                        <label class="form-label">Jenis Tanaman </label>
                                        <div class="row space-y-2">
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Mangga"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default1">Mangga</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Alpukat"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default2">Alpukat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Rambutan"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Rambutan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Nangka"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Nangka</label>
                                                </div>


                                            </div>
                                            <div class="col space-y-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Durian"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Durian</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Anggur"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Anggur</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Kelengkeng"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Kelengkeng</label>
                                                </div>
                                            </div>
                                            <div class="col space-y-2">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Jambu Biji"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Jambu
                                                        Biji</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Jeruk"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Jeruk</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Sawo"
                                                        wire:model="jnsTanaman.{{ $value }}"
                                                        wire:click="showBagian({{ $value }})">
                                                    <label class="form-check-label"
                                                        for="example-radios-default3">Sawo</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($showBGN[$value] == 'true')
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-1">
                                            <label class="form-label">Bagian Tanaman </label>
                                            <div class=" row space-y-2">
                                                <div class="col space-y-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Buah"
                                                            wire:model="bgnTanaman.{{ $value }}"
                                                            wire:click="showGejala({{ $value }})">
                                                        <label class="form-check-label"
                                                            for="example-radios-default11">Buah</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Batang"
                                                            wire:model="bgnTanaman.{{ $value }}"
                                                            wire:click="showGejala({{ $value }})">
                                                        <label class="form-check-label"
                                                            for="example-radios-default12">Batang</label>
                                                    </div>
                                                </div>
                                                <div class="col space-y-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Akar"
                                                            wire:model="bgnTanaman.{{ $value }}"
                                                            wire:click="showGejala({{ $value }})">
                                                        <label class="form-check-label"
                                                            for="example-radios-default13">Akar</label>
                                                    </div>
                                                </div>
                                                <div class="col space-y-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Daun"
                                                            wire:model="bgnTanaman.{{ $value }}"
                                                            wire:click="showGejala({{ $value }})">
                                                        <label class="form-check-label"
                                                            for="example-radios-default3">Daun</label>
                                                    </div>
                                                </div>
                                                <div class="col space-y-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            value="Batang dan Daun"
                                                            wire:model="bgnTanaman.{{ $value }}"
                                                            wire:click="showGejala({{ $value }})">
                                                        <label class="form-check-label"
                                                            for="example-radios-default3">Batang &
                                                            Daun</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($showGJL[$value] == 'true')
                                <div class="col-lg-12 col-xl-12">
                                    <div class="mb-5">
                                        <label class="form-label">Pilih Gejala </label>
                                        @php
                                            $no = 0;
                                        @endphp
                                        <div class="row">
                                            @foreach ($gejala as $key)
                                                @if (isset($jnsTanaman[$value]) && isset($bgnTanaman[$value]))
                                                    @if ($key->Buah == $jnsTanaman[$value] && $key->Bagian == $bgnTanaman[$value])
                                                        <div class="col-6">
                                                            <div class="space-y-2">
                                                                <div class="col">

                                                                    <div class="form-check d-flex align-items-center">
                                                                        <div>
                                                                            <input class="form-check-input"
                                                                                name="option-{{ $value }}-{{ $key->id }}"
                                                                                type="checkbox"
                                                                                id="option-{{ $value }}-{{ $key->id }}"
                                                                                value="{{ $key->id }}"
                                                                                wire:model="gjlTanaman.{{ $value }}.{{ $no++ }}">
                                                                        </div>
                                                                        <div class="p-1">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-xl-4">
                                                                                    <img class="img-thumbnail m-2 "
                                                                                        width="500px"
                                                                                        src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-lg-4 col-xl-4">
                                                                                    <img class="{{ !is_null($key->DetailPenyakitToGejala->gambarGejala2) ? 'img-thumbnail' : ' ' }} m-2 "
                                                                                        width="500px"
                                                                                        src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala2) ? '' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala2) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="col-lg-4 col-xl-4">
                                                                                    <img class="{{ !is_null($key->DetailPenyakitToGejala->gambarGejala3) ? 'img-thumbnail' : ' ' }} m-2 "
                                                                                        width="500px"
                                                                                        src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala3) ? '' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala3) }}"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-xl-12">
                                                                                    <label class="form-check-label"
                                                                                        for="option{{ $key->id }}">
                                                                                        <p>

                                                                                            {{ $key->DetailPenyakitToGejala->namaGejala }}
                                                                                        </p>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="flex d-flex justify-between justify-content-between">
                            </div>
                        </div>
                    </div>
                @endforeach


            </form>
        </div>

    </div>

</div>
