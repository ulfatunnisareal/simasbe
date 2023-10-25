@extends('app')
@section('content')
<div class="container p-3">
    <p class="fs-5 font-weight-bold">Detail Surat |  {{ $suratkeluar->no_surat }}</p>
    <div class="surat-resmi">
        <div class="row">
            <div class="col-md-6">
                <div class="surat-info">
                    <p><strong>Nomor Surat</strong></p>
                    <p><strong>Tujuan</strong></p>
                    <p><strong>Tanggal Surat</strong></p>
                    <p><strong>Tanggal Keluar</strong></p>
                    <p><strong>File Surat</strong></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="surat-data">
                    <p> : {{ $suratkeluar->no_surat }}</p>
                    <p> : {{ $suratkeluar->tujuan }}</p>
                    <p> : {{ $suratkeluar->tgl_surat }}</p>
                    <p> : {{ $suratkeluar->tgl_keluar }}</p>
                    <p> : <a href="{{ url('suratkeluarfile/' . $suratkeluar->file_surat) }}" target="_blank">{{ $suratkeluar->file_surat }}</a></p>
                </div>
            </div>
        </div>
        <div class="file">
            <p><strong>Isi Ringkas:</strong></p>
            <p class="isi-ringkas">{{ $suratkeluar->ringkasan }}</p>
        </div>
    </div>
</div>
@endsection
