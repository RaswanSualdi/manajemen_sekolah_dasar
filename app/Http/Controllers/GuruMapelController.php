<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\GuruMapel;
use Illuminate\Support\Facades\Redirect;

class GuruMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $mapel = Mapel::with('gurumapel')->find($id);
        return view('pages.admin.addgurumapel', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       $guru = Guru::all();
       $mapel = Mapel::find($id);
       return view('pages.admin.creategurumapel',compact(['mapel','guru']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $mapel = Mapel::find($id);
        if($mapel->gurumapel()->where('guru_id', $request->guru )->exists()){
            return redirect()->route('mapel.guru.index', $mapel->id);
        }else{
            $mapel->gurumapel()->create(['guru_id'=>$request->guru]);
            return redirect()->route('mapel.guru.index', $mapel->id);
        }
        
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gurumapel = GuruMapel::find($id);
        $gurumapel->delete();
        return Redirect::back();
    }
}
