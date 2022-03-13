

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
                <img class="rounded-circle mx-auto d-block"  alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{$mapel->mapel}}</h5>
                <div class="location text-sm-center">
                    <i class="fa fa-map-marker"></i> {{$mapel->kode}}</div>
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
        {{-- <a href="#mymodal1"
        data-remote="{{route('mapel.guru.create',$mapel->id)}}" 
        data-toggle="modal"
        data-target="#mymodal1"
        data-title="Tambah Nilai "
       > <button class="au-btn au-btn-icon au-btn--green au-btn--small">
           
            <i class="zmdi zmdi-plus"></i>Tambah Pengajar</button></a> --}}
            <a href="{{route('mapel.guru.create',$mapel->id)}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>Tambah Guru</button></a>
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
                    <th>Nama Guru</th>
                    <th>Jadwal</th>
                    <th>Kelas</th>
                    <th>Hapus</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse($mapel->gurumapel as $mpl)
                <tr>
                    <td>{{$mpl->guru->nama}}</td>
                    <td>senin</td>
                    <td> Satu</td>
                    <td><form action="{{route('guru.destroy', $mpl->id)}}" method="post" class="d-inline" class="d-inline" onclick="return confirm('Yakin mau dihapus?')">
                        @csrf
                        @method('delete')
                         <button type="submit"{{--class="btn btn-danger btn-sm"--}}> 
                             
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    
                </td>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Mapel Ini Belum memiliki pengajar!
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

