<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required',
            'discrefstion' => 'required',
            'category_image' => 'required',
           
        ]);




        $imageName = time().'.'.$request->category_image->extension();
        $request->category_image->move(public_path('category_image'), $imageName);
        
        $category = new Category;
        $category->name = $request->name;
        $category->discrefstion = $request->discrefstion;
        $category->category_image = $imageName;
        $category->status = $request->status;
        
        $category->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            
            'name' => 'required',
            'discrefstion' => 'required',
            'category_image' => 'nullable',
           
        ]);

        $category = Category::find($id);
        
        if (isset($request->category_image))

        {

            $imageName = time().'.'.$request->category_image->extension();
            $request->category_image->move(public_path('category_image'), $imageName);
            $category->category_image = $imageName;
    
        }

        $category->name = $request->name;
        $category->discrefstion = $request->discrefstion;
        $category->status = $request->status;
        
        
        $category->update();

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('admin.category.index'))->with('success', 'Product deleted Succesffully');
    }
}
