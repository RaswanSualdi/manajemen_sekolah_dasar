@extends('layouts.default')

@section('content')
<h2>Daftar Guru
    <span class="badge badge-secondary mb-3">SD 147 Pangaparang</span>
            </h2>
    
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            
                            <th>Kelas</th>
                            <th>Jadwal Mapel</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelas as $kls)
                        <tr>
                            <td>{{$kls->kelas}}</td>
                            <td><a href="{{route('detailjadwal', $kls->id)}}">Detail</a></td>
                           
            
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

@endsection