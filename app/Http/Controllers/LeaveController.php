<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveRequest;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function createLeave() {
        return view('user.create_leave');
    }
    public function saveLeave(LeaveRequest $request) {
        $input = $request->validated();
        Leave::create($input);
        return redirect()->route('user.leave.create')->with('message', 'Leave applied successfully !!');
    }

    public function list() {
        $leaves = Leave::all();
        return view('admin.leaves.list_leaves', compact('leaves'));
    }

    public function approve($id) {
        $leave = Leave::find(decrypt($id));
        return view('admin.leaves.approve_leave');
    }
    public function reject($id) {
        $leave = Leave::find(decrypt($id));
        return view('admin.leaves.reject_leave');
    }
}
