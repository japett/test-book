<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
</head>
<body>
    <h1>Form Booking</h1>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">No Telp:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="address">Domisili:</label>
        <input type="text" id="domicile" name="domicile" required><br><br>

        <label for="time">Waktu/Jam:</label>
        <input type="time" id="time" name="time" required><br><br>

        <label for="date">Tanggal:</label>
        <input type="date" id="date" name="date" required><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
