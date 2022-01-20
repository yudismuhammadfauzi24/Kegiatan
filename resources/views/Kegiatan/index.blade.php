@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> Data Kegiatan</li> 
               </ol>
             </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('manage-kegiatan.add-form')}}" class="btn btn-secondary">Tambah Kegiatan</a>
                            <a href="{{route('cetak.semua-data.activity')}}" class="btn btn-secondary">cetak semua data</a>
                        </div>
                        <form action="{{route('cetak.activity')}}" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="awal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="akhir" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-secondary" type="submit">Cari Data</button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Kegiatan</th>
                                        <th>Nama Kegiatan</th>
                                        <th>IDR</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatans as $it)
                                    <tr>
                                            <td>{{$it->kode_activity}}</td>
                                            <td>{{$it->nama_activity}}</td>
                                            <td>{{$it->idr}}</td>
                                            <td>{{$it->status}}</td>
                                            <td>{{$it->created_at->format('Y-m-d')}}</td>
                                        
                                        <td>
                                        <form action="{{route('destroy.data.activity', $it->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('manage-kegiatan.add-form.edit-kegiatan', $it->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                                             <button class="btn btn-secondary btn-sm" type="submit">Hapus</button>
                                        </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection