<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{

    protected $table = 'pembayaran';
    protected $primary = 'id_pembayaran';


    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'nisn','nisn');
    }
    
    public function petugas()
    {
        return $this->belongsTo(User::class,'id_petugas','id');
    }
    use HasFactory;
}
