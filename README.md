# ⚽ Real-time Sports Scoreboard

A real-time sports scoreboard built with **Laravel 12**, designed to display live football match scores, fixtures, and league standings using data from the **[API-Football](https://www.api-football.com/)** API. This app fetches and displays data on demand—ideal for keeping up with football leagues around the world.

## 🔥 Key Features

- ✅ Live football match scores from global leagues
- 📅 Upcoming fixtures and match schedules
- 📊 Live league tables and team stats
- 🌐 Data fetched via API-Football on user request or page refresh
- 📱 Mobile-responsive UI

## 🧰 Tech Stack

- **Backend**: Laravel 12
- **API**: [API-Football](https://www.api-football.com/)
- **HTTP Client**: Laravel HTTP Client (Guzzle)
- **Frontend**: Blade + Tailwind CSS / Bootstrap
- **Database**: (Optional) MySQL / PostgreSQL for local caching

---

## ⚙️ Installation Guide

### 1. Clone the repository

```bash
git clone https://github.com/your-username/realtime-sports-scoreboard.git
cd realtime-sports-scoreboard
```

### 2. Install dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Configure environment variables

```bash
cp .env.example .env
php artisan key:generate
```

Set your API-Football credentials in `.env`:

```env
API_SPORTS_HOST=https://v3.football.api-sports.io
API_SPORTS_KEY=your_api_key_here
```

### 4. Run the application

```bash
php artisan serve
```

---

## 🧠 How It Works

- The app sends HTTP requests to **api-football.com** to retrieve real-time data.
- Endpoints include live matches, fixtures, teams, and league standings.
- Data is displayed directly on the front-end using Blade templates.
- No cron jobs, WebSockets, or dashboards—just clean, API-driven UI rendering.

---

## 📂 Project Structure (Key Files)

```
app/
├── Http/
│   └── Controllers/         # API controllers to handle data fetching
├── Services/                # Custom service for API-Football requests
resources/
├── views/                   # Blade templates
routes/
└── web.php                  # Routes to pages (e.g., /live, /standings)
```

---

## ✅ TODOs

- [x] Fetch and display live scores
- [x] Show upcoming fixtures and past results
- [x] Display team stats and league standings

---

## 🧑‍💻 Author

**Mausumi Ghadei**  
Built using Laravel 12 + API-Football

---

## 📄 License

Open-sourced under the [MIT License](LICENSE).

---

