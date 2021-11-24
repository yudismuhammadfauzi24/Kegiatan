@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria current="page">Edit Data Kegiatan</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                <h3>Perhatian !!!</h3>
                perhatian isi data dibawah ini dengan benar.
            </div>

            <form action="{{route('manage-kegiatan.update',$kegiatan->id)}}" method="post">
                @csrf
                    @method('PATCH')

 
               <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kode_activity">Kode Kegiatan</label>
                            <input type="text" name="kode_activity" class="form-control" id="kode_activity" value="{{$kegiatan->kode_activity}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nama_activity">Nama Kegiatan</label>
                            <input type="text" name="nama_activity" class="form-control" id="nama_activity" value="{{$kegiatan->nama_activity}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" name="image" class="form-control" id="image" value="{{$kegiatan->image}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="idr">IDR</label>
                            <input type="text" name="idr" class="form-control" id="idr" value="{{$kegiatan->idr}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="">Silahkan pilih status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="desc">Keterangan</label>
                            <input type="text" name="desc" class="form-control" id="desc" value="{{$kegiatan->desc}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tgl_awal">Tanggal Mulai</label>
                            <input type="text" name="tgl_awal" class="form-control" id="tgl_awal" value="{{$kegiatan->tgl_awal}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="text" name="tgl_selesai" class="form-control" id="tgl_selesai" value="{{$kegiatan->tgl_selesai}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection