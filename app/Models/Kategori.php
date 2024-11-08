<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = ['id'];

    public function peserta()
    {
        return $this->hasMany(Peserta::class, 'id_kategori');
    }
}
