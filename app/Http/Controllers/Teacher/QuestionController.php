<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\QuestionValidate;
use App\question;
use App\Http\Controllers\Controller;
use App\Http\Resources\Question as QuestionResources;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = question::all();
        return QuestionResources::collection($questions);
    }
    public function show(question $question)
    {
        return (new QuestionResources($question));
    }

    public function edit(question $question)
    {
        // for test
        return view('test.question.show', ['question'=>$question]);
    }
    public function create()
    {
        // for test.
        return view('test.question.insert');
    }

    public function store(QuestionValidate $request)
    {
        $this->authorize('create', question::class);
        $data = $request->validated();
        return \request()->user()->questions()->create($data);
    }



    public function update(QuestionValidate $request, question $question)
    {
        $this->authorize('update', $question);
        $data = $request->validated();
        \request()->user()->questions()->update($data);
    }

    public function destroy(question $question)
    {
        $this->authorize('delete', $question);
        return ($question->delete())?'success':'fail';
    }
}
