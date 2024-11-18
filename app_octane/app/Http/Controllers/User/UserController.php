<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $products = cache()->remember('products_home', 600, function () {
            return Product::with('brand', 'category', 'product_images')->orderBy('id','desc')->limit(30)->get();
        });

        $users = cache()->remember('users_home', 600, function () {
            return User::limit(10)->get();
        });

        return Inertia::render('User/Index', [
            'products'=> $products,
            'users'=> $users,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
}
