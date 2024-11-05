<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukKemasan extends Model
{
    use HasFactory;

    protected $table = 'bentuk_kemasans';
    protected $guarded = ['id'];

    public function obats()
    {
        return $this->hasMany(Obat::class, 'kemasan_obat');
    }
}
