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

    public function store(){

        $student = new Student();

        $student ->first_name = request('first_name');
        $student ->last_name = request('last_name');
        $student ->reg_no = request('reg_no');
        $student ->gender = request('gender');
        $student ->email = request('email');
        $student ->phone_no = request('phone_no');
        $student ->address = request('address');
        $student ->city = request('city');
        $student ->date_of_birth = request('date_of_birth');
        $student ->orphanage_status = request('orphanage_status');
        $student ->disability = request('disability');
        $student ->faculty = request('faculty');
        $student ->course = request('course');
        $student ->year_of_study = request('year_of_study');
        $student ->semester = request('semester');
        $student ->transcript = request('transcript');
        // $student ->fin_stmt = request('fin_stmt');
        $student ->acct_no = request('acct_no');

        $student->save();
         
        return redirect(route('dashboard'))->with('mssg', 'You have completed your Application!');
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

//     public function search($id)
// {
//     $search = request('search'); // Using helper function to retrieve input
//     $students = Student::where('first_name', 'like', '%' . $search . '%')->get();

//     return view('students.index', compact('students'));
// }

    
} 