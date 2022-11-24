<?php

namespace App\Http\Controllers;

use App\Models\QuestionPack;
use App\Http\Requests\StoreQuestionPackRequest;
use App\Http\Requests\UpdateQuestionPackRequest;

class QuestionPackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionPackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionPackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionPack  $questionPack
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionPack $questionPack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionPack  $questionPack
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionPack $questionPack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionPackRequest  $request
     * @param  \App\Models\QuestionPack  $questionPack
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionPackRequest $request, QuestionPack $questionPack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionPack  $questionPack
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionPack $questionPack)
    {
        //
    }
}
