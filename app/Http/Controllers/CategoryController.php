<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('categories.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $data = [
            'cat_name' => $request->cat_name,
            'slug' => str_replace(" ", "-", $request->cat_name),
            'status' => $request->status,
        ];

        $category->create($data);
        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, $id)
    {
        //$category = //DB::select('select * from categories where id = ?', [$id]);
        $show = $category->find($id);
        $category = $show->first();
        return view('categories.show')->with(['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $cat = $category->find($id);
        return view('categories.edit')->with(['category' => $cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, int $id)
    {
        $data = [
            'cat_name' => $request->cat_name,
            'slug' => str_replace(" ", "-", $request->cat_name),
            'status' => $request->status,
        ];
        $category->where('id', $id)->update($data);
        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {
        $category->destroy($id);
        return redirect()->route('categories');
    }
}
