@extends('welcome')

@section('content')
<div class="container mb-3">
    <div class="row" style="margin-top: -70px;">
    @foreach($kegiatans as $kegiatan)
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h6>{{$kegiatan->nama_activity}}</h6>
                    <p class="text-muted">
                        {{$kegiatan->status}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="row py-4">
    @foreach($activitys as $activity)
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow">
                <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="{{url('storage/. $activity->image')}}" width ="100px" heigth="100px" class="rounded" alt="">

                                <div class="ml-3">
                                <h3>{{$activity->nama_activity}}</h3>
                                <p>{{$activity->desc}}</p>
                                <div class="d-flex align-items-center">
                                    <h6 class="mr-3">created, {{$activity->created_at->diffForHumans()}}</h6>
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-outline-info">
                                        Tersedia
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                <div>
                                    <a href="https://" class="btn btn-sm btn-outline-info">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection