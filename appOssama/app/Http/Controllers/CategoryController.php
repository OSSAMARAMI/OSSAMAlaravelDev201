<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function index() {
        $categorys = category::all();
        return view('category.index', compact('categorys'));
    }

    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',
            'slug' => 'required|string',
        ]);

        category::create($request->all());
        return redirect()->route('categorys.index')->with('success', 'category ajouté !');
    }

  
    public function update(Request $request, category $category) {
        $category->update($request->all());
        return redirect()->route('categorys.index')->with('success', 'category modifié !');
    }

   
    public function destroy(category $category) {
        $category->delete();
        return redirect()->route('categorys.index')->with('success', 'category supprimé !');
    }
    
    public function create() {
        return view('category.create');
    }

    public function edit(category $category) {
        return view('category.edit', compact('category'));
    }


    public function show(category $category) {
        return view('category.show', compact('category'));
    }
}
