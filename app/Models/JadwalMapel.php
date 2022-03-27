<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMapel extends Model
{
    use HasFactory;
    protected $fillable = ['jadwal_id','mapel_id','kelas_id','waktu'];
    public function jadwal(){
        return $this->belongsTo(Jadwal::class, 'jadwal_id','id');
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
