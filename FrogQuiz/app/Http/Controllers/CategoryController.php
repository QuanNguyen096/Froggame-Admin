<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = DB::table('categories')
            ->leftJoin('questions', 'categories.id', '=', 'questions.category_id')
            ->select('categories.*', DB::raw('count(questions.category_id) as total_question'))
            ->groupBy('categories.id','categories.name','categories.created_at','categories.updated_at','categories.deleted_at')
            ->get();

        return view('category',['list_category'=>$list_category]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Validate requests
        $request->validate([
            'name'=>'required',
        ]);
        //dd($request);
        //Insert data into database
        $category = new Category;
        $category->name = $request->name;
        $category->created_at = date('Y-m-d H:i:s');
        $category->save();

        
    
        if($category){
           return back()->with('success','Thêm thành công');
        }else{
            return back()->with('fail','Thêm thất bại, thử lại');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json([
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category_id = $request->id;
        $category = Category::find($category_id);
        $category->name = $request->category_name;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->update();

        if($category){
            return back()->with('success','Cập nhật thành công');
         }else{
             return back()->with('fail','Cập nhật thất bại, thử lại');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        //dd($category);
        $category->delete();
        return back()->with('success','Xóa thành công');
    }
}
