@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Ubah Nilai</strong> Form
    </div>
    <div class="card-body card-block">
        <form action="#" method="PUT" class="form-horizontal">
            @csrf
           
            <div class="form-group">
                <label for="nilai" class="form-control-label">{{$mapel1->mapel}}</label>
                <input type="number" name="nilai" value="{{ old('nilai') ? old('nilai') : $mapel->nilai  }}"
                    class="form-control @error('nilai') is Invalid @enderror ">
                    @error('nilai') <div class="text-muted">{{$message}}</div> @enderror
            </div>
            
       
    </div>
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
@endsection