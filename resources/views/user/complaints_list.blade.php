<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints | Inmakes</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        .jumbotron {
            background-color: #007bff;
            color: #fff;
        }
        .feature-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        .feature-title {
            font-size: 1.5rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-white" href="#">Inmakes Infotech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('user.profile')}}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Complaint</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white mr-5" href="{{route('user.leave.create')}}">Leave</a>
            </li>
        </ul>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="mr-5 btn" style="background: #f7f8fa; color: #2f3030; font-weight:bold;">Logout</button>
              </form>
        </div>
</nav>

<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12">
        <a href="{{route('user.create')}}" class="btn btn-dark mb-4 mt-5"><b>+ Add Complaints</b></a>
        @if (session()->has('message'))
        <p class="flashMessage text-danger">{{session()->get('message')}}</p> 
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Emp_Name</th>
                <th scope="col">Emp_Id</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">Complaint Description</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($complaints as $complaint)
              <tr>
                <th>{{$complaint->id}}</th>
                <td>{{$complaint->emp_name}}</td>
                <td>{{$complaint->emp_id}}</td>
                <td>{{$complaint->emp_email}}</td>
                <td>{{$complaint->emp_position}}</td>
                <td>{{$complaint->description}}</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
      </div>
      <!-- /.col -->
    </div>
  </div><!-- /.container-fluid -->
</section>



<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p>&copy; 2024 Inmakes Infotech. All Rights Reserved.</p>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
