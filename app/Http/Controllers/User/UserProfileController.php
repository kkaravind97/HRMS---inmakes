<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserProfileController extends Controller
{
    public function profile() {
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $phone = Auth::user()->phone;
        $job = Auth::user()->job;
        $designation = Auth::user()->designation;
        $address = Auth::user()->address;
        $image = Auth::user()->image;
        return view('user.profile', compact('id', 'name', 'email', 'phone', 'job', 'designation', 'address', 'image'));
    }

    public function delete($id) {
        $user = User::find(decrypt($id));
        $user->delete();
        return redirect('/dashboard')->with('message', 'Account deleted successfully !!');
    }

}
