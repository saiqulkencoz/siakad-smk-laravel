<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'nama','jam_awal','jam_akhir','hari', 'kelas_id', 'guru_id'
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    
    public function siswa(){
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
    }
}
