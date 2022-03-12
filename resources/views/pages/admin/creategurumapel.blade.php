@extends('layouts.default')

@section('content')


<div class="card">
    <div class="card-header">
        <strong>Horizontal</strong> Form
    </div>
    <div class="card-body card-block">
        <form action="{{route('mapel.guru.store', $mapel->id)}}" method="post" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Guru</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="guru" id="select" class="form-control">
                        <option value="0">Pilih Guru</option>
                        @foreach($guru as $g)
                        <option value="{{$g->id}}">{{$g->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-password" class=" form-control-label">Nilai</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="number" id="hf-password" name="nilai" placeholder="Masukkan Nilai..." class="form-control">
                    
                </div>
            </div> --}}
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </form>
    </div>
   
    </div>

    @endsection



