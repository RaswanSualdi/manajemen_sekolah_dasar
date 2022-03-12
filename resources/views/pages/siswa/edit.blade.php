@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Nilai <strong> {{$item1->nama}}</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('siswa.update',$item1->id)}}" method="PUT" class="form-horizontal">
            {{-- @method('PUT') --}}
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Ubah Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="hf-email" name="nama" value="{{ old('nama') ? old('nama') : $item1->nama  }}" class="form-control">
                    <span class="help-block">Silahkan Masukkan Nama</span>
                </div>
            </div>
            @forelse($item1->mapel as $mp)
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-password" class=" form-control-label">{{$mp->mapel}}</label>
                </div>
                <div class="col-12 col-md-9">
                     <input type="text" id="hf-password" name="{{$mp->mapel}}" value="{{ old('nilai') ? old('nilai') : $mp->pivot->nilai  }}" class="form-control"> 
                    <span class="help-block">Ubah nilai {{$mp->mapel}}</span>
                </div>
            </div>
            @empty
            <div class="alert alert-danger" role="alert">
                Siswa ini belum memiliki mapel!
            </div>
            @endforelse
           
    
       
    
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
    </form>
    </div>
</div>

@endsection