
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
        @if (session()->has('message'))
        <p class="flashMessage text-danger">{{session()->get('message')}}</p>
        @endif 
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Leaves</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Emp_ID</th>
                  <th>Emp_Name</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Reason</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($leaves as $leave)
                <tr>
                    <td>{{$leave->emp_id}}</td>
                    <td>{{$leave->emp_name}}</td>
                    <td>{{$leave->emp_email}}</td>
                    <td>{{$leave->emp_position}}</td>
                    <td>{{$leave->start_date}}</td>
                    <td>{{$leave->end_date}}</td>
                    <td>{{$leave->reason}}</td>
                    <td><a href="{{route('admin.leave.approve', encrypt($leave->id))}}" class="btn btn-dark">Approve</a></td>
                    <td><a href="{{route('admin.leave.reject', encrypt($leave->id))}}" class="btn btn-danger">Reject</a></td>
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

