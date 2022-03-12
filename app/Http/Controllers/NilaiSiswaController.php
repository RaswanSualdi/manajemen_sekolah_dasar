<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\mapelSiswa;
use Illuminate\Support\Facades\Redirect;

class NilaiSiswaController extends Controller
{
  
    public function index($id)
    {
        $siswa = Siswa::with('mapelSiswa.mapel')->find($id);
       
        // dd([$siswa]);
        return view('pages.siswa.indexnilai')->with(['siswa'=>$siswa]);
    }

   
    public function create($id)
    {
        $mapel = Mapel::all();
        $siswa = Siswa::find($id);
        return view('pages.siswa.createnilai')->with(['mapel'=>$mapel,'siswa'=>$siswa]);

     }
 

  
    public function store(Request $request,$id)
    {
        $siswa = Siswa::find($id);
        $this->validate($request,[
            'mapel'=>'required',
            'nilai'=>'required|numeric',
            
        ]);
        if($siswa->mapelSiswa()->where('mapel_id',$request->mapel)->exists()){
            return redirect()->route('nilai.siswa.index',$siswa->id);
        }else{
            $siswa->mapelSiswa()->create(['nilai'=>$request->nilai,'mapel_id'=>$request->mapel]);
        return redirect()->route('nilai.siswa.index',$siswa->id);
        }
        
    }

    
    public function show($id)
    {
        
    }

   
    // public function edit($id)
    // {
       
    //    $mapel = Mapel::find($id);
    //    $mapel->mapelSiswa()->where('mapel_id',$id);
    //    dd($mapel);
    //    return view('pages.siswa.editnilai',compact(['mapel']));
    // }

  
    // public function update(Request $request, $id)
    // {
    //     $siswa = Siswa::find($id);
    //     mapelSiswa::where('siswa_id',$id)->update(['nilai'=>$request->nilai]);
    //     return Redirect::back();
    // }

 
    public function destroy($id)
    {
        $siswa =mapelSiswa::find($id);
        
        
        $siswa->delete();
        
        
        return Redirect::back(); // selalu gunakan kode ini untuk balik ke halaman sebelumnya
    }

    


}
