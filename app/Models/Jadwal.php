<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    
    public function jadwalmapel(){
        return $this->hasMany(JadwalMapel::class, 'jadwal_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id','id');
    }

    public  function jadwalkelas(){
        return $this->hasMany(Jadwalkelas::class, 'jadwal_id');
    }
}
