<?php

namespace App\Http\Controllers;

use App\Models\Enrolls;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('index'); // English is now default
    }

    public function dashboard()
    {
        return view('dashboard');

    }

    public function enrolls(DataTables $dataTables)
    {
        return $dataTables->eloquent(Enrolls::query())->toJson();
    }

    public function store(Request $request)
    {
        $enrolls = new Enrolls();
        $enrolls->name = $request->name;
        $enrolls->email = $request->email;
        $enrolls->phone = $request->phone;
        $enrolls->student_age = $request->student_age;
        $enrolls->student_gender = $request->student_gender;
        $enrolls->course = $request->course;
        $enrolls->teacher_gender = $request->teacher_gender;
        $enrolls->package = $request->package;
        $enrolls->days = $request->days;
        $enrolls->message = $request->message;
        $enrolls->save();

        return response()->json(['status'=>'success','message' => 'Enrollment successful'], 200);
    }
}
