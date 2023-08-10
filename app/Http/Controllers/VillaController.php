<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Villa;

class VillaController extends Controller
{
    public function show($slug)
    {
        $villa = Villa::where('slug', $slug)->firstOrFail();

        return view('villas.show', compact('villa'));
    }
}
