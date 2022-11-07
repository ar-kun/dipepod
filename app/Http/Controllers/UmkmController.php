<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Umkmcategory;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function umkm()
    {
        $title = '';
        if (request('umkmcategories')) {
            $umkmcategories = Umkmcategory::firstWhere('slug', request('umkmcategories'));
            $title = $umkmcategories->name;
        }
        return view('umkm', [
            "active" => "UMKM",
            "title" => $title,
            "lotUmkm" => Umkm::latest()->filter(request(['search', 'umkmcategories']))->paginate(7)->withQueryString()
        ]);
    }
    public function details(Umkm $umkm)
    {
        return view('detailUmkm', [
            "title" => "Details UMKM",
            "umkm" => $umkm,
            "active" => "UMKM"
        ]);
    }
}