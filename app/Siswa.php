<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis', 'nama', 'jenis_kelamin', 'agama', 'tmp_lahir', 'tgl_lahir', 'kelas_id', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mapel(){
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
