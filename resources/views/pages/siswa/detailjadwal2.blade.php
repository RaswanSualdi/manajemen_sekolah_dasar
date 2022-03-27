@extends('layouts.default')

@section('content')

<h2
    <span class="badge badge-secondary mb-3">Jadwal Mata Pelajaran Kelas </span>
            </h2>
    
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            
                            
      
                            <th>Mapel</th>
                            <th>Waktu</th>
                            <th>Pengajar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal->jadwalmapel as $jd)
                        <tr>
                           
                           <td>{{$jd->mapel->mapel}}</td>
                           <td>{{$jd->waktu}}</td>
                            <td>Nama Guru</td>
                           
                        </tr>
                        @endforeach 
                        
                    </tbody>
                </table>
            </div>

@endsection