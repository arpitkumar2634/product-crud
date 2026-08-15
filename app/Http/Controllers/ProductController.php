<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
     
        $product = Product::latest()->paginate(5);
        
        return view('product.index',compact('product'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
     
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->route('product.index')
            ->with('success','Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }
  

    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $product->update(['image' => $imageName]);
        }

        $product->update([
            'name' => $request->name
        ]);

        return redirect()->route('product.index')
            ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $imagePath = public_path('images/' . $product->image);
        
        if (file_exists($imagePath)) {
            if (!unlink($imagePath)) {
                return redirect()->route('product.index')
                    ->with('error','Product deleted, but failed to remove image file.');
            }
        }
        
        $product->delete();
        return redirect()->route('product.index')
            ->with('success','Product deleted successfully');
    }
}
