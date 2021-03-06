<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Guru::with('gurumapel.mapel')->get();
        // dd($items);
        return view('pages.admin.indexguru',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.createguru');
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
            'nama'=>'required',
            'email'=>'required',
            'nip'=>'required',
            'alamat'=>'required',
            'photo'=>'required|image',
        ]);
        $data = $request->all();
        $data['photo']= $request->file('photo')->store('assets/siswa', 'public');
        $guru = Guru::create($data);
         $user = new User([
             'name'=>$guru->nama,
             'guru_id'=> $guru->id,
             'email'=>$guru->email,
             'role'=>'guru',
             'password' => bcrypt('guru'),

         ]);

         $guru->user()->save($user);
         return redirect()->route('daftarguru.index')->withSuccess('data guru berhasil ditambahkan');

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
        $guru = Guru::find($id);
        // dd($guru);
        $guru->delete();
         return redirect()->route('daftarguru.index')->withSuccess('data '.$guru->nama. ' telah dihapus');
    }
}
