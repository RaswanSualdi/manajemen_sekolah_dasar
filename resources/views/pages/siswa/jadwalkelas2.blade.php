@extends('layouts.default')

@section('content')

<h2
    <span class="badge badge-secondary mb-3">Jadwal Mata Pelajaran Kelas </span>
            </h2>
    
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            
                            
      
                            <th>Hari</th>
                            
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwalkelas as $jd)
                        <tr>
                          
                           <td>{{$jd->jadwal->hari}}</td>
                           
                           
                           
                            
                           
                            <td> <a href="{{route('jadwalkelas2.show',$jd->id)}}" > 
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                          
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

@endsection