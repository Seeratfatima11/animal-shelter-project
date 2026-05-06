<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            margin: 10px 0;
            text-decoration: none;
        }
        .card {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4>Admin</h4>
            <a href="#">Dashboard</a>
            <a href="/admin/users">Users</a>
            <a href="/admin/resorts">Resorts</a>
            <a href="/admin/bookings">Bookings</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <h3 class="mb-4">Dashboard</h3>

            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card bg-primary text-white p-3">
                        <h5>Total Users</h5>
                        <h3>{{ $users ?? 120 }}</h3>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card bg-success text-white p-3">
                        <h5>Total Resorts</h5>
                        <h3>{{ $resorts ?? 45 }}</h3>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card bg-danger text-white p-3">
                        <h5>Bookings</h5>
                        <h3>{{ $bookings ?? 78 }}</h3>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card bg-warning text-white p-3">
                        <h5>Revenue</h5>
                        <h3>$500</h3>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>