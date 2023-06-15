@extends('layouts.main')
@section('page')
    <div id="my-content-div">
        <div style="    page-break-before: always;            "> </div>

        <div class="mt-4">

            <div>
                <p>
                    {{-- Laporan
                Riwayat Diagnosa Plants Shop Guyung
                Jln. Raya Kendal-Ngawi, Ds.Guyung, Kec.Gerih, Kab.Ngawi Jawa Timur 63272 --}}
                </p>
            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div>
                        <h4 class="block-title">
                            Detail Penyakit
                        </h4>
                    </div>
                    <table class="table table-bordered table-hover table-vcenter">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                                <td class="fw-semibold fs-sm">
                                    <img src=" {{ asset('storage/' . $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) }}"
                                        alt="" style="width: 50%">

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Nama</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit }}

                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Keterangan</th>
                                <td class="fw-semibold fs-sm">
                                    <p>

                                        {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->keterangan }}
                                    </p>

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Solusi</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->solusi }}

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div style="    page-break-before: always;            "> </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div>
                        <h4 class="block-title">
                            Detail Obat
                        </h4>
                    </div>
                    <table class="table table-bordered table-hover table-vcenter">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                                <td class="fw-semibold fs-sm">
                                    <img src=" {{ asset('storage/' . $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->gambarObat) }}"
                                        alt="" style="width: 50%">

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Nama</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->namaObat }}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Jenis</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->jenis }}
                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Khasiat</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->khasiat }}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Cara Pengggunaan Obat</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->cara }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @foreach ($diagnosas as $key2)
                @foreach ($key2->DiagnosaToDetail as $key1)
                    <div class="block block-rounded">
                        <div class="block-content">
                            <div>
                                <h4 class="block-title">
                                    Gejala {{ '(' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->idGejala . ')' }}
                                </h4>
                            </div>
                            <table class="table table-bordered table-hover table-vcenter">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                                        <td class="fw-semibold fs-sm">
                                            {{-- src="{{ is_null($key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) }}" --}}
                                            <img src=" {{ asset('storage/' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala) }}"
                                                alt="" style="width: 25%">
                                            <img src=" {{ asset('storage/' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala2) }}"
                                                alt="" style="width: 25%">
                                            <img src=" {{ asset('storage/' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala3) }}"
                                                alt="" style="width: 25%">
                                            {{-- {{ $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala }} --}}

                                        </td>

                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 30%" scope="row">Detail Gejala</th>
                                        <td class="fw-semibold fs-sm">
                                            {{ $key1->RelasidetailPenyakit->DetailPenyakitToGejala->namaGejala }}

                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                @endforeach
            @endforeach
        @endsection
