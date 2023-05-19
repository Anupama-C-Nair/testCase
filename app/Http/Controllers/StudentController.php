<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('guardian', 'attendance')->get();
        return view('students.index', compact('students')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addressTypes = Address::$addressTypes;
        return view('students.create', compact('addressTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sname' => 'required',
            'sgender'=> 'required',
            'standard'=>'required',
            'division' =>'required',
            'gname' => 'required',
            'ggender'=>'required',
            'email' => 'required | email',
            'phone' => 'required',
            'addresses'=> 'required | array',
            'addresses.*.bnumber' => 'required',
            'addresses.*.fnumber' => 'required',
            'addresses.*.area' => 'required',
            'addresses.*.city' => 'required',
            'addresses.*.country' => 'required',
        ]);
        //save guardian details
        $guardian = new Guardian([
            'Name' => $request->gname,
            'Gender' => $request->ggender,
            'Phone' => $request->phone,
            'Email' => $request->email,
        ]);
        $guardian -> save();
        //save Student details
        $student = new Student([
            'Name' => $request -> sname,
            'Gender' => $request -> sgender,
            'Standard' => $request -> standard,
            'Division' => $request -> division,
            'guardian_id' => $guardian->id,

        ]);
        $student->save();

        //save Address
        if($request -> has('addresses')){
            foreach($request->addresses as $addressData){
                $address = new Address();
                $address -> Building_no = $addressData['bnumber'];
                $address -> Flat_no = $addressData['fnumber'];
                $address -> Area = $addressData['area'];
                $address -> City = $addressData['city'];
                $address -> Country = $addressData['country'];
                $address -> type = $addressData['addressType'];
                $address -> student_id = $student->id;
                $address->save();
            }

        }
        return  redirect()->route('studentIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('address','attendance')->find($id);
        if($student){
            return view('students.show',compact('student'));
        }else{
            return redirect()->route('studentIndex')->withErrors('Student could not find' );
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
