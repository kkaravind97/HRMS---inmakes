<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Inmakes</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        .jumbotron {
            background-color: #f7f8fa;
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
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-white" href="#">Inmakes Infotech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('user.profile')}}">Profile</a>
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

<!-- Jumbotron -->
<div class="jumbotron text-center">
    <h1 class="text-dark">Welcome to Inmakes Infotech</h1>
    <p class="text-dark">We provide innovative software solutions to empower your business.</p>
    <a href="{{ route('user.profile') }}" class="btn btn-dark btn-lg">Go to profile..</a>
</div>

<!-- Features -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-laptop-code feature-icon"></i>
                    <h3 class="feature-title">Web Development</h3>
                    <p>We offer custom web development services tailored to your business needs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-mobile-alt feature-icon"></i>
                    <h3 class="feature-title">Mobile App Development</h3>
                    <p>Our team develops high-quality mobile apps for iOS and Android platforms.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-cloud feature-icon"></i>
                    <h3 class="feature-title">Cloud Solutions</h3>
                    <p>We provide cloud solutions to help you scale your business efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>We are a leading software company committed to delivering cutting-edge solutions to our clients.</p>
            </div>
            <div class="col-md-6">
                <img src="https://lh3.googleusercontent.com/p/AF1QipPUYnUzbETMfcVIRyMJp3GChjr7D2FzEJmbC4Sg=s680-w680-h510" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<!-- <section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section> -->

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Inmakes Infotech. All Rights Reserved.</p>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
