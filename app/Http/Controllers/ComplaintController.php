<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComplaintRequest;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // Listing complaints in admin page
    public function list() {
        $complaints = Complaint::all();
        return view ('admin.complaints.list_complaints',compact('complaints'));
    }

    // Listing complaints in user page
    //public function complaint() {
        //$complaints = Complaint::all();
       // return view('user.complaints_list', compact('complaints'));
    //}
    public function create() {
        return view('user.create_complaints');
    }

    public function save(ComplaintRequest $request) {
        $input = $request->validated();
        Complaint::create($input);
        return redirect()->route('user.create')->with('message', 'Complaint submitted successfully !!');
    }
}
