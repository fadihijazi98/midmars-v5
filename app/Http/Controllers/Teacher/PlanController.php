<?php

namespace App\Http\Controllers\Teacher;

use App\plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Plan as PlanResource;
use App\Http\Requests\PlanValidate;

class PlanController extends Controller
{

    public function index()
    {
        $this->authorize_with('viewAny');
        return PlanResource::collection(plan::all());

    }

    public function show() {
        return null;
    }

    public function create(Request $request)
    {
        return view('test.plan.insert');
    }

    public function store(PlanValidate $request)
    {
        $this->authorize_with('create');
        request()->user()->plans()->create($request->validated());
        return redirect('/plan');
    }


    public function edit(plan $plan)
    {
        $this->authorize_with('view', $plan);
        return (new PlanResource($plan));
    }

    public function update(PlanValidate $request, plan $plan)
    {
        $id = $plan->id;
        $this->authorize_with('update', $plan);
        $plan->update($request->validated());
        return redirect("plan");
    }

    public function destroy(plan $plan)
    {
        $this->authorize_with('delete', $plan);
        $plan->delete();
        return redirect('/plan');
    }

    private function authorize_with($function_name, plan $plan=null) {
        if($plan==null)
            return $this->authorize($function_name, plan::class);
        else {
            return $this->authorize($function_name, $plan);
        }
    }
}




