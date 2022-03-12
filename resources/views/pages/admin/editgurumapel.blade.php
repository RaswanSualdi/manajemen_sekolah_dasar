@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Edit Mapel</strong>
        <small>{{$mapel->mapel}}</small>

    </div>
    <div class="card-body card-block">
        <form action="{{ route('mapel.update',$mapel->id) }}" method="POST">
           @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Mapel</label>
                <input type="text" name="mapel" value="{{ old('mapel') ? old('mapel') : $mapel->mapel  }}"
                    class="form-control @error('mapel') is Invalid @enderror ">
                    @error('mapel') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="type" class="form-control-label">Kode Mapel</label>
                <input type="text" name="kode" value="{{ old('kode') ? old('kode') : $mapel->kode}}"
                    class="form-control @error('kode') is Invalid @enderror ">
                    @error('kode') <div class="text-muted">{{$message}}</div> @enderror
            </div>
 
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Ubah Barang</button>
            </div>
            
        </form>
    </div>
</div>
@endsection