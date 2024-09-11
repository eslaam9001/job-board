<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market - Job Details</title>
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
        <section class="job-details">
            <div class="container">
                <h2>{{ $job->title }}</h2>
                <p><strong>Location:</strong> {{ $job->location }}</p>
                <p><strong>Description:</strong> {{ $job->description }}</p>
                <p><strong>Requirements:</strong> {{ $job->requirements }}</p>
                <p><strong>Benefits:</strong> {{ $job->benefits }}</p>
                <p><strong>Salary Range:</strong> {{ $job->salary_min }} - {{ $job->salary_max }}</p>
                <p><strong>Application Deadline:</strong> {{ $job->application_deadline }}</p>
                <a href="/apply-job/{{ $job->id }}">Apply Now</a>
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
