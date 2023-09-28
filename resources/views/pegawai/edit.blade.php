<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post" class="mx-8 my-6">
                    @csrf
                    <div class="mb-6 w-1/2">
                        <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Induk Pegawai</label>
                        <input type="text" id="nip" name="nip"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="NIP" value="{{ $pegawai->nip }}" required>
                    </div>
                    <div class="mb-6 w-1/2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Lengkap" value="{{ $pegawai->nama }}" required>
                    </div>
                    <div class="mb-6 w-1/2">
                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Handphone</label>
                        <input type="text" id="nohp" name="nohp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="+628XXXX" value="{{ $pegawai->nohp }}" required>
                    </div>
                    <div class="mb-6 w-3/4">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="alamat" name="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Jl. XXX, Jakarta" value="{{ $pegawai->alamat }}" required>
                    </div>

                    <div class="mb-6 w-1/3">
                        <label for="porto_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Portofolio</label>
                        <select id="porto_id" name="porto_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $pegawai->porto_id }}" selected hidden>{{ $pegawai->portofolio->judul_porto }}</option>
                            @foreach ($portofolios as $portofolio)
                            <option value="{{ $portofolio->id }}">{{ $portofolio->judul_porto }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex space-x-3">
                        <a href="{{ route('pegawai.index') }}"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Kembali</a>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
