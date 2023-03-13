<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest()->paginate(10);

        return view('categories.index', compact('categories'));
    }

    public function create(){

        return view('categories.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
        ]);

        $request->user()->categories()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('message', 'Category added succesfully.');
    }

    public function edit(Category $category){

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category){

        $validated = $this->validate($request, [
            'name' => 'required',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('message', 'Category updated succesfully.');
    }

    public function destroy(Category $category){
        
        $category->delete();
        
        return back()->with('message', 'Category deleted succesfully.');
    }
}
