<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['kelas','wali_kelas'];
    public function siswa(){
        return $this->hasMany(Siswa::class, 'kelas_id');
    }

    // public function jadwalmapel(){
    //     return $this->hasMany(JadwalMapel::class, 'kelas_id');
    // }

    public function jadwal(){
        return $this->hasMany(Jadwal::class,'kelas_id');
    }

    public function jadwalkelas(){
        return $this->hasMany(Jadwalkelas::class, 'kelas_id');

    }

    
}
