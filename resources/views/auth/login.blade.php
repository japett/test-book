<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if (session('succes'))
    <div>
        {{ session('succes') }}
    </div>
    @endif

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap"required>
        <br><br>

        <label for="member_id">Member ID:</label>
        <input type="text" name="member_id" required>
        <br><br>

        <button type="submit">Login</button>
</body>
</html>