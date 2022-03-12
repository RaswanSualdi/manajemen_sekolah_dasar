@extends('layouts.default')

@section('content')


<div class="card">
    <div class="card-header">Form Tambah Siswa</div>
    <div class="card-body card-block">
        <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="username2" name="nama" placeholder="Nama Lengkap" class="form-control">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>

            
            <div class="row form-group">
        
                <div class="col-12 col-md-12">
                    
                    <select name="kelas_id" id="select" class="form-control">
                        <option value="0">Pilih Kelas</option>
                        @foreach($kelas as $k)
                        <option value="{{$k->id}}">{{$k->kelas}}</option>
                        @endforeach
                        
                    </select>
                    
                </div>
            </div>

              
            <div class="form-group">
                <label for="photo" class="form-control-label">Foto </label>
                <input type="file" name="photo" value="{{ old('photo') }}"
                    class="form-control @error('photo') is Invalid @enderror " accept="image/*">
                    @error('photo') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            @if(Session::has('fail'))
                 <div class="alert alert-danger">
                {{Session::get('fail')}}
                </div>
             @endif

             @if(Session::has('success'))
         <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
            @endif
            
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection