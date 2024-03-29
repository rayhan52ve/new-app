<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('order_by')->get();
        return view('Dashboard.modules.category.index', compact('categories'));
    }

    public function create()
    {
        return view('Dashboard.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:100|min:2|string',
                'slug' => 'required|max:100|min:2|unique:categories',
                'order_by' => 'required|numeric',
                'status' => 'required',

            ],

            $message = [
                'name.required' => 'Please write a category name.',
                'order_by.numeric' => 'Order By must be integer.',

            ]
        );


        $category_data = $request->all();
        $category_data['slug'] = Str::slug($request->input('slug'));
        Category::create($category_data);
        session()->flash('msg', 'Category Created Successfully.');
        session()->flash('cls', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('Dashboard.modules.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('Dashboard.modules.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:100|min:2|string',
                'slug' => 'required|max:100|min:2|unique:categories,slug,' . $category->id,
                'order_by' => 'required|numeric',
                'status' => 'required',

            ],

            $message = [
                'name.required' => 'Please write a category name.',
            ]
        );

        $category_data = $request->all();
        $category_data['slug'] = Str::slug($request->input('slug'));
        $category->update($category_data);
        session()->flash('msg', 'Category Updated Successfully.');
        session()->flash('cls', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('msg', 'Category Deleted Successfully.');
        session()->flash('cls', 'info');
        return redirect()->route('category.index');
    }
}
