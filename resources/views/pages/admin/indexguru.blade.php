@extends('layouts.default')

@section('content')

<h2>Daftar Guru
    <span class="badge badge-secondary mb-3">SD 147 Pangaparang</span>
            </h2>
    
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Mapel Yang diampuh</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td><img src="{{url($item->photo)}}" alt=""></td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                @foreach($item->gurumapel as $mpl)
                                <li>{{$mpl->mapel->mapel}}</li>
                                @endforeach
                            </td>
                           
                           
                            
                            <td>  
                               
                               <a href="{{route('daftarguru.edit', $item->id)}}" > 
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('daftarguru.destroy', $item->id)}}" method="post" class="d-inline" >
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