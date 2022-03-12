@extends('layouts.default')

@section('content')
        <h2>Daftar siswa kelas
                 <span class="badge badge-secondary mb-3">Empat</span>
            </h2>
<div class="table-responsive table--no-card m-b-40">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                
                <th>Foto</th>
                <th>Nama</th>
                <th>Input Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{$item->photo}}</td>
                <td>{{$item->nama}}</td>
                <td><a href="{{route('nilai.siswa.index', $item->id)}}" {{-- class="btn btn-primary btn-sm"--}}> 
                    <i class=" fa fa-plus-square"></i>
                    </a>
                </td>
                <td>  <a href="#mymodal"
                    data-remote="{{route('siswa.show', $item->id)}}" 
                    data-toggle="modal"
                    data-target="#mymodal"
                    data-title="Detail Nilai {{$item->nama}}"
                    {{-- class="btn btn-info btn-sm"--}}> 
                       <i class="fa fa-eye"></i>
                   </a>
                   
                   <a href="{{route('siswa.edit', $item->id)}}" {{-- class="btn btn-primary btn-sm"--}}> 
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{route('siswakelas4.destroy', $item->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                     <button {{--class="btn btn-danger btn-sm"--}}> 
                        <i class="fa fa-trash"></i>
                    </button>
                </form>

                </td>

                
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection