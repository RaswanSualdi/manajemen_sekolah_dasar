@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    @foreach($users as $user)
                    @if($user->id == Auth::user()->id && $user->role == 'siswa')
                    <img class="rounded-circle mx-auto d-block" src="{{url($user->siswa->photo)}}" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">{{$user->siswa->nama}}</h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i> {{$user->siswa->alamat}}</div>
                        
                    @endif
                   
                    @endforeach
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#">
                        <i class="fa fa-facebook pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-pinterest pr-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-8 ">
        <div class="table-data__tool-right mb-2">
           
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Export</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
        
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Mapel</th>
                        <th>Nilai</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    @if($user->id == Auth::user()->id && $user->role == 'siswa')
                        @foreach($user->siswa->mapelSiswa as $mpl)
                    <tr>
                        <td>{{$mpl->mapel->mapel}}</td>
                        <td>{{$mpl->nilai}}</td>
                      
                        {{-- @empty
                            <div class="alert alert-danger" role="alert">
                                Kamu belum Memiliki nilai!
                            </div> --}}
                        
                    </tr>
                        @endforeach
                    @endif
                    
                    @endforeach
                   
                </tbody>
            </table>
        </div>
       
    </div>
    
    
{{-- 
    @elseif($user->id == Auth::user()->id && $user->role == 'admin')
    <h1>Selamat Datang Admin</h1>
    @else
    <h1>Halo Bu guru</h1> --}}
    
    
    
    
    
    
    </div>
@endsection