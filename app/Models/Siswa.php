<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kelas_id','photo','alamat','nohportu'];
  
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mapelSiswa(){
        return $this->hasMany(mapelSiswa::class,'siswa_id');
    }

    public function getPhotoAttribute($value){
        return url('storage/' . $value); //setelah melakukan ini ketiakn pada command "php artisan storage:link"
                                        //nama function ini harus getPhotoAttribute
    }
    
}
