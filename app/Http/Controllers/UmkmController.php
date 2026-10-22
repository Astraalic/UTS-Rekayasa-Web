<?php

namespace App\Http\Controllers;

use App\Models\Umkm;

class UmkmController extends Controller
{
    public function index()
    {
        $featured = Umkm::take(2)->get();
        return view('home', compact('featured'));
    }

    public function about()
    {
        return view('about');
    }

    public function product()
    {
        $umkms = Umkm::all();
        return view('product', compact('umkms'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }
}