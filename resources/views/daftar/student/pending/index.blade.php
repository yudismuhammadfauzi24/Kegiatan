@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Verifikasi Pendaftaran</li> 
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Kegiatan</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>TGL Daftar</th>
                                        <th>Status</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendings as $pembayaran)
                                    <tr>
                                        <td>
                                            <a href="{{route('user.ambil-form', $pembayaran->id)}}"
                                                class="bnt bnt-outline-info btn-sm">
                                                {{$pembayaran->activity->kode_activity}}
                                            </a>
                                        </td>
                                        <td>NISN Belum terisi</td>
                                        <td>{{$pembayaran->user->name}}</td>
                                        <td>{{$pembayaran->created_at->diffForHumans()}}</td>
                                        <td>
                                            <span class="badge bg-secondary text-white">
                                                {{$pembayaran->status}}</td>
                                            </span>
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{$pendings->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection