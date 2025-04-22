<!-- resources/views/widgets/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Football Scores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ff9933;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1556833460-ff2492678c53?q=80&w=2070') no-repeat center center fixed;
            background-size: cover;
            opacity: 0.4;
            z-index: -2;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: #fff;
            border-radius: 50%;
            opacity: 0.7;
            animation: twinkle 2s infinite;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.7; }
            50% { opacity: 0.3; }
        }

        .marquee-container {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .marquee {
            white-space: nowrap;
            display: inline-block;
            padding-left: 100%;
            animation: marquee 25s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.6);
            border: 2px solid #2ecc71;
            position: relative;
            z-index: 1;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #2ecc71, #3498db, #9b59b6, #f39c12);
            background-size: 400% 400%;
            z-index: -1;
            border-radius: 8px;
            opacity: 0.6;
            animation: gradientAnimation 15s infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.3em;
            margin-bottom: 40px;
            color: #eee;
        }

        .football-icon {
            font-size: 5em;
            color: #2ecc71;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .button {
            display: inline-block;
            padding: 14px 28px;
            background-color: #2ecc71;
            color: #000;
            text-decoration: none;
            border-radius: 7px;
            font-size: 1.3em;
            margin: 0 10px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }

        .button:hover {
            background-color: #32d27d;
            transform: scale(1.05);
        }

        .carousel {
            width: 80%;
            max-width: 800px;
            height: 300px;
            overflow: hidden;
            border-radius: 12px;
            margin-top: 30px;
            position: relative;
        }

        .carousel img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            animation: fade 12s infinite;
        }

        @keyframes fade {
            0% {opacity: 0;}
            10% {opacity: 1;}
            30% {opacity: 1;}
            40% {opacity: 0;}
            100% {opacity: 0;}
        }
    </style>
</head>
<body>
    <div class="marquee-container">
        <div class="marquee">
            Welcome to Live Football Scores - Get the latest updates and real-time results!
        </div>
    </div>

    <div class="container">
        <i class="fas fa-football-ball football-icon"></i>
        <h1>Live Football Scores</h1>
        <p>Experience the thrill of live football scores, real-time updates, and head-to-head match results.</p>
        <a href="/games" class="button">View Games</a>
        <a href="/leagues" class="button">View Leagues</a>
        <a href="/live-scores" class="button">Live Scores</a>
    </div>

    <!-- Carousel of head-to-head football images -->
    

    <script>
        // Create sparkle stars
        function createStar() {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.left = `${Math.random() * 100}vw`;
            star.style.top = `${Math.random() * 100}vh`;
            star.style.animationDelay = `${Math.random() * 2}s`;
            document.body.appendChild(star);
            setTimeout(() => star.remove(), 2000);
        }

        setInterval(createStar, 100);

        
    </script>
</body>
</html>
