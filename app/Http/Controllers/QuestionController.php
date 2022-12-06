<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = DB::table('categories')
            ->select('categories.id','categories.name')
            ->get();

        
        
        return view('add-questions',['list_category'=>$list_category]);
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
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'score'=>'required',
            'category'=>'required',
        ]);
    
        //Insert data into database
        $question = new Question;
        $question->question = $request->question;
        $question->A = $request->a;
        $question->B = $request->b;
        $question->C = $request->c;
        $question->D = $request->d;
        $question->score = $request->score;
        $question->category_id = $request->category;
        $question->save();

        
    
        if($question){
           return back()->with('success','Thêm thành công');
        }else{
            return back()->with('fail','Thêm thất bại, thử lại');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $list_category = DB::table('categories')
            ->leftJoin('questions', 'categories.id', '=', 'questions.category_id')
            ->select('categories.*', DB::raw('count(questions.category_id) as total_question'))
            ->groupBy('categories.id','categories.name','categories.created_at','categories.updated_at','categories.deleted_at')
            ->get();

        $list_question = DB::table('questions')
            ->Join('categories', 'questions.category_id', '=', 'categories.id')
            ->select('questions.id','questions.question','questions.A','questions.B','questions.C','questions.D','questions.score','questions.created_at','questions.category_id','categories.name')
            ->groupBy('questions.id','questions.question','questions.A','questions.B','questions.C','questions.D','questions.score','questions.created_at','questions.category_id','categories.name')
            ->get();
        //dd($list_question);
        return view('view-questions',['list_question'=>$list_question,'list_category'=>$list_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$question_detail = Question::find($id);
        $question_detail = DB::table('questions')
            ->Join('categories', 'questions.category_id', '=', 'categories.id')
            ->select('questions.id','questions.question','questions.A','questions.B','questions.C','questions.D','questions.score','questions.created_at','questions.category_id','categories.id')
            ->where('questions.id','=',$id)
            ->groupBy('questions.id','questions.question','questions.A','questions.B','questions.C','questions.D','questions.score','questions.created_at','questions.category_id','categories.id')
            ->first();
        return response()->json([
            'question'=>$question_detail,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $question_id = $request->id;
        $question = Question::find($question_id);
        $question->question = $request->question;
        $question->A = $request->a;
        $question->B = $request->b;
        $question->C = $request->c;
        $question->D = $request->d;
        $question->score = $request->score;
        $question->category_id = $request->category;
        $question->update();

        if($question){
           return back()->with('success','Cập nhật thành công');
        }else{
            return back()->with('fail','Cập nhật thất bại, thử lại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        //dd($question);
        $question->delete();
        return back()->with('success','Xóa thành công');
    }
}
