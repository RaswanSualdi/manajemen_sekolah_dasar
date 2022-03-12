<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    use HasFactory;
    protected $fillable = ['guru_id','mapel_id'];
    public function guru(){
        return $this->belongsTo(Guru::class, 'guru_id','id');
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'ampel_id','id');
    }
}
