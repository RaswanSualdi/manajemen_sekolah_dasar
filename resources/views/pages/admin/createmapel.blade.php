@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">Form Tambah Mapel</div>
    <div class="card-body card-block">
        <form action="{{route('mapel.store')}}" method="post">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="username2" name="mapel" placeholder="Masukkan Nama Mapel" class="form-control">
                    <div class="input-group-addon">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="username1" name="kode" placeholder="Masukkan Kode Mapel" class="form-control">
                    <div class="input-group-addon">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
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