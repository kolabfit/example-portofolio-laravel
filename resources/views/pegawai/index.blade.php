<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg lg:p-8">
                <a href="{{ route('pegawai.create') }}" class="btn-primary">Tambah Pegawai</a>

                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="text-lg">NIP</th>
                            <th class="text-lg">Nama</th>
                            <th class="text-lg">Nomor HP</th>
                            <th class="text-lg">Alamat</th>
                            <th>Portofolio</th>
                            <th class="text-lg">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $pegawai)
                        <tr>
                            <td class="text-lg">{{ $pegawai->nip }}</td>
                            <td class="text-lg">{{ $pegawai->nama }}</td>
                            <td class="text-lg">{{ $pegawai->nohp }}</td>
                            <td class="text-lg">{{ $pegawai->alamat }}</td>
                            <td>{{ $pegawai->portofolio->judul_porto ?? '' }}</td>
                            <td class="flex">
                                <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn-primary">Lihat</a>
                                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn-secondary">Edit</a>
                                <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn-danger">Hapus</button>
                                </form>
                                {{-- <a href="{{ route('pegawais.destroy', $pegawai->id) }}">Hapus</a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
