<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portofolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg lg:p-8">
                <a href="{{ route('portofolio.create') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Portofolio</a>

                <div class="relative overflow-x-auto shadow-md mt-6 sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tahun
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    URL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portofolios as $portofolio)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $portofolio->judul_porto }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $portofolio->tahun }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $portofolio->url }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $portofolio->kategori->nama_kat ?? '' }}
                                </td>
                                <td class="px-6 py-4 flex space-x-3">
                                    <a href="{{ route('portofolio.show', $portofolio->id) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Lihat</a>
                                    <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('portofolio.destroy', $portofolio->id) }}" class="flex" method="post">
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
