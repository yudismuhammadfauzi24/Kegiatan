@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria current="page">Tambah Data Siswa</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                <h3>Perhatian !!!</h3>
                perhatian isis data dibawah ini dengan benar.
            </div>

            <form action="" method="">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="nama" class="form-control" id="" value="NISN">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id="" value="NISN">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">Silahkan pilih jenis kelamin</option>
                                <option value="Laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">Silahkan pilihan agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Protestan">Protestan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">Silahkan pilih jurusan</option>
                                <option value="AK">AK</option>
                                <option value="AP">AP</option>
                                <option value="RPL">RPL</option>
                                <option value="MM">MM</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">Silahkan pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">Silahkan pilih status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>
                            </select>
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