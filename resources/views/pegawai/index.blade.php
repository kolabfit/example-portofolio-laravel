<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg lg:p-8">
                <a href="{{ route('pegawai.create') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pegawai</a>

                <div class="relative overflow-x-auto shadow-md mt-6 sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NIP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor HP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Portofolio
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $pegawai)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $pegawai->nip }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $pegawai->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pegawai->nohp }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pegawai->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pegawai->portofolio->judul_porto ?? '' }}
                                </td>
                                <td class="px-6 py-4 flex space-x-3">
                                    <a href="{{ route('pegawai.show', $pegawai->id) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Lihat</a>
                                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" class="flex" method="post">
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
