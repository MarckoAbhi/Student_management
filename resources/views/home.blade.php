@extends('layout')
<!-- Extending your main layout file -->

@section('content')
<!-- Defining the content section that will be injected into the layout -->

<div class="container">
    <header class="text-center mt-5">
        <h1>Future Education</h1>
        <h2>A good education is a foundation for a better future.</h2>
    </header>

    <main>

        <section class="data-visualization mt-5">
            <h3 class="text-center mb-4">Growth of Future Education Community</h3>
            <canvas id="growthChart"></canvas>

            <!-- Stats Cards Section -->
            <section class="row text-center mt-5">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card">
                        <h3>Total Courses</h3>
                        <p>5+</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card">
                        <h3>Total Instructors</h3>
                        <p>30+</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card">
                        <h3>Total Students</h3>
                        <p>130</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card">
                        <h3>Total Seats</h3>
                        <p>70+</p>
                    </div>
                </div>
            </section>

            <!-- Enrollment Chart -->
            <h3 class="text-center mt-5 mb-4">Student Enrollment by Program</h3>
            <canvas id="enrollmentChart"></canvas>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="text-center mt-5">
        <p>&copy; 2025 Future Education. All rights reserved.</p>
    </footer>
</div>

@endsection

@section('scripts')
<!-- Adding the scripts section -->
<!-- Chart.js CDN (make sure it's available) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript to initialize charts -->
<script>
// Example Data for the Growth Chart
const growthChartData = {
    labels: ['2020', '2021', '2022', '2023'], // X-axis labels (years)
    datasets: [{
        label: 'Number of Students',
        data: [100, 150, 200, 250], // Data values (number of students)
        borderColor: 'rgba(75, 192, 192, 1)', // Line color
        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Line fill color
        fill: true,
        tension: 0.4
    }]
};

// Initialize Growth Chart
const growthCtx = document.getElementById('growthChart').getContext('2d');
const growthChart = new Chart(growthCtx, {
    type: 'line', // Chart type (line chart for growth)
    data: growthChartData, // Data for the chart
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.raw + " students";
                    }
                }
            }
        }
    }
});

// Example Data for the Enrollment Chart
const enrollmentChartData = {
    labels: ['Science', 'Arts', 'Commerce'], // X-axis labels (programs)
    datasets: [{
        label: 'Enrollment by Program',
        data: [50, 60, 20], // Data values (enrollment numbers)
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)'
        ], // Segment colors
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
    }]
};

// Initialize Enrollment Chart
const enrollmentCtx = document.getElementById('enrollmentChart').getContext('2d');
const enrollmentChart = new Chart(enrollmentCtx, {
    type: 'bar', // Chart type (bar chart for enrollment by program)
    data: enrollmentChartData, // Data for the chart
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.raw + " students";
                    }
                }
            }
        }
    }
});
</script>
@endsection