<!DOCTYPE html>
<html lang="ar">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوظائف - Job Listings</title>
    <style>
        /* General styles are similar to the homepage */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        header {
            background-color: #007bff;
            padding: 20px;
            color: white;
        }

        header nav ul li {
            display: inline;
            margin-left: 20px;
        }

        .search-filter {
            padding: 30px;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .search-filter input, .search-filter select {
            padding: 10px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .job-listings {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 0;
        }

        .job-listing {
            background-color: white;
            padding: 20px;
            width: 60%;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .job-listing h3 {
            margin: 0;
            font-size: 24px;
        }

        .job-listing p {
            margin: 10px 0;
        }

        .job-listing button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة الوظائف</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
    <!-- Same Header as homepage -->
    <header>
        <nav>
            <ul>
                <li><a href="#">الصفحة الرئيسية</a></li>
                <li><a href="#">الوظائف</a></li>
                <li><a href="#">الشركات</a></li>
                <li><a href="#">تسجيل الدخول</a></li>
                <li><a href="#">إنشاء حساب</a></li>
            </ul>
        </nav>
    </header>

    <!-- Search Filter -->
    <div class="search-filter">
        <input type="text" placeholder="البحث عن الوظيفة">
        <select>
            <option>المدينة</option>
            <option>الرياض</option>
            <option>جدة</option>
            <option>الدمام</option>
        </select>
        <button>بحث</button>
    </div>

    <!-- Job Listings -->
    <div class="job-listings">
        <div class="job-listing">
            <h3>مبرمج PHP</h3>
            <p>شركة XYZ - الرياض</p>
            <button>عرض التفاصيل</button>
        </div>

        <div class="job-listing">
            <h3>مصمم واجهات</h3>
            <p>شركة ABC - جدة</p>
            <button>عرض التفاصيل</button>
        </div>

        <div class="job-listing">
            <h3>مهندس شبكات</h3>
            <p>شركة DEF - الدمام</p>
            <button>عرض التفاصيل</button>
        </div>
    </div>
</body>
</html>
