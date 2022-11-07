<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['umkmcategories'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_product', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

        $query->when($filters['umkmcategories'] ?? false, function ($query, $umkmcategories) {
            return $query->whereHas('umkmcategories', function ($query) use ($umkmcategories) {
                $query->where('slug', $umkmcategories);
            });
        });
    }

    public function umkmcategories()
    {
        return $this->belongsTo(Umkmcategory::class, 'umkmcategories_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}