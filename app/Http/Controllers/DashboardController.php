<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::with('siswa.mapelSiswa.mapel')->get();
        return view('dashboard.index',compact('users'));
    }
}
