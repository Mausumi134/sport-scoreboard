<!-- resources/views/widgets/games.blade.php -->

<div id="wg-api-football-games"
     data-host="{{ env('API_SPORTS_HOST', 'v3.football.api-sports.io') }}"
     data-key="{{ env('API_SPORTS_KEY') }}"
     data-date="{{ $date ?? '' }}"
     data-league="{{ $league ?? '' }}"
     data-season="{{ $season ?? '' }}"
     data-theme="{{ $theme ?? '' }}"
     data-refresh="{{ $refresh ?? '60' }}"
     data-show-toolbar="{{ $showToolbar ?? 'true' }}"
     data-show-errors="{{ $showErrors ?? 'false' }}"
     data-show-logos="{{ $showLogos ?? 'true' }}"
     data-modal-game="{{ $modalGame ?? 'true' }}"
     data-modal-standings="{{ $modalStandings ?? 'true' }}"
     data-modal-show-logos="{{ $modalShowLogos ?? 'true' }}">
</div>

<script type="module" src="https://widgets.api-sports.io/2.0.3/widgets.js"></script>

<style>
    /* General styling */
    body {
        background-color:rgb(255, 119, 0); /* Set the entire body background to black */
    }

    #wg-api-football-games {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        background-color: #000;
        color: #fff;
        margin: 20px auto;
        max-width: 800px;
        border: 2px solid #2ecc71;
        /* Force hardware acceleration */
        transform: translateZ(0);
        backface-visibility: hidden;
    }

    /* Toolbar styling */
    .widget-toolbar {
        background-color: #1a1a1a;
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        border-bottom: 2px solid #2ecc71;
    }

    .widget-toolbar button, .widget-toolbar input {
        background-color: #2ecc71;
        color: #000;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Force hardware acceleration */
        transform: translateZ(0);
        backface-visibility: hidden;
        will-change: background-color;
    }

    .widget-toolbar button:hover {
        background-color: #32d27d;
    }

    .widget-toolbar input[type="date"] {
        background-color: #333;
        color: #fff;
        border: 1px solid #2ecc71;
        padding: 8px;
        border-radius: 5px;
    }

    /* Match list styling */
    .match-list {
        padding: 10px;
    }

    .match-item {
        background-color: #121212;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #2ecc71;
        /* Force hardware acceleration */
        transform: translateZ(0);
        backface-visibility: hidden;
        transition: background-color 0.3s ease;
        will-change: background-color;
    }

    .match-item:hover {
        background-color: #1e1e1e;
    }

    .team-names {
        flex-grow: 1;
        text-align: center;
        font-size: 16px;
        color: #fff;
    }

    .score {
        font-weight: bold;
        font-size: 18px;
        margin: 0 10px;
        color: #2ecc71;
    }

    /* Logo styling */
    .team-logo {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 0 10px;
        border: 1px solid #2ecc71;
        /* Force hardware acceleration */
        transform: translateZ(0);
        backface-visibility: hidden;
    }

    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #000;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        width: 80%;
        max-width: 600px;
        border: 2px solid #2ecc71;
        /* Force hardware acceleration */
        transform: translateZ(0);
        backface-visibility: hidden;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    #wg-api-football-games::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    #wg-api-football-games {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Responsive design */
    @media (max-width: 600px) {
        .widget-toolbar {
            flex-direction: column;
        }

        .widget-toolbar button, .widget-toolbar input {
            margin: 5px 0;
            width: 100%;
        }

        .match-item {
            flex-direction: column;
            text-align: center;
        }

        .team-names {
            margin-top: 10px;
        }

        .score {
            margin: 5px 0;
        }

        .team-logo {
            margin: 5px auto;
        }
    }
</style>

