<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = cache()->remember('contacts', 600, function () {
            return Product::with('brand', 'category', 'product_images')->orderBy('id','desc')->first();
        });
        
        return Inertia::render('User/Contact', [
            'product' => $contacts
        ]);
    }
}
