<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>List of countries</h1>
    @foreach($countries as $country)
      <p>{{$country->name}}</p>
    @endforeach
  </body>
</html>
