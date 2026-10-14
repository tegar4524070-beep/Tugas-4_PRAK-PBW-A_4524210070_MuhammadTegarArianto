<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - DON Game Store</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #12131c;
            --line: #262833;
            --ink: #eceef5;
            --muted: #9ca3b4;
            --accent: #6ee7b7;
            --accent-ink: #0b1a14;
            --surface: #1a1c27;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Manrope', system-ui, -apple-system, 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        a:focus-visible, button:focus-visible { outline: 2px solid var(--accent); outline-offset: 3px; border-radius: 6px; }

        .container { width: 100%; max-width: 1040px; margin: 0 auto; padding-left: 24px; padding-right: 24px; }

        /* Header */
        .site-header {
            display: flex; align-items: center; justify-content: space-between; gap: 16px;
            padding-top: 16px; padding-bottom: 16px;
            border-bottom: 1px solid var(--line);
        }
        .brand { display: flex; align-items: center; }
        .logo { height: 44px; width: auto; display: block; }
        .nav { display: flex; align-items: center; gap: 24px; font-size: 0.9375rem; }
        .nav a, .nav button { color: var(--muted); transition: color .15s; }
        .nav a:hover, .nav button:hover, .nav a.active { color: var(--ink); }
        .nav button { background: none; border: 0; font: inherit; cursor: pointer; }
        .nav form { display: inline; }
        .nav .nav-cta { background: var(--accent); color: var(--accent-ink); padding: 8px 20px; border-radius: 999px; font-weight: 700; }
        .nav .nav-cta:hover { color: var(--accent-ink); filter: brightness(1.08); }

        /* Konten */
        main { flex: 1; padding-top: 56px; padding-bottom: 56px; }
        section + section { margin-top: 56px; }
        h1 { font-size: clamp(2rem, 5.5vw, 3.5rem); font-weight: 800; line-height: 1.1; letter-spacing: -0.03em; max-width: 20ch; color: var(--accent); }
        h2 { font-size: 1.375rem; font-weight: 700; margin-bottom: 20px; }
        .lead { margin-top: 16px; max-width: 46ch; font-size: 1.0625rem; color: var(--muted); }

        /* Tombol */
        .actions { margin-top: 32px; display: flex; flex-wrap: wrap; gap: 12px; }
        .btn { display: inline-block; padding: 12px 28px; border-radius: 999px; border: 1px solid var(--line); font-size: 0.9375rem; font-weight: 500; color: var(--ink); transition: border-color .15s, filter .15s; }
        .btn:hover { border-color: var(--accent); }
        .btn-primary { background: var(--accent); border-color: var(--accent); color: var(--accent-ink); font-weight: 700; }
        .btn-primary:hover { filter: brightness(1.08); }

        /* Daftar data (about, akun) */
        dl { max-width: 560px; border-top: 1px solid var(--line); }
        .row { display: grid; grid-template-columns: 120px 1fr; gap: 16px; padding: 18px 0; border-bottom: 1px solid var(--line); }
        dt { color: var(--muted); font-size: 0.9375rem; }
        dd { font-weight: 500; overflow-wrap: anywhere; }
        dd a:hover { color: var(--accent); }

        /* Kartu game (dashboard) */
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px; }
        .card { background: var(--surface); border: 1px solid var(--line); border-radius: 12px; padding: 20px; transition: border-color .15s; }
        .card:hover { border-color: var(--accent); }
        .card strong { display: block; font-size: 1.0625rem; }
        .card small { color: var(--muted); }
        .empty { background: var(--surface); border: 1px dashed var(--line); border-radius: 12px; padding: 28px; }
        .empty p { color: var(--muted); margin-bottom: 18px; }

        /* Footer */
        .site-footer { padding-top: 24px; padding-bottom: 32px; border-top: 1px solid var(--line); color: var(--muted); font-size: 0.875rem; }

        /* HP */
        @media (max-width: 560px) {
            .container { padding-left: 16px; padding-right: 16px; }
            .logo { height: 36px; }
            .nav { gap: 12px; font-size: 0.8125rem; }
            .nav .nav-cta { padding: 7px 14px; }
            main { padding-top: 36px; padding-bottom: 36px; }
            .row { grid-template-columns: 1fr; gap: 2px; }
            .actions .btn { flex: 1; text-align: center; padding-left: 14px; padding-right: 14px; }
        }
    </style>
</head>
<body>
    <header class="container site-header">
        <a href="{{ url('/') }}" class="brand">
            <img src="{{ asset('images/Logo.png') }}" alt="DON Game Store" class="logo">
        </a>

        <nav class="nav">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
            @auth
                <a href="{{ route('dashboard') }}" class="nav-cta">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Keluar</button>
                </form>
            @else
                <a href="{{ route('login') }}">Masuk</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-cta">Daftar</a>
                @endif
            @endauth
        </nav>
    </header>

    <main class="container">
        <section>
            <h1>Halo, {{ Auth::user()->name }}.</h1>
            <p class="lead">Selamat datang kembali di DON Game Store.</p>
        </section>

        <section>
            <h2>Mulai top up</h2>
            @php
                // Daftar contoh. Ganti sesuai game yang dijual.
                $games = ['Mobile Legends', 'Free Fire', 'Valorant', 'PUBG Mobile', 'Genshin Impact', 'Roblox'];
            @endphp
            <div class="grid">
                @foreach ($games as $game)
                    <div class="card">
                        <strong>{{ $game }}</strong>
                        <small>Top up</small>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <h2>Riwayat transaksi</h2>
            <div class="empty">
                <p>Belum ada transaksi.</p>
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </section>

        <section>
            <h2>Akun</h2>
            <dl>
                <div class="row">
                    <dt>Nama</dt>
                    <dd>{{ Auth::user()->name }}</dd>
                </div>
                <div class="row">
                    <dt>Email</dt>
                    <dd>{{ Auth::user()->email }}</dd>
                </div>
            </dl>
            <div class="actions">
                <a href="{{ route('profile.edit') }}" class="btn">Edit profil</a>
            </div>
        </section>
    </main>

    <footer class="container site-footer">
        &copy; {{ date('Y') }} DON Game Store
    </footer>
</body>
</html>