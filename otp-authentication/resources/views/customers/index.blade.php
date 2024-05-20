<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .edit-button {
            padding: 8px 16px;
            background-color: #66e787;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .edit-button:hover {
            background-color: #0056b3;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        .create-link {
            display: block;
            text-align: right;
            margin-bottom: 20px;
        }
        .back-link {
            margin-top: 20px;
            text-align: center;
        }
        /* List styles */
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }
        ul li:hover {
            background-color: #e9ecef;
        }
        ul li span {
            color: #333;
            font-weight: bold;
        }
        ul li a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
            margin-right: 10px;
        }
        ul li a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .delete-form {
            display: inline;
        }
        .delete-form button {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            margin-left: 10px;
            transition: color 0.3s ease;
        }
        .delete-form button:hover {
            color: #c82333;
            text-decoration: underline;
        }
        /* Logo styles */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .logo img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
        </div>
        <h1>Customers</h1>
        <a href="{{ route('customers.create') }}" class="create-link">Create Customer</a>
        <ul>
            @foreach ($customers as $customer)
                <li>
                    <span>{{ $customer->name }}</span>
                    <span>{{ $customer->phone }}</span>
                    <div>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="edit-button">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('dashboard') }}" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>
