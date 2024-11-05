<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukSediaan extends Model
{
    use HasFactory;

    protected $table = 'bentuk_sediaans';
    protected $guarded = ['id'];

    public function obats()
    {
        return $this->hasMany(Obat::class, 'bentuk_sediaan');
    }
}
