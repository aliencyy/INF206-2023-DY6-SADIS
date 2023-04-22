<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SADIS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/app.css"/>
    <link rel="stylesheet" href="resources/js/bootstrap.js">
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.js'])
  </head>

  <header>



  <body @yield('body')>
  {{-- <body style="background-color: #D9F9EE;"> --}}
    @include('partials.navbar')
   
    <main>
        @yield('content')
    </main>
    
  </body>
</html>
