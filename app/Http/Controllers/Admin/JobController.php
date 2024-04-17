<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Job;

class JobController extends Controller
{
    public function listJob() {
        $jobs = Job::all();
        return view ('admin.jobs.list_jobs',compact('jobs'));
    }
    public function create() {
        return view ('admin.jobs.create_jobs');
    }
    public function save(JobRequest $requset) {
        $input = $requset->validated();
        Job::create($input);
        return redirect()->route('admin.job.list')->with('message', 'Job added successfully !!');
    }

    public function delete($id) {
        $job = Job::find(decrypt($id));
        $job->delete();
        return redirect('admin/jobs')->with('message', 'Job deleted successfully !!');
     }

     public function edit($id) {
        $job = Job::find(decrypt($id));
        return view('admin.jobs.edit_jobs', compact('job'));
     }
     public function update(JobRequest $requset) {
        $input = $requset->validated();
        $job = Job::find(decrypt($requset->job_id));
        $job->update($input);
        return redirect('admin/jobs')->with('message', 'Job updated successfully !!');
     }
}
