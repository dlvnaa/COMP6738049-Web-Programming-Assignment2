<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Assignment 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <header>
        <div class ="navbar flex items-center justify-between sticky top-0 z-40 bg-white">
            <h2 class = "text4 font-bold font-serif text-slate-900">@yield('judul_halaman')</h2>

            @include('header')
           
        </div>
    </header>

      @yield('content')

  </body>
</html>