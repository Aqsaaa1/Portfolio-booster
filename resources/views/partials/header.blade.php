<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <script src="{{ asset('js/main.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



</head>

<body>

    <!--  Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">MyPortfolioX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('dashboard') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('templates') }}">Templates</a></li>
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="moreMenu"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreMenu">
                            <li><a class="dropdown-item" href="{{ route('work') }}">How it Works</a></li>
                            <li><a class=" dropdown-item" href="{{ route('testimonial') }}">Testimonials</a></li>
                            <li><a class="dropdown-item" href="{{ route('faqs') }}">FAQ</a></li>
                        </ul>
                    </li>

                    <ul class="navbar-nav ms-auto">
                        @guest
                        <!-- When user is NOT logged in -->
                        <li class="nav-item">
                            <a class="btn btn-primary ms-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-primary ms-2" href="{{ route('register') }}">Register</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="logout-btn" title="Logout">
                                    <i class="fas fa-power-off"></i>
                                </button>
                            </form>
                        </li>
                        @endauth
                    </ul>

                </ul>
            </div>
        </div>
    </nav>