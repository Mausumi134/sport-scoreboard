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


.team span {
    color: black; 
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


.blue-text {
    color: #1e88e5;
}

.green-text {
    color: #43a047;
}


.live-random-match {
    background-color: #f5f5f5;
    border-radius: 12px;
    padding: 20px;
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.live-random-match img {
    width: 50px;
    height: 50px;
    object-fit: contain;
    border-radius: 50%;
    background-color: #f1f1f1;
    border: 2px solid #ff9800;
}

    </style>
</head>
<body>
    <h1>Live Head-to-Head Scores</h1>

    <div class="match" id="randomMatchDisplay">
        <div class="team">
            <img src="https://via.placeholder.com/40" class="team-logo" alt="Home Team Logo">
            <span id="homeTeamName">Loading...</span>
        </div>

        <div class="score" id="matchScore">0 - 0</div>

        <div class="team">
            <span id="awayTeamName">Loading...</span>
            <img src="https://via.placeholder.com/40" class="team-logo" alt="Away Team Logo">
        </div>
    </div>

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

    <script>
        const teams = [
    { name: "Manchester United", logo: "https://upload.wikimedia.org/wikipedia/en/7/7a/Manchester_United_FC_crest.svg" },
    { name: "Real Madrid", logo: "https://upload.wikimedia.org/wikipedia/en/5/56/Real_Madrid_CF.svg" },
    { name: "FC Barcelona", logo: "https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" },
    { name: "Bayern Munich", logo: "https://upload.wikimedia.org/wikipedia/en/1/1f/FC_Bayern_München_logo_%282017%29.svg" },
    { name: "Juventus", logo: "https://upload.wikimedia.org/wikipedia/commons/1/15/Juventus_FC_2017_logo.svg" },
    { name: "Paris Saint-Germain", logo: "https://upload.wikimedia.org/wikipedia/en/a/a7/Paris_Saint-Germain_F.C..svg" },
    { name: "Liverpool", logo: "https://upload.wikimedia.org/wikipedia/en/0/0c/Liverpool_FC.svg" },
    { name: "Arsenal", logo: "https://upload.wikimedia.org/wikipedia/en/5/53/Arsenal_FC.svg" },
    { name: "AC Milan", logo: "https://upload.wikimedia.org/wikipedia/commons/d/d0/Logo_of_AC_Milan.svg" },
    { name: "Chelsea", logo: "https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg" }
];

function getTwoRandomTeams() {
    const shuffled = [...teams].sort(() => 0.5 - Math.random());
    return [shuffled[0], shuffled[1]];
}

function updateRandomMatch() {
    const [home, away] = getTwoRandomTeams();
    const homeScore = Math.floor(Math.random() * 6);
    const awayScore = Math.floor(Math.random() * 6);

    document.getElementById("homeTeamName").textContent = home.name;
    document.getElementById("awayTeamName").textContent = away.name;

    const logos = document.querySelectorAll("#randomMatchDisplay .team-logo");
    logos[0].src = home.logo;
    logos[1].src = away.logo;

    
    const scoreElement = document.getElementById("matchScore");
    scoreElement.textContent = `${homeScore} - ${awayScore}`;
    scoreElement.style.color = "#1e88e5";  
}

updateRandomMatch(); 
setInterval(updateRandomMatch, 5000);

    </script>
</body>
</html>
