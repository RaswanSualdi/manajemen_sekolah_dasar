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
                <img class="rounded-circle mx-auto d-block" src="{{url($siswa->photo)}}" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{$siswa->nama}}</h5>
                <div class="location text-sm-center">
                    <i class="fa fa-map-marker"></i> {{$siswa->alamat}}</div>
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
        <a href="#mymodal"
            data-remote="{{route('nilai.siswa.create',$siswa->id)}}" 
            data-toggle="modal"
            data-target="#mymodal"
            data-title="Tambah Nilai "
            {{-- class="btn btn-info btn-sm"--}}><button class="au-btn au-btn-icon au-btn--green au-btn--small">
             
            <i class="zmdi zmdi-plus"></i>Tambah Nilai</button></a>
        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
            <select class="js-select2" name="type">
                <option selected="selected">Export</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>Mapel</th>
                    <th>Nilai</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse($siswa->mapelSiswa as $mpl)
                <tr>
                    <td>{{$mpl->mapel->mapel}}</td>
                    <td>{{$mpl->nilai}}</td>
                    <td><form action="{{route('siswa.destroy', $mpl->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                         <button type="submit"{{--class="btn btn-danger btn-sm"--}}> 
                             
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{route('siswa.edit',$siswa->id)}}"> 
                        {{-- {{route('nilai.edit',$siswa->id,$mapel->id)}} --}}
                        <i class="fa fa-edit"></i>
                        </a>
                </td>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Siswa ini belum memiliki mapel!
                        </div>
                    
                </tr>
                
                @endforelse
               
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>





</div>


@endsection