<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'email','nohp','nip','alamat', 'photo'
    ];
    
    public function gurumapel(){
        return $this->hasMany(GuruMapel::class,'guru_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'guru_id');
    }

    public function getPhotoAttribute($value){
        return url('storage/' . $value); //setelah melakukan ini ketiakn pada command "php artisan storage:link"
                                        //nama function ini harus getPhotoAttribute
    }


}
