<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()

{
    $category = Category::all(); 

    return view('categories.categories', ['items' => $category]);
}

    public function store(Request $request)
{
    Category::create([
        'category_name' => $request->categories123
    ]);

    return redirect('/categories');
}
    public function edit($id){

    $category = Category::findOrFail($id);

    return view('categories.edit',['emp' => $category]);
}
    public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);
    
    $category->update([
        'category_name'=>$request->categories123,
    ]);

    return redirect('/categories');
}
    public function destroy($id)
{
    $category = Category:: findOrFail($id);

    $category->delete();

    return redirect('/categories');
}
}