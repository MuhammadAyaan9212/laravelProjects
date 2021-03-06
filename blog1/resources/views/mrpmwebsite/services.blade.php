<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <div class="container">
          <a href="{{ route('mrpmautos.index') }}" class="navbar-brand">MRPM AUTOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ route('mrpmautos.index') }}" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.services') }}" class="nav-link active">Services</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.about') }}" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.team') }}" class="nav-link">Team</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.contact') }}" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container my-3 my-sm-5">
      <h1 class="text-center mb-sm-5 display-1">Our services</h1>
      <div class="row mb-4 align-items-center flex-md-row-reverse">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <img src="{{ asset('images/service-1.jpg') }}" class="img-fluid" alt="Service-1">
        </div>
        <div class="col-12 col-md-6">
          <h2>Service #1</h2>
          <p>Any content</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row mb-4 align-items-center">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <img src="{{ asset('images/service-2.jpg') }}" class="img-fluid" alt="service-2">
        </div>
        <div class="col-12 col-md-6">
          <h2>Service #2</h2>
          <p>Any content</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row mb-4 align-items-center flex-md-row-reverse">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <img src="{{ asset('images/service-3.jpg') }}" class="img-fluid" alt="service-3">
        </div>
        <div class="col-12 col-md-6">
          <h2>Service #3</h2>
          <p>Efi diognosis checkup</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row mb-4 align-items-center">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <img src="{{ asset('images/service-4.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
          <h2>Service #4</h2>
          <p>Any content</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    <footer class="small bg-light">
      <div class="container py-3">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick links</h6>
            <ul class="list-unstyled">
              <li><a href="{{ route('mrpmautos.index') }}">Home</a></li>
              <li><a href="{{ route('mrpmautos.services') }}">Services</a></li>
              <li><a href="{{ route('mrpmautos.about') }}">About</a></li>
              <li><a href="{{ route('mrpmautos.team') }}">Team</a></li>
              <li><a href="{{ route('mrpmautos.contact') }}">Contact</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Information</h6>
            <ul class="list-unstyled">
              <li><a href="">Legal information</a></li>
              <li><a href="">Job opportunities</a></li>
              <li><a href="">FAQ's</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Follow us</h6>
            <ul class="list-unstyled">
              <li><a href=""><i class="fab fa-fw fa-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="fab fa-fw fa-twitter"></i>Twitter</a></li>
              <li><a href=""><i class="fab fa-fw fa-youtube"></i>Youtube</a></li>
              <li><a href=""><i class="fab fa-fw fa-linkedin"></i>LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Our location</h6>
            <address>
              <strong>MrpmAutos</strong>
              <br>
              6257 N Western ave
              <br>
              Chicago, IL 60659
              <br>
              <i class="fas fa-fw fa-phone"></i> <a href="tel:+17739778888">+1 (773) 977-8888</a>
              <br>
              <i class="fas fa-fw fa-envelope"></i> <a href="mailto:admin@mrpmautos.com">admin@mrpmautos.com</a>
            </address>
          </div>
          <ul class="list-inline text-center">
            <li class="list-inline-item">&copy; 2021 MrpmAutos</li>
            <li class="list-inline-item">All rights reserved</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
