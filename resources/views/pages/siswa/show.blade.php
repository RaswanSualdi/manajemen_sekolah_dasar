{{-- <table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{$item->nama}}</td>
    </tr>
   
    <tr>
        <th>Daftar Nilai</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Mapel</th>
                    <th>Nilai</th>
                </tr>
                @foreach ($item->mapel as $detail)
                    <tr>
                        <td>{{$detail->mapel}}</td>
                        <td>{{$detail->pivot->nilai}}</td>
                        
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
 
</table> --}}

