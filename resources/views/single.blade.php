<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hallo</title>
  </head>
  <body>
    <h1>Ini halaman show..</h1>
    <h2> {{$blog}} :) </h2>

    @foreach($users as $user)
      <li> {{$user}} </li>
    @endforeach

  </body>
</html>
