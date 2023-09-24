<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawais</title>
</head>
<body>
    <h1>Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
        @csrf

        <input type="text" name="nip" value="{{ $pegawai->nip }}" placeholder="NIP">
        <input type="text" name="nama" value="{{ $pegawai->nama }}" placeholder="Nama">
        <input type="number" name="nohp" value="{{ $pegawai->nohp }}" placeholder="Nomor HP">
        <input type="text" name="alamat" value="{{ $pegawai->alamat }}" placeholder="Alamat">

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pegawai.index') }}">Kembali ke daftar pegawai</a>
</body>
</html>
