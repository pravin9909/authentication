<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit State</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
            color: #6c757d;
        }
        input[type=text] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button[type=submit] {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type=submit]:hover {
            background-color: #218838;
        }
        .error {
            color: #dc3545;
            margin-bottom: 10px;
        }
        .back-link {
            margin-top: 10px;
            text-align: center;
        }
        /* Logo styles */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="{{ route('dashboard') }}"> 
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
            </a>
        </div>
        <h1>Edit State</h1>
        
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('states.update', $state->id) }}">
            @csrf
            @method('PUT')
            <label for="name">State Name:</label>
            <input type="text" id="name" name="name" value="{{ $state->name }}" required>
            <button type="submit">Update State</button>
        </form>
        
        <div class="back-link">
            <a href="{{ route('states.index') }}">Back to States</a>
        </div>
        <div class="back-link">
            <a href="{{ route('dashboard') }}">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
