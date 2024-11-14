<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        $about = cache()->remember('about', 600, function () {
            return Product::with('brand', 'category', 'product_images')->orderBy('id','desc')->first();
        });
        
        return Inertia::render('User/About', [
            'product' => $about
        ]);
    }
}
