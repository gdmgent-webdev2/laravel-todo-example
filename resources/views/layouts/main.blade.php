<!DOCTYPE html>
<html lang="en">
<!---
  STARTING TEMPLATE FOR MVC-APP IN LARAVEL
-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Quicksand:wght@300&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/VERVANGEN-DOOR-EIGEN-KEY.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>Tough Do's</title>
</head>

<body>
  
    @include('partials.header')

  <div class="container">
    @include('partials.sidebar')
    <main>
      
        @yield('title')

        @yield('form')

        @yield('content')

    </main>
  </div>

  @include('partials.footer')

  @yield('scripts')
  <script type="module" src="{{ asset('scripts/app.js') }}"></script>

</body>

</html>