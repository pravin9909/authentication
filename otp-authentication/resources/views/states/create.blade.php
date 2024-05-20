<!DOCTYPE html>
<html>
<head>
    <title>Create State</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
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
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
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
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type=submit]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .back-link {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo" style="max-width: 150px; margin: 0 auto; display: block;">
        </header>
        <h1>Create State</h1>
        
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('states.store') }}">
            @csrf
            <label for="name">State Name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Create State</button>
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
