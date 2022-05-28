<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Post;
use Illuminate\Http\Request;
//use App\Model\Search;
use App\Models\Student;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $student = $request->input('search');
        $students = Student::query()->where('cne','LIKE', "%{$student}%")->get();
        return view('student', ['students'=>$students]);

    }
}
