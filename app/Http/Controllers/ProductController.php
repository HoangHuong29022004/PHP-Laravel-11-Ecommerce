<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    public function products(Request $request)
    {
        $query = $request->input('query');
        $categoryName = $request->input('category_name');
        $products = Product::query();
        if ($query) {
            // Search by product name or description
            $products->where('name', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%");
        }
        if ($categoryName) {
            // Search by category name
            $products->whereHas('category', function ($q) use ($categoryName) {
                $q->where('name', 'LIKE', "%{$categoryName}%");
            });
        }
        $products = $products->paginate(9);
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }

    public function productsByCategory($categoryId, Request $request)
    {
        $query = $request->input('query');
        $category = Category::find($categoryId);
        if (!$category) {
            return redirect()->route('products');
        }
        $products = Product::query()->where('category_id', $categoryId);
        if ($query) {
            $products->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%");
            });
        }
        $products = $products->paginate(9);
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->get();
        $category = Category::find($product->category_id);
        return view('detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'category' => $category
        ]);
    }
}
