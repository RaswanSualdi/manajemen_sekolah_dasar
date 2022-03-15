<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardGuruController extends Controller
{
    public function index(){
        $users = User::with('guru.gurumapel.mapel');
        return view('dashboard.indexguru',compact('users'));
    }
}
