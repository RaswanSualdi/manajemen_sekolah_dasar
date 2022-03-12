<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Http\Requests\CreateSiswaRequest;
class SiswaController extends Controller
{
   
    public function index()
    {
        // $items = Siswa::with('kelas')->where('kelas_id',1)->get();       
        // return view('pages.siswa.indexkelas1')->with(['items'=>$items]);     
        
    }

    // public function indexkelas2()
    // {
    //     $items = Siswa::with('kelas')->where('kelas_id',2)->get();       
    //     return view('pages.siswa.indexkelas2')->with(['items'=>$items]);     
        
    // }

    // public function indexkelas3()
    // {
    //     $items = Siswa::with('kelas')->where('kelas_id',3)->get();       
    //     return view('pages.siswa.indexkelas3')->with(['items'=>$items]);     
        
    // }

    // public function indexkelas4()
    // {
    //     $items = Siswa::with('kelas')->where('kelas_id',4)->get();       
    //     return view('pages.siswa.indexkelas4')->with(['items'=>$items]);     
        
    // }

    // public function indexkelas5()
    // {
    //     $items = Siswa::with('kelas')->where('kelas_id',5)->get();       
    //     return view('pages.siswa.indexkelas5')->with(['items'=>$items]);     
        
    // }

    // public function indexkelas6()
    // {
    //     $items = Siswa::with('kelas')->where('kelas_id',6)->get();       
    //     return view('pages.siswa.indexkelas6')->with(['items'=>$items]);     
        
    // }

  
    public function create()
    {
        $kelas = Kelas::all();

       return view('pages.siswa.create')->with(['kelas'=>$kelas]);
    }

   
    public function store(CreateSiswaRequest $request)
    {
        $this->validate($request,[
            'nama'=>'required|max:34',
            'kelas_id'=>'required',
            'photo'=>'required|image'
        ]);
        $data = $request->all();

        $data['photo']= $request->file('photo')->store('assets/siswa', 'public');
         $siswa= Siswa::with('kelas')->create($data);
         return redirect()->route('siswa.create')
         ->withSuccess('Data'.' '. $siswa->nama.' '.' berhasil ditambahkan'.' '.' dikelas'.' '.  $siswa->kelas->kelas);
    
    }

 
    public function show($id)
    {
        $item = Siswa::findOrFail($id);
        return view('pages.siswa.show')->with(['item'=>$item]);
    }

  
    public function edit($id)
    {
        
        $item1 = Siswa::findOrFail($id);
        $mapel = Mapel::pluck('mapel');
        
        return view('pages.siswa.edit')->with(['item1'=>$item1, 'mapel'=>$mapel]);
    }

   
    public function update(Request $request, $id)
    {
        
        
        $item1 = Siswa::findOrFail($id);
         $matapelajaran = Mapel::pluck('mapel');
        
       $item1->mapel()->updateExistingPivot($request->mata_pelajaran,['nilai'=>$request->$matapelajaran]);
    
        return redirect()->route('siswa.edit');
    }

    
    public function destroy($id)
    {
        $item = Siswa::findOrFail($id);
        $item->delete();
        
        return redirect()->route('siswa.index');
    }

    // public function createNilai(){
    //     $mapel = Mapel::all();
    //     return view('pages.siswa.inputnilai')->with(['mapel'=>$mapel]);
    // }

    // public function inputNilai(Request $request, $id){
    //     $data = $request->all();
    //      $siswa= Siswa::findOrFail($id)->attach(['nilai'=>$data]);
    //     return redirect()->route('create.nilai')->withSuccess('Nilai'.$siswa->nama.'Berhasil ditambahkan');

    // }
}
