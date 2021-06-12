<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama', 'jurusan', 'guru_id'
    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
