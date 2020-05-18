<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $dati = Product::all();
        dd($dati);
        return view('home', compact($dati));

    }
}
