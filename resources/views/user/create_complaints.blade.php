<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add complaints | Inmakes</title>
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
                <a class="nav-link text-white" href="#">Complaints</a>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h2 class="text-center mt-5">Add Complaints</h2>
                @if (session()->has('message'))
                    <p class="flashMessage text-danger text-center">{{session()->get('message')}}</p> 
                @endif
                <form class="mt-4" action="{{route('user.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name" class="font-weight-bold">Employee name</label>
                      <input type="text" name="emp_name" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                      <label for="id" class="font-weight-bold">Employee ID</label>
                      <input type="text" name="emp_id" class="form-control" id="id" placeholder="Enter your id">
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email address</label>
                        <input type="email" name="emp_email" class="form-control" id="email" placeholder="Enter your email">
                    <div class="form-group">
                      <label for="position" class="font-weight-bold">Position</label>
                      <input type="text" name="emp_position" class="form-control" id="position" placeholder="Enter your position">
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Complaint description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter the description"></textarea>
                      </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-dark" name="" id="" value="Submit Complaint">
                        <a href="{{route('user.profile')}}" class="btn btn-dark">Go back</a>
                    </div>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
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
