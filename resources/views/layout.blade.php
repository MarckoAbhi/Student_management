<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

    <!-- Bootstrap CSS (from a single version for consistency) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    /* Sidebar Styles */
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    .sidebar a.active {
        background-color: darkblue;
        color: white;
    }

    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    /* Fixed title header style */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;

    }

    .navbar h2 {
        margin: 0;
        padding: 10px 20px;


    }

    .container-fluid {
        padding-top: 70px;
        /* Added padding to prevent overlap with the fixed navbar */
    }

    /* Content area style */
    div.content {
        margin-left: 200px;
        padding: 20px;
        min-height: 100vh;
        /* Ensure it stretches to fill the remaining height */
    }

    /* Responsive design */
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Main Row with Fixed Header -->
        <div class="row">
            <div class="col-md-12">
                <!-- Navbar (Fixed at the top) -->
                <nav class=" navbar navbar-expand-lg navbar-light bg-light">

                    <h2>Student Management</h2>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="sidebar">
                    <a class="active" href="/">Home</a>
                    <a href="{{ url('/students') }}">Student</a>
                    <a href="{{ url('/teachers') }}">Teacher</a>
                    <a href="{{ url('/courses') }}">Courses</a>
                    <a href="{{ url('/batches') }}">Batches</a>
                    <a href="{{ url('/enrollments') }}">Enrollment</a>
                    <a href="{{ url('/payments') }}">Payment</a>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 content">
                @yield('content')
                <footer class="text-center mt-5">
                    <p>&copy; 2025 Future Education. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>