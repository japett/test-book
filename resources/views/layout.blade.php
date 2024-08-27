<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bossqu Barbershop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav style="background-color: #1A1A1A; padding: 10px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="color: #FFD700; font-size: 24px; font-weight: bold;">
                BOSSQU BARBERSHOP
            </div>
            <ul style="list-style: none; display: flex; gap: 20px; margin-left: auto;">
                <li><a href="{{ route('home') }}" style="color: #fff; text-decoration: none;">Home</a></li>
                <li><a href="{{ route('about') }}" style="color: #fff; text-decoration: none;">About</a></li>
                <li><a href="{{ route('location') }}" style="color: #fff; text-decoration: none;">Location</a></li>
                <li><a href="{{ route('service') }}" style="color: #fff; text-decoration: none;">Service</a></li>
                <li><a href="{{ route('membership') }}" style="color: #1A1A1A; background-color: #b3b3b3; padding: 5px 10px; border-radius: 15px; text-decoration: none;">Membership</a></li>
            </ul>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
