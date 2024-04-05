<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  @yield('styles')
</head>

<body>
  <header class="bg-dark py-3">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-light">MyShop</h1>
        <div>
          @unless (Auth::check())
          <a href="{{ route('to_sign_in') }}" class="btn btn-light me-2">Sign In</a>
          <a href="{{ route('to_sign_up') }}" class="btn btn-light">Sign Up</a>
          @else
          <span class="text-light me-3">Welcome, {{ Auth::user()->name }}!</span>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-light">Logout</button>
          </form>
          @endunless
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container mt-5">
      @yield('content')
    </div>
  </main>
  <footer class="bg-dark text-white text-center py-3">
    &copy; 2024 MyShop. All rights reserved.
  </footer>
</body>

</html>
