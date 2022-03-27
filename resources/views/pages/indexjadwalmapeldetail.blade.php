@extends('layouts.default')

@section('content')
<h2>Detail Jadwal
    <span class="badge badge-secondary mb-3">SD 147 Pangaparang</span>
            </h2>
    
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            
                            <th>Hari</th>
                            <th>Jadwal Mapel</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelas->jadwalkelas as $kls)
                        <tr>
                            <td>{{$kls->jadwal->hari}}</td>
                            {{-- <td><a href="{{route('detailmapel', $kls->id )}}">Jadwal</a></td> --}}
                            <td>@foreach($kls->jadwal->jadwalmapel as $k)
                                <li>{{$k->mapel->mapel}} (pukul : {{$k->waktu}})</li>
                                @endforeach
                            </td>
                           
            
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

@endsection