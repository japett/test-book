<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wtih=device-width, intial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('memberRegister') }}" method="POST">
        @csrf
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="no_telp">No Telp:</label>
        <input type="number" name="phone" required>
        <br><br>

        <label for="alamt">Alamat:</label>
        <textarea name="domicile" required></textarea>
        <br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>