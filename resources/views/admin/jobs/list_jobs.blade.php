
@extends('admin.layout.master')

@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- /.col -->
      
      <div class="col-md-12">
        <a href="{{route('admin.job.create')}}" class="btn btn-dark mb-4"><b>+ Add Job</b></a>
        @if (session()->has('message'))
        <p class="flashMessage text-danger">{{session()->get('message')}}</p> 
        @endif
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Jobs</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Job ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>Experience</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($jobs as $job)
                <tr>
                  <td>{{$job->id}}</td>
                  <td>{{$job->title}}</td>
                  <td>{{$job->description}}</td>
                  <td>{{$job->job_type}}</td>
                  <td>{{$job->experience}}</td>
                  <td>{{$job->salary}}</td>
                  <td><a href="{{route('admin.job.edit', encrypt($job->id))}}" class="btn btn-dark">Edit</a></td>
                  <td><a href="{{route('admin.job.delete', encrypt($job->id))}}" class="btn btn-danger">Remove</a></td>
                </tr>
                @endforeach
                      
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection

