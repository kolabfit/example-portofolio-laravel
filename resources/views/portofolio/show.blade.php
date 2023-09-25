<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p class="text-lg mb-2">Judul: {{ $portofolio->judul_porto }}</p>
                <p class="text-lg mb-2">Deskripsi: {{ $portofolio->deskripsi }}</p>
                <p class="text-lg mb-2">Tahun: {{ $portofolio->tahun }}</p>
                <p class="text-lg mb-2">URL: {{ $portofolio->url }}</p>
                <p class="text-lg mb-2 border-t-2 border-gray-200">Kategori: {{ $portofolio->kategori->nama_kat }}</p>
            
                <a href="{{ route('portofolio.index') }}">Kembali ke daftar pegawai</a>
            </div>
        </div>
    </div>
</x-app-layout>
