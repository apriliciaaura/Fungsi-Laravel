<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['kode', 'nama', 'semester'];

    public function siswa(){
    	return $this -> belongsToMany(Siswa::class)->withPivot(['nilai']);
    }
}
