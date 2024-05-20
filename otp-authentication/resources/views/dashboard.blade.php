<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .logo {
            max-width: 250px;
            margin-bottom: 20px;
        }
        h1 {
            color: #007bff;
        }
        .menu {
            margin-top: 20px;
        }
        .menu a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h1>Explore Your Dashboard</h1>
        <div class="menu">
            <a href="{{ route('states.index') }}">Manage States</a>
            <a href="{{ route('cities.index') }}">Manage Cities</a>
            <a href="{{ route('pincodes.index') }}">Manage Pincodes</a>
            <a href="{{ route('customers.index') }}">Manage Customers</a>
        </div>
    </div>
</body>
</html>
