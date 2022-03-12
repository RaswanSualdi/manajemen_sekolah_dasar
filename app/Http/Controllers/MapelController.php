<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Guru;

use Illuminate\Support\Facades\Redirect;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::with('gurumapel.guru')->get();
        
        return view('pages.siswa.indexmapel')->with(['mapel'=>$mapel]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('pages.admin.createmapel',compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mapel'=>'required',
            'kode'=>'required|min:3',
            
        ]);
        $data = $request->all();   

        Mapel::create($data);
        return redirect()->route('mapel.index');


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('pages.admin.editgurumapel',compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mapel = Mapel::find($id);
        // $this->validate($request,[
        //     'mapel'=>'required',
        //     'kode'=>'required'
        // ]);
        $data = $request->all();
        $mapel->update($data);
        return redirect()->route('mapel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        $mapel->gurumapel()->delete();
        return Redirect::back();
    }

  

    
}
