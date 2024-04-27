<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Staff;
use App\Models\Student;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Staff::get();
        return view('/staff-list', compact('data'));
    }
    public function addstaff(){
        return view('/add-staff');
    }

    public function saveStaff(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $staff = new Staff();
        $staff ->name = request('name');
        $staff ->email = request('email');
        $staff ->password = request('password');

        $staff->save();
        return redirect('/add-staff')->with('mssg', 'Staff Added Successfully!');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function search(Request $request)
    {
        $search = $request->search;
        $data = Staff::where('name', 'like', '%'.$search.'%')->get();

        return view('staff-list', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editStaff($id)
    {
        $data = Staff::where('id','=',$id)->first();
        return view('edit-staff',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStaff(Request $request)
{
     $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $id = $request->id;
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;

    Staff::where('id', $id)->update([
        'name' => $name,
        'email' => $email,
        'password' => $password,
    ]);

    return redirect('/add-staff')->with('mssg', 'Staff Updated Successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function deleteStaff($id)
    {
        Staff::where('id','=',$id)->delete();
        return redirect('/staff-list')->with('mssg', 'Staff deleted Successfully!');

    }
}
