<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = 'satuans';
    protected $guarded = ['id'];

    public function obats()
    {
        return $this->hasMany(Obat::class, 'satuan');
    }
}
