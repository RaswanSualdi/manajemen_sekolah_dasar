@extends('layouts.default')

@section('content')
<div class="col-md-12">
    <a href="{{route('mapel.create')}}"> <button type="button" class="btn btn-success btn-sm mb-3">
       
        <i class="fa fa-book"></i>&nbsp; Tambah Mapel</button></a>
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>Mapel</th>
                    <th>Kode</th>      
                    <th>Guru</th>
                    <th>Jadwal</th>
                    <th>Tambah Pengajar</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($mapel as $mpl)
                <tr>
                    <td>{{$mpl->mapel}}</td>
                    
                    <td>{{$mpl->kode}}</td>
                   
                   
                    <td>
                        @foreach($mpl->gurumapel as $m)
                        <li>{{$m->guru->nama}}</li>
                        @endforeach
                    </td>
                    <td> senin</td>
                   
                    <td> <a href="{{route('mapel.guru.index', $mpl->id)}}" > 
                        <i class="fa fa-edit"></i>
                    </a></td>
                    <td><form action="{{route('mapel.destroy', $mpl->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                         <button type="submit"{{--class="btn btn-danger btn-sm"--}}> 
                             
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                    <a href="{{route('mapel.edit', $mpl->id)}}" > 
                        <i class="fa fa-edit"></i>
                    </a>
                    
                </td>
                    {{-- {{$mpl->guru_mapel->guru->nama}} --}}
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>

@endsection