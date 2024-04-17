
@extends('admin.layout.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Add Jobs</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.job.save')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Job Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter job title">
                </div>
                <div class="form-group">
                  <label for="description">Job Description</label>
                  <input type="text" name="description" class="form-control" id="description" placeholder="Enter job description">
                </div>
                <div class="form-group">
                  <label for="job_type">Job Type</label>
                  <input type="text" name="job_type" class="form-control" id="job_type" placeholder="Enter job job type">
                </div>
                <div class="form-group">
                  <label for="experience">Experience</label>
                  <input type="text" name="experience" class="form-control" id="experience" placeholder="Enter required experience">
                </div>
                <div class="form-group">
                  <label for="title">Salary</label>
                  <input type="text" name="salary" class="form-control" id="salary" placeholder="Enter salary">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-dark">Add</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
