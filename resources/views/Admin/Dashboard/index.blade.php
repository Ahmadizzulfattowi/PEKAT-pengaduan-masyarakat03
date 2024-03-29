@extends('layouts.admin')

@section('tittle', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Petugas</div>
                <div class="card-body"></div>
                    <div class="text-center">
                        {{ $petugas }}
                    </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Masyarakat</div>
                <div class="card-body"></div>
                    <div class="text-center">
                        {{ $masyarakat }}
                    </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Pengaduan Proses</div>
                <div class="card-body"></div>
                    <div class="text-center">
                        {{ $proses }}
                    </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Pengaduan Selesai</div>
                <div class="card-body"></div>
                    <div class="text-center">
                        {{ $selesai }}
                    </div>
            </div>
        </div>
    </div>
@endsection
