@extends('templates.frontend.master')

@section('content')
    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Struktur Kepengursan</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ url('') }}" class="me-1">Home</a> > Tentang Kami > Struktur Kepengursan
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-60">
        <img src="{{ $periode->fotoUrl() }}" alt="{{ $periode->nama }}" class="rounded mx-auto d-block">
        <h1 class="h5 text-center text-uppercase">STRUKTUR KEPENGURUSAN<br>KELUARGA MAHASISWA DAN PELAJAR CIANJUR
            KIDUL<br>PERIODE {{ $periode->dari }} - {{ $periode->sampai }}<br> {{ $periode->nama }}</h1>
        <div class="d-flex justify-content-center">
            <table class="table mt-60" style="width: auto">
                @foreach ($member->utama as $utama)
                    <tr>
                        <td style="border: 0;  " class="py-10 px-3 h6" colspan="2">
                            {{ $utama->jabatan->nama }}</td>
                        <td style="border: 0; max-width: 5px; " class="py-10 px-3 h6">:</td>
                        <td style="border: 0; " class="py-10 px-3 h6 text-primary">
                            @php
                                $url = $utama->pejabat->username ? url($utama->pejabat->username) : route('anggota.id', $utama->pejabat->id);
                            @endphp
                            <a href="{{ $url }}">{{ $utama->pejabat->name }}</a>
                        </td>
                    </tr>
                @endforeach

                @foreach ($member->bidang as $bidang)
                    <tr>
                        <td colspan="4" style="border: 0;" class="py-10 px-3 h6 text-primary">
                            <a href="{{ route('about.kepengurusan.bidang', $bidang->header->slug) }}">
                                {{ $bidang->header->nama }}
                            </a>
                        </td>
                    </tr>

                    @foreach ($bidang->body as $body)
                        @if ($body->list)
                            <tr>
                                <td style="border: 0;" class="py-10 px-3 h6"></td>
                                <td style="border: 0;" class="py-10 px-3 h6">{{ $body->jabatan->nama }}</td>
                                <td style="border: 0;" class="py-10 px-3 h6">:</td>
                                <td style="border: 0;" class="py-10 px-3 h6 text-primary">
                                    @if (isset($body->pejabat[0]))
                                        @php
                                            $pejabat = $body->pejabat[0];
                                            $url = $pejabat->username ? url($pejabat->username) : route('anggota.id', $pejabat->id);
                                        @endphp
                                        <a href="{{ $url }}">{{ $pejabat->name }}</a>
                                    @endif
                                </td>
                            </tr>
                            @foreach ($body->pejabat as $key => $pejabat)
                                @if ($key != 0)
                                    <tr>
                                        <td style="border: 0;" class="py-10 px-3 h6"></td>
                                        <td style="border: 0;" class="py-10 px-3 h6"></td>
                                        <td style="border: 0;" class="py-10 px-3 h6">:</td>
                                        <td style="border: 0;" class="py-10 px-3 h6 text-primary">
                                            @php
                                                $url = $pejabat->username ? url($pejabat->username) : route('anggota.id', $pejabat->id);
                                            @endphp
                                            <a href="{{ $url }}">{{ $pejabat->name }}</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                            <tr>
                                <td style="border: 0;" class="py-10 px-3 h6"></td>
                                <td style="border: 0;" class="py-10 px-3 h6">{{ $body->jabatan->nama }}</td>
                                <td style="border: 0;" class="py-10 px-3 h6">:</td>
                                <td style="border: 0;" class="py-10 px-3 h6 text-primary">
                                    @php
                                        $pejabat = $body->pejabat;
                                        $url = $pejabat->username ? url($pejabat->username) : route('anggota.id', $pejabat->id);
                                    @endphp
                                    <a href="{{ $url }}">{{ $pejabat->name }}</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection
