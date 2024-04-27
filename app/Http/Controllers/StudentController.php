<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use function PHPUnit\Framework\returnSelf;

class StudentController extends Controller
{
    public function index(){
    $students = Student::orderBy('first_name')->get();
    return view('students.index', [
        'students' => $students,
    ]);
    }

    public function show($id){

        $student = Student::findorFail($id);
        return view('students.show', ['student' => $student]);
    }

    public function apply() {
        return view('students.apply');
    }

    public function store(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'reg_no' => 'required|unique:students',
        'gender' => 'required',
        'email' => 'required|email|unique:students',
        'phone_no' => 'required',
        'address' => 'required',
        'city' => 'required',
        'date_of_birth' => 'required|date',
        'orphanage_status' => 'required',
        'disability' => 'required',
        'faculty' => 'required',
        'course' => 'required',
        'year_of_study' => 'required',
        'semester' => 'required',
        'transcript' => 'required',
        'acct_no' => 'required',
    ]);

    $student = new Student();

    $student->first_name = $request->input('first_name');
    $student->last_name = $request->input('last_name');
    $student->reg_no = $request->input('reg_no');
    $student->gender = $request->input('gender');
    $student->email = $request->input('email');
    $student->phone_no = $request->input('phone_no');
    $student->address = $request->input('address');
    $student->city = $request->input('city');
    $student->date_of_birth = $request->input('date_of_birth');
    $student->orphanage_status = $request->input('orphanage_status');
    $student->disability = $request->input('disability');
    $student->faculty = $request->input('faculty');
    $student->course = $request->input('course');
    $student->year_of_study = $request->input('year_of_study');
    $student->semester = $request->input('semester');
    $student->transcript = $request->input('transcript');
    $student->acct_no = $request->input('acct_no');

    $student->save();

    return redirect('/dashboard')->with('mssg', 'You have completed your application!<br> Wait for approval');
}

    public function destroy ($id){
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students');
    }

    public function approve_student($id){
        $student = Student::findOrFail($id);
        // $student->approve();

        $student->status='approved';
        $student->save();

        return redirect()->back();
    }

    public function reject_student($id){
        $student = Student::findOrFail($id);
        // $student->approve();

        $student->status='rejected';
        $student->save();

        return redirect()->back();
    }

    public function search($id)
{
    $search = request('search'); // Using helper function to retrieve input
    $students = Student::where('first_name', 'like', '%' . $search . '%')->get();

    return view('students.index', compact('students'));
}

    
} 