<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\TopicValidate;
use App\topic;
use App\Http\Resources\Topic as TopicResources;
class TopicController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny', topic::class);
        return TopicResources::collection(topic::all());
    }

    //get method's, thus method's, we can dispense with them.
    public function create()
    {
        $this->authorize('create', topic::class);
        return view('test.topic.insert');
    }
    public function show(topic $topic)
    {
        //empty
    }
    public function edit(topic $topic)
    {
        $this->authorize('view', $topic);
        return new TopicResources($topic);
    }

    //post method's .. imp* method's
    public function store(TopicValidate $request)
    {
        // post method .. pure
        $response = $this->authorize('create', topic::class);
        $data = $request->validated();
        $topic = request()->user()->topics()->create($data);
        return $this->accept_if_user_id_is_admin($response, $topic);
    }
    public function update(TopicValidate $request, topic $topic)
    {
        // post method .. but as PUT
        $this->authorize('update', $topic);
        $data = $request->validated();
        $topic->update($data);
        return back();
    }
    public function destroy(topic $topic)
    {
        // post method .. but as  DELETE
        $this->authorize('delete', $topic);
        $topic->delete();
        return redirect('/topic');
    }

    //help method for store.
    public function accept_if_user_id_is_admin($response, $topic) {
        //nut just accept.
        //accept and return the response of this process.
        if(!($response->message()==='wait_accept')) {
            //then the use is admin in this case. according the logic of TopicPolicy.
            $topic->state = "accept";
            $topic->save();
            return redirect("/topic/{$topic->id}/edit");
        } else {
            //the default in database is reject, so we can just redirect teacher in this case.
            return redirect('/topic')->with('wait_message', 'wait to accept :)');
        }
    }


}
