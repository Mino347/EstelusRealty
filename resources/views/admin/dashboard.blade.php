<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Side Panel -->
<div class="flex min-h-screen">

    @include('admin.sidepanel')

    <!-- Main Content -->
    <div class="flex-1 p-6">

        <!-- Dashboard Header -->
        <div class="bg-white shadow-md py-4 px-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Welcome to Your Dashboard</h1>
        </div>

        <!-- Dashboard Content -->
        <div class="container mx-auto">
            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Total Sales -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-800">Total Sales</h2>
                    <p class="text-3xl font-semibold text-green-500 mt-4">$12,340</p>
                    <p class="text-sm text-gray-500">Last 30 days</p>
                </div>

                <!-- Investments made -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-800">Investments made</h2>
                    <p class="text-3xl font-semibold text-blue-500 mt-4">$8,210</p>
                    <p class="text-sm text-gray-500">Last 30 days</p>
                </div>

                <!-- Investments in progress -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-800">Investments in progress</h2>
                    <p class="text-3xl font-semibold text-yellow-500 mt-4">$4,500</p>
                    <p class="text-sm text-gray-500">Currently Active</p>
                </div>

                <!-- Property Views -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-800">Property Views</h2>
                    <p class="text-3xl font-semibold text-purple-500 mt-4">15,670</p>
                    <p class="text-sm text-gray-500">Last 30 days</p>
                </div>

                <!-- Total Properties -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-800">Total Properties Listed</h2>
                    <p class="text-3xl font-semibold text-red-500 mt-4">32</p>
                    <p class="text-sm text-gray-500">Active Listings</p>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Sales Trend</h2>
                <canvas id="salesChart"></canvas>
            </div>
        </div>

    </div>
</div>

<!-- Chart.js Script for Sales Trend Chart -->
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], // X-axis labels
            datasets: [{
                label: 'Sales ($)',
                data: [1200, 1900, 3000, 5000, 2200, 3200, 4200], // Y-axis data points
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
