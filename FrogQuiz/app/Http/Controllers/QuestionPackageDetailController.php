<?php

namespace App\Http\Controllers;

use App\Models\QuestionPackageDetail;
use App\Http\Requests\StoreQuestionPackageDetailRequest;
use App\Http\Requests\UpdateQuestionPackageDetailRequest;

class QuestionPackageDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionPackageDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionPackageDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionPackageDetail  $questionPackageDetail
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionPackageDetail $questionPackageDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionPackageDetail  $questionPackageDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionPackageDetail $questionPackageDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionPackageDetailRequest  $request
     * @param  \App\Models\QuestionPackageDetail  $questionPackageDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionPackageDetailRequest $request, QuestionPackageDetail $questionPackageDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionPackageDetail  $questionPackageDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionPackageDetail $questionPackageDetail)
    {
        //
    }
}
