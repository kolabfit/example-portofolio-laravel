<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('portofolio.update', $portofolio->id) }}" method="post" class="mx-8 my-6">
                    @csrf
                    <div class="mb-6 w-1/2">
                        <label for="judul_porto"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" id="judul_porto" name="judul_porto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Portofolio X" value="{{ $portofolio->judul_porto }}" disabled>
                    </div>
                    <div class="mb-6 w-1/6">
                        <label for="tahun"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                        <input type="text" id="tahun" name="tahun"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="2023" value="{{ $portofolio->tahun }}" disabled>
                    </div>
                    <div class="mb-6 w-3/4">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Portofolio tentang..." disabled>{{ $portofolio->deskripsi }}</textarea>
                    </div>
                    <div class="mb-6 w-3/4">
                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL
                            Portofolio</label>
                        <input type="text" id="url" name="url"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="https://example.com/xxx" value="{{ $portofolio->url }}" disabled>
                    </div>

                    <div class="mb-6 w-1/3">
                        <label for="kategori_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Portofolio</label>
                        <select id="kategori_id" name="kategori_id" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $portofolio->kategori_id }}" selected hidden>{{ $portofolio->kategori->nama_kat ?? '' }}</option>
                        </select>
                    </div>

                    <div class="flex space-x-3">
                        <a href="{{ route('portofolio.index') }}"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
