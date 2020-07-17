<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function index()
    {
        $students=student::all();
        return view('studentform',compact('students'));
    }
    public function display()
    {
        return view('studentdata');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'name'=>'required',
        'address'=>'required',
        'course'=>'required',
        'mobile'=>'required',
        ]);
        $students=  new student();
        $students-> name = $request->input('name');
        $students-> address = $request->input('address');
        $students-> course = $request->input('course');
        $students-> mobile = $request->input('mobile');
        $students->save();
        return redirect('/students')->with('success','Student Data Saved');
    }
    public function edit($id)
    {
        $students = student::find($id);
        // dd($students->all());
        return view('studentedit')->with('students', $students);
    }
    public function updatedata(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'address'=>'required',
            'course'=>'required',
            'mobile'=>'required',
        ]);
        $students=student::find($id);
        $students->name = $request->input('name');
        $students->address = $request->input('address');
        $students->course = $request->input('course');
        $students->mobile = $request->input('mobile');

        $students->save();
        return redirect('/students')->with('success','Student Data Updated');
    }
    public function deletedata($id)
    {
        $students=student::find($id);
        $students->delete();
        return redirect('/students')->with('success','Student Data Deleted');
    }
}
