<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        //    $students = Student::all();
    
        $donors = Donor::orderBy('first_name')->get();
        return view('donors.index', [
            'donors' => $donors,
        ]);
        }

    public function show($id){

        $donor = Donor::findorFail($id);
        return view('donors.show', ['donor' => $donor]);
    }
        
    public function donate() {
        return view('donors.donate');
    }

    public function store(){ 
        $donor = new Donor();
        // $donor->id= request();
        $donor ->first_name = request('first_name');
        $donor ->middle_name = request('middle_name');
        $donor ->last_name = request('last_name');
        $donor ->donor_id = request('donor_id');
        $donor ->gender = request('gender');
        $donor ->email = request('email');
        $donor ->phone_no = request('phone_no');
        $donor ->address = request('address');
        $donor ->city = request('city');
        $donor ->national_id = request('national_id');
        $donor ->company = request('company');
        // $donor ->donated_amount = request('donated_amount');
        $donor ->donated_date = request('donated_date');
        $donor ->nationality = request('nationality');
        $donor ->occupation = request('occupation');

        $donor->save();
         
        return redirect(route('sponsor.dashboard'))->with('mssg', 'Thanks for your contribution!');
    }
    public function deleteDonor($id)
    {
        Donor::where('id','=',$id)->delete();
        return redirect('/donors')->with('mssg', 'Donor deleted Successfully!');

    }

}
