<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawais</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>

    <form action="{{ route('pegawai.store') }}" method="post">
        @csrf

        <input type="text" name="nip" placeholder="NIP">
        <input type="text" name="nama" placeholder="Nama">
        <input type="number" name="nohp" placeholder="Nomor HP">
        <input type="text" name="alamat" placeholder="Alamat">

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pegawai.index') }}">Kembali ke daftar pegawai</a>
</body>
</html>
