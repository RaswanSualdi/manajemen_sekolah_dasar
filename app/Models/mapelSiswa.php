<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapelSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nilai','mapel_id','siswa_id'
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id','id');
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
