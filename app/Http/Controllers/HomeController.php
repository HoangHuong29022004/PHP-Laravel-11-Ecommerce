<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(8);
        $categories = Category::with([
            'products' => function ($query) {
                $query->inRandomOrder()->limit(1);
            }
        ])->get();
        $soldProducts = Product::where('hidden', 0)
            ->orderBy('sold', 'desc')
            ->take(2)
            ->get();
        $oldProduct = DB::table('products')->orderBy('id', 'desc')->first();
        return view('home', ['products' => $products, 'categories' => $categories, 'soldProducts' => $soldProducts, 'oldProduct' => $oldProduct]);
    }
}
