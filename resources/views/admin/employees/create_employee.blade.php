
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
              <h3 class="card-title">Add Employees</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.employee.save')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Full name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                  <label for="job">Job</label>
                  <input type="text" name="job" class="form-control" id="job" placeholder="Enter job">
                </div>
                <div class="form-group">
                  <label for="designation">Designation</label>
                  <input type="text" name="designation" class="form-control" id="designation" placeholder="Enter designation">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="address">Image</label>
                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter image">
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
