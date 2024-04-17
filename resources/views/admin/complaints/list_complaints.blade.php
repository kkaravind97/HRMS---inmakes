
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
        <div class="card">
          <div class="card-header">
            <h2 class="card-title"><b>Complaints</b></h2>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Emp_Id</th>
                  <th>Emp_Name</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Complaint Description</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($complaints as $complaint)
                <tr>
                  <td>{{$complaint->emp_id}}</td>
                  <td>{{$complaint->emp_name}}</td>
                  <td>{{$complaint->emp_email}}</td>
                  <td>{{$complaint->emp_position}}</td>
                  <td>{{$complaint->description}}</td>
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

