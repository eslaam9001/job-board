<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <h1><a href="/">Market</a></h1>
                <ul>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="dashboard">
            <div class="container">
                <h2>Admin Dashboard</h2>
                <div class="dashboard-menu">
                    <a href="/jobs">Manage Jobs</a>
                    <a href="/users">Manage Users</a>
                    <a href="/reports">View Reports</a>
                </div>
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
