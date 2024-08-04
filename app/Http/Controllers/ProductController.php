<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();

        return view('dashboard.Admin.Product.Index', compact('products'));
    }

    public function create()
    {
       // $categories = Category::all();
        //$subcategories = Subcategory::all();

        return view('dashboard.Admin.Product.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'options' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->options = $request->options;

        if ($request->hasFile('image')) {
            $images = [];

            foreach ($request->file('image') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $images[] = $imageName;
            }

            $product->image = json_encode($images);
        }

        $product->save();

        return redirect()->route('Product.Index');
    }

   

    public function edit(Product $product)
    {
      //  $categories = Category::all();
    //$subcategories = Subcategory::all();

        return view('dashboard.Admin.Product.Edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->options = $request->input('options');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->extension();
            $image->move(public_path('uploads/products'), $name);
            $product->image = $name;
        }

        $product->save();

        return redirect()->route('Product.Index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('Product.Index');
    }
}
