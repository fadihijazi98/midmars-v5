<?php

namespace App\Http\Controllers\Student;

use App\Http\Resources\TeachersInfo;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersPlansController extends Controller
{
    public function view()
    {
        // this view for display teachers with their plan's and the rating for each teacher.
        return $this->handle();

    }

    public function handle()
    {
        // for handel the all info in this view.
        $teachers = $this->teachers();
        return TeachersInfo::collection($teachers); // in app\http\resource .. to json.
    }

    public function teachers()
    {
        $type = 'teacher';
        return User::all()->where('type', $type);
    }
}
