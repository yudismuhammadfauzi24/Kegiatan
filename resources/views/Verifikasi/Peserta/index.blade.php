@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('verifikasi-pendaftaran.ulang')}}"
                        class="btn btn-secondary">Daftar Ulang</a>
                        <a href="{{route('verifikasi-pendaftaran.ulang')}}"
                        class="btn btn-secondary">Peserta</a>
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-secondary">Cari Data</button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kegiatan</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>TGL. Daftar</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($registers as $register)
                                <tr>
                                    <td>{{$register->activity->kode_activity}}</td>
                                    <td>belum dibuat</td>
                                    <td>{{$register->user->name}}</td>
                                    <td>{{$register->created_at->diffForHumans()}}</td>
                                    <td>
                                        <span class="bagde bagde-info">
                                            {{$register->status}}
                                        </span>
                                    </td>
                                    <td>
                                        <form action="{{route('verifikasi-pendaftaran.accept', $register->id)}}" method="post">

                                            <button="" class="btn btn-secondary btn-sm">Cetak sertifikat</button>
                                        </form> 
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection