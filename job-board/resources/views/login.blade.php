<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <form action="{{ route('login') }}" method="POST">

</head>
<body>
    <header>
        <nav>
            <div class="container">
                <h1><a href="/">Market</a></h1>
                <ul>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/jobs">Jobs</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="form-section">
            <div class="container">
                <h2>Login</h2>
                <form action="/login" method="post">
                    @csrf
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Market. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
