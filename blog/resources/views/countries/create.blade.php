<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Create new Country</h1>
      <form class="" action="/countries/store" method="post">
        @csrf
        <div class="form-group">
          <label for="">Country Name</label>
          <input type="text" class="form-control" name="CountryName" id="CountryName" value="">
        </div>
        <button type="submit" name="button" class="btn btn-primary">Create</button>
      </form>
    </div>
  </body>
</html>
