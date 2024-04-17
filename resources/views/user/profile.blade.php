<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        /* Custom CSS for rounded image */
        .rounded-img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>

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
                    <a class="nav-link text-white" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('user.create')}}">Complaint</a>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <!-- Employee Image -->
                <img src="{{asset($image)}}" alt="No profile picture" class="rounded-img mb-3">
                <!-- Employee Details -->
                <h2>{{$name}}</h2>
                <p><b>Emp_ID :</b> {{$id}}</p>
                <p><b>Email :</b> {{$email}}</p>
                <p><b>Phone number :</b> {{$phone}}</p>
                <p><b>Position :</b> {{$job}}</p>
                <p><b>Designation :</b> {{$designation}}</p>
                <p><b>Address :</b> {{$address}}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <a href="{{route('user.delete', encrypt($id))}}" class="btn btn-danger">Delete account</a>
                <a href="{{route('user.create', encrypt($id))}}" class="btn btn-dark">Complaints</a>
                <a href="{{route('user.leave.create')}}" class="btn btn-danger">Leaves</a>
                <a href="{{route('dashboard')}}" class="btn btn-dark">Go back</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
