<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{

    protected $table = 'guru';

    protected $fillable = [
        'nip', 'nama', 'jenis_kelamin', 'agama', 'telepon', 'user_id'
    ];

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function mapel(){
        return $this->hasMany(Kelas::class);
    }
}
