<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Portofolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('portofolio.store') }}" method="post" class="flex flex-col">
                    @csrf
            
                    <input type="text" name="judul_porto" placeholder="Judul" class="mb-2">
                    <textarea name="deskripsi" cols="30" rows="10"></textarea>
                    <input type="text" name="tahun" placeholder="Tahun" class="mb-2">
                    <input type="text" name="url" placeholder="https://example.com" class="mb-2">
                    <select name="kategori_id">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategories as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kat }}</option>
                        @endforeach
                    </select>
            
                    <button type="submit" class="mb-2">Simpan</button>
                </form>
            
                <a href="{{ route('portofolio.index') }}" class="justify-between">Kembali ke daftar pegawai</a>
            </div>
        </div>
    </div>
</x-app-layout>
