<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class studentController extends Controller
{
    public function index():View
    {
        $students=Student::all();
        return view('students.index')->with('students',$students);
    }
    public function create():View
    {
        return view('students.create');
    }
    public function store(Request $request):RedirectResponse
    {
        $input=$request->all();
        Student::create($input);
        return redirect('student')->with('flash_massage','Student Added');
    }
    public function show(string $id):View
    {
        $students=Student::all();
        return view('students.show')->with('students',$students);        
    }
    public function edit(string $id):View
    {
        $student=Student::find($id);
        return view('students.edit')->with('students',$students); 
    }
    public function update(Request $request,string $id):View
    {
        $student=Student::find($id);
        $input=$request->all();
        Student::create($input);
        return redirect('student')->with('flash_massage','Student Updated');
    }
    public function destroy(string $id):View
    {
        Student::destroy($id);
        return redirect('student')->with('flash_massage','Student deleted');
    }
}
