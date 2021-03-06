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
    <style>
      body {
        padding-top: 57px;
      }
    </style>
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
                <a href="{{ route('mrpmautos.services') }}" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.about') }}" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.team') }}" class="nav-link">Team</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mrpmautos.contact') }}" class="nav-link active">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container my-3 my-sm-5">
      <h1 class="text-center mb-sm-4 display-1">Contact</h1>
      <div class="row">
        <div class="col-12 col-md-6">
          <h2>Address:</h2>
          <address>
            <strong>MRPMAUTOS</strong>
            <br>
            6257 N Western Ave
            <br>
            Chicago, IL 60659
            <br>
            <i class="fas fa-fw fa-phone"></i> <a href="tel:+17739778888">+1 (773) 977-8888</a>
            <br>
            <i class="fas fa-fw fa-envelope"></i> <a href="mailto:admin@mrpmautos.com">admin@mrpmautos.com</a>
          </address>
        </div>
        <div class="col-12 col-md-6">
          <h2>Opening hours:</h2>
          <p>
            Monday-Friday: <span class="float-end">10 am - 6 pm</span>
            <br>
            Saturday: <span class="float-end">10 am - 3 pm</span>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mb-3">
          <h2>Send us a message:</h2>
          <form>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="name">Name</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="" value="" id="name" class="form-control" placeholder="Name" required>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="" value="" id="email" class="form-control" placeholder="example@email.com" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="telephone">Telephone</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="tel" name="" value="" id="telephone" class="form-control" placeholder="0123456789">
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="department">Department:</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                    <select class="form-select" id="department" name="" aria-describedby="department-help-block" required>
                      <option value="">- select here -</option>
                      <option value="buisness">Buisness</option>
                      <option value="sale">Sale</option>
                      <option value="support">Support</option>
                    </select>
                  </div>
                  <small class="form-text" id="department-help-block">Please select the recipient of your message.</small>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Message:</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                <textarea name="name" rows="5" id="message" class="form-control" placeholder="Write your message here..." required></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </form>
        </div>
        <div class="col-12 col-lg-6">
          <h2>Where to find us:</h2>
          <div class="ratio ratio-4x3">
            <img src="https://maps.locationiq.com/v3/staticmap?key=pk.41891fce7eeb9cd5b3876f056f400dc4&center=41.99555,-87.68947&zoom=14&size=300x300&format=jpg&markers=icon:small-blue-cutout|41.99555,-87.68947&markers=icon:small-blue-cutout|41.99555,-87.68947" alt="Our location">
          </div>
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
