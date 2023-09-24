<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawais</title>
</head>
<body>
    <h1>Pegawai</h1>

    <p>NIP: {{ $pegawai->nip }}</p>
    <p>Nama: {{ $pegawai->nama }}</p>
    <p>Nomor HP: {{ $pegawai->nohp }}</p>
    <p>Alamat: {{ $pegawai->alamat }}</p>
    <p>Portofolio: {{ $pegawai->portofolio->judul_porto }}</p>

    <a href="{{ route('pegawai.index') }}">Kembali ke daftar pegawai</a>
</body>
</html>
