<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'email','nohp','nip','alamat'
    ];
    
    public function gurumapel(){
        return $this->hasMany(GuruMapel::class,'guru_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'guru_id');
    }


}
