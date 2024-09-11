<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Register</title>
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
        <section class="form-section">
            <div class="container">
                <h2>Register</h2>
                <form action="/register" method="post">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="employer">Employer</option>
                        <option value="candidate">Candidate</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit">Register</button>
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
