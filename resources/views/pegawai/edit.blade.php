<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post" class="flex flex-col">
                    @csrf
            
                    <input type="text" name="nip" value="{{ $pegawai->nip }}" placeholder="NIP" class="mb-2">
                    <input type="text" name="nama" value="{{ $pegawai->nama }}" placeholder="Nama" class="mb-2">
                    <input type="number" name="nohp" value="{{ $pegawai->nohp }}" placeholder="Nomor HP" class="mb-2">
                    <input type="text" name="alamat" value="{{ $pegawai->alamat }}" placeholder="Alamat" class="mb-2">
                    <select name="porto_id">
                        <option value="{{ $pegawai->porto_id }}" selected hidden>{{ $pegawai->portofolio->judul_porto }}</option>
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
