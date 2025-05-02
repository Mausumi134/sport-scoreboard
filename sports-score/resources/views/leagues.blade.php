<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Leagues</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ff9933; 
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
        }

        .league-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 80%;
            max-width: 600px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .league-container:hover {
            transform: translateY(-5px);
        }

        .league-container h3 {
            color: #e67e22;
            margin-bottom: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .league-container p {
            margin: 5px 0;
            color: #555;
        }

        .error {
            color: red;
            margin-top: 20px;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .league-container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <h1>Football Leagues</h1>

    @if(isset($error))
        <div class="error">
            Error: {{ $error }}
        </div>
    @else
        @if(count($leagues) > 0)
            @foreach($leagues as $league)
                <div class="league-container">
                    <h3>{{ $league['league']['name'] }}</h3>
                    <p>Country: {{ $league['country']['name'] }}</p>
                    <p>Season: {{ $league['seasons'][0]['year'] }}</p>
                </div>
            @endforeach
        @else
            <p>No leagues found.</p>
        @endif
    @endif
</body>
</html>