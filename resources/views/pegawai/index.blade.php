<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawais</title>
</head>
<body>
    <h1>Pegawais</h1>

    <a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>

    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                {{-- <th>Portofolio</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->nip }}</td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->nohp }}</td>
                <td>{{ $pegawai->alamat }}</td>
                {{-- <td>{{ $pegawai->portofolio->judul_porto }}</td> --}}
                <td>
                    <a href="{{ route('pegawai.show', $pegawai->id) }}">Lihat</a>
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post">
                        @csrf
                        <button type="submit">Hapus</button>
                    </form>
                    {{-- <a href="{{ route('pegawais.destroy', $pegawai->id) }}">Hapus</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>