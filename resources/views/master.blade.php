<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @php($currentRoute = Route::currentRouteName())
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Logo.</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute == 'home' ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page">home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $currentRoute == 'contact.index' ? 'active' : '' }}" href="{{ route('contact.index') }}">contact</a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
<main class="container py-5">
    @yield('content')
</main>

    <footer class="bg-light py-4 text-center">
        &copy; {{ date('Y') }}
    </footer>
</body>
</html>