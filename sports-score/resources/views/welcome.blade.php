<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel Widget Example</title>
</head>
<body>

    <h1>API-Sports Games Widget</h1>

    @include('widgets.games', [
        'league' => 39, // Example: Premier League
        'season' => 2024,
        'theme' => 'dark'
    ])

</body>
</html>