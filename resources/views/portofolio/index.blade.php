<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portofolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg lg:p-8">
                <a href="{{ route('portofolio.create') }}" class="btn-primary">Tambah Portofolio</a>

                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="text-lg">Judul</th>
                            <th class="text-lg">Tahun</th>
                            <th class="text-lg">URL</th>
                            <th class="text-lg">Kategori</th>
                            <th class="text-lg">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portofolios as $portofolio)
                        <tr>
                            <td class="text-lg">{{ $portofolio->judul_porto }}</td>
                            <td class="text-lg">{{ $portofolio->tahun }}</td>
                            <td class="text-lg">{{ $portofolio->url }}</td>
                            <td>{{ $portofolio->kategori->nama_kat ?? '' }}</td>
                            <td class="flex">
                                <a href="{{ route('portofolio.show', $portofolio->id) }}" class="btn-primary">Lihat</a>
                                <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="btn-secondary">Edit</a>
                                <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
