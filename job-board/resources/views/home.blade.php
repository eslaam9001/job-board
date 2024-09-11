<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        <section class="hero">
            <div class="container">
                <h2>Find Your Dream Job</h2>
                <form action="/search" method="get">
                    <input type="text" name="query" placeholder="Search for jobs...">
                    <button type="submit">Search</button>
                </form>
            </div>
        </section>
        <section class="featured-jobs">
            <div class="container">
                <h2>Featured Jobs</h2>
                <div class="job-listings">
                    <!-- Jobs will be dynamically inserted here -->
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Market. All rights reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
