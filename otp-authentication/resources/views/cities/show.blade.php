<!DOCTYPE html>
<html>
<head>
    <title>City Details</title>
</head>
<body>
    <h1>City Details</h1>
    <p>Name: {{ $city->name }}</p>
    <p>State: {{ $city->state->name }}</p> <!-- Assuming City model has a state relationship -->

    <a href="{{ route('cities.index') }}">Back to Cities</a>
    <div class="back-link">
        <a href="{{ route('dashboard') }}">Back to Dashboard</a>
    </div>
</body>
</html>
