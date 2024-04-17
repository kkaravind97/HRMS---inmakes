
@extends('admin.layout.master')

@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">All Employees</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-12">
        @if (session()->has('message'))
        <p class="flashMessage text-danger">{{session()->get('message')}}</p> 
        @endif
        <a href="{{route('admin.employee.create')}}" class="btn btn-dark"><b>+ Add Employee</b></a>
        <div class="card mt-2">
          <div class="card-header">
            <h3 class="card-title">All Employees</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Emp ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Job</th>
                  <th>Designation</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($employees as $employee)
                      <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->job}}</td>
                        <td>{{$employee->designation}}</td>
                        <td>{{$employee->address}}</td>
                        <td><a href="{{route('admin.employee.delete', encrypt($employee->id))}}" class="btn btn-danger">Remove</a></td>
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

