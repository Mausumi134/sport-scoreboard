<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Head-to-Head Scores</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right, #080808, #101010);
            padding: 30px;
            margin: 0;
            color: #fff;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .match {
            background-color: #fff3e0;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .match:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .team {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
        }

        .team-logo {
            width: 40px;
            height: 40px;
            object-fit: contain;
            border: 2px solid #ff9800;
            border-radius: 50%;
            background-color: #fff8e1;
            padding: 4px;
        }

        .score {
            font-weight: bold;
            font-size: 22px;
            text-align: center;
            flex: 1;
        }

        .details {
            text-align: right;
            font-size: 14px;
            font-style: italic;
        }

        /* Alternate text colors */
        .blue-text {
            color: #1e88e5;
        }

        .green-text {
            color: #43a047;
        }
    </style>
</head>
<body>
    <h1>Live Head-to-Head Scores</h1>

    @foreach($fixtures as $index => $fixture)
        @php
            $textClass = $index % 2 === 0 ? 'blue-text' : 'green-text';
        @endphp

        <div class="match {{ $textClass }}">
            <div class="team">
                <img src="{{ $fixture['teams']['home']['logo'] }}" class="team-logo" alt="Home Team Logo">
                <span>{{ $fixture['teams']['home']['name'] }}</span>
            </div>

            <div class="score">
                {{ $fixture['goals']['home'] }} - {{ $fixture['goals']['away'] }}
            </div>

            <div class="team">
                <span>{{ $fixture['teams']['away']['name'] }}</span>
                <img src="{{ $fixture['teams']['away']['logo'] }}" class="team-logo" alt="Away Team Logo">
            </div>

            <div class="details">
                <div>Status: {{ $fixture['fixture']['status']['long'] }}</div>
                <div>Elapsed: {{ $fixture['fixture']['status']['elapsed'] ?? 0 }} mins</div>
            </div>
        </div>
    @endforeach

</body>
</html>
