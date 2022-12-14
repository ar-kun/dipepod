<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkmcategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}