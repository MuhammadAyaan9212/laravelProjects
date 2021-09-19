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
    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Country Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($countries as $country)
            <tr>
              <th scope="row">{{$country->id}}</th>
              <td>{{$country->name}}</td>
              <td>{{$country->created_at}}</td>
              <td>{{$country->updated_at}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>
