<!DOCTYPE html>
<html>
<head>
    <title>Create City</title>
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
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header img {
            max-width: 150px;
            margin: 0 auto;
            display: block;
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
        input[type=text], select {
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
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
        </header>
        <h1>Create City</h1>
        
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('cities.store') }}">
            @csrf
            <label for="name">City Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="state_id">State:</label>
            <select id="state_id" name="state_id" required>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>

            <button type="submit">Create City</button>
        </form>
        
        <div class="back-link">
            <a href="{{ route('cities.index') }}">Back to Cities</a>
        </div>
        <div class="back-link">
            <a href="{{ route('dashboard') }}">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
