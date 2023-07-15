<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('admin.index', ['categories' => $categories]);
        
    }

    public function create(){
        $catagories=Category::where('status',1)->get();
        return view('admin.create',compact('catagories'));
    }

    public function store(Request $request){


        $request->validate([
            'product_code' => 'required',
            'product_image' => 'required',
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'condition' => 'nullable',
            'availability' => 'nullable'
        ]);




        $imageName = time().'.'.$request->product_image->extension();
        $request->product_image->move(public_path('product_image'), $imageName);
        
        $product = new product;
        $product->category_id = $request->category_id;
        $product->product_code = $request->product_code;
        $product->product_image = $imageName;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->condition = $request->condition;
        $product->availability = $request->availability;
        $product->status = $request->status;
        $product->save();

        return redirect(route('admin.index'));




       

    }

    public function edit(Product $product){
        return view('admin.edit', ['product' => $product]);
    }

    public function update( Request $request, $id){
        $request->validate([
            'product_code' => 'required',
            'product_image' => 'nullable',
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'condition' => 'nullable',
            'availability' => 'nullable'
        ]);
        
        $product = Product::where('id',$id)->first();
        
        if (isset($request->product_image))
        {

        $imageName = time().'.'.$request->product_image->extension();
        $request->product_image->move(public_path('product_image'), $imageName);
        $product->product_image = $imageName;

        }


        $product->product_code = $request->product_code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->condition = $request->condition;
        $product->availability = $request->availability;
        $product->status = $request->status;

        $product->save();

        return redirect(route('admin.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('admin.index'))->with('success', 'Product deleted Succesffully');
    }
}
