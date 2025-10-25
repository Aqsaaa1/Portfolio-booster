<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
        :root {
            /* Theme */
            --color-primary: #0d6efd;
            --color-primary-rgb: 13, 110, 253;
            --color-primary-strong: rgba(var(--color-primary-rgb), 0.3);
            --bg-gradient-start: #f0f4ff;
            --bg-gradient-end: #ffffff;
            --shadow-strong: rgba(13, 110, 253, 0.2);
            --heading: #1b1f3b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start), var(--bg-gradient-end));
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Floating circles */
        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 25px;
            height: 25px;
            background: rgba(13, 110, 253, 0.15);
            animation: move 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 25px;
            height: 25px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        @keyframes move {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
            }
        }

        /* Form container */
        .form-wrapper {
            position: relative;
            z-index: 1;
            width: 400px;
            max-width: 90%;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 30px var(--shadow-strong);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            backdrop-filter: blur(10px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            font-size: 1.9rem;
            color: var(--heading);
            margin-bottom: 1.5rem;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--color-primary-strong);
            border-radius: 10px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 8px var(--color-primary-strong);
        }

        .options {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .options label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .options a {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 600;
        }

        .options a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            padding: 0.9rem 1rem;
            background: var(--color-primary);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0a58ca;
        }

        p {
            margin-top: 1.2rem;
            color: #6c757d;
        }

        a {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .form-wrapper {
                width: 90%;
                padding: 2rem 1.2rem;
            }

            h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>
    <!-- Background animated circles -->
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <!-- Centered Login Form -->
    <div class="form-wrapper">

        <h2>Welcome Back</h2>

        @if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
        @if(session('error')) <p style="color:red">{{ session('error') }}</p> @endif


        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required />
            <input type="password" name="password" placeholder="Password" required />

            <div class="options">

                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit">Login</button>
        </form>
        <p>Don’t have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>

</html>