<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    
    protected $fillable = ['mapel','kode'];
        
    public function mapelSiswa(){
        return $this->hasMany(mapelSiswa::class, 'mapel_id');
    }

    public function gurumapel(){
        return $this->hasMany(GuruMapel::class,'mapel_id');
    }

    public function jadwalmapel(){
        return $this->hasMany(JadwalMapel::class, 'mapel_id');
    }
}


