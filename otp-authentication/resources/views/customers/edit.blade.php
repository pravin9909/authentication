<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-link {
            margin-top: 10px;
        }
        .back-link a {
            color: #333;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>Edit Customer</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('customers.update', $customer->id) }}">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $customer->name }}" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ $customer->phone }}" required>

            <label for="state_id">State:</label>
            <select id="state_id" name="state_id" required>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ $customer->state_id == $state->id ? 'selected' : '' }}>
                        {{ $state->name }}
                    </option>
                @endforeach
            </select>

            <label for="city_id">City:</label>
            <select id="city_id" name="city_id" required>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $customer->city_id == $city->id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>

            <label for="pincode_id">Pincode:</label>
            <select id="pincode_id" name="pincode_id" required>
                @foreach ($pincodes as $pincode)
                    <option value="{{ $pincode->id }}" {{ $customer->pincode_id == $pincode->id ? 'selected' : '' }}>
                        {{ $pincode->pincode }}
                    </option>
                @endforeach
            </select>

            <button type="submit">Update Customer</button>
        </form>

        <a href="{{ route('customers.index') }}">Back to Customers</a><br>

            <a href="{{ route('dashboard') }}">Back to Dashboard</a>

    </div>
</body>
</html>
