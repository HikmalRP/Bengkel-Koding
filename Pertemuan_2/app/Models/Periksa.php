<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    public function pasien(){
        return $this->belongsTo(User::class, 'id_pasien');
    }
    public function dokter(){
        return $this->belongsTo(User::class, 'id_dokter');
    }
    public function detail_periksa(){
        return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    }
}
