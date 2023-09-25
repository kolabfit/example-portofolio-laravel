<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('pegawai.store') }}" method="post" class="flex flex-col">
                    @csrf
            
                    <input type="text" name="nip" placeholder="NIP" class="mb-2">
                    <input type="text" name="nama" placeholder="Nama" class="mb-2">
                    <input type="number" name="nohp" placeholder="Nomor HP" class="mb-2">
                    <input type="text" name="alamat" placeholder="Alamat" class="mb-2">
                    <select name="porto_id">
                        <option value="">Pilih Portofolio</option>
                        @foreach ($portofolios as $portofolio)
                        <option value="{{ $portofolio->id }}">{{ $portofolio->judul_porto }}</option>
                        @endforeach
                    </select>
            
                    <button type="submit" class="mb-2">Simpan</button>
                </form>
            
                <a href="{{ route('pegawai.index') }}" class="justify-between">Kembali ke daftar pegawai</a>
            </div>
        </div>
    </div>
</x-app-layout>
