<x-app-layout>
    <title> {{$pageTitle}} | {{ config('app.name', 'Laravel') }}</title>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{-- start tombol tambah --}}
                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                           <a href="{{ route('admin-create-galeri-photo') }}">
                            Tambah Data
                           </a>
                        </button>
                        {{-- end tombol tambah --}}



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    judul album
                </th>
                <th scope="col" class="px-6 py-3">
                    deskripsi
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Gambar
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($listPost as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration}}
                </th>
                <td class="px-6 py-4">
                    {{ $post->title}}
                </td>
                <td class="px-6 py-4">
                    {{ $post->description}}
                </td>
                <td class="px-6 py-4">
                    {{ $post->category}}
                </td>
                <td class="px-6 py-4">
                    {{ __('Belum ada gambar')}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a
                    href="{{ route('admin-edit-galeri-photo',[$post->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Edit
                </a>
                </td>
            </tr>
            @empty
            <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                <span class="font-medium">Warning alert!</span> gada datas
              </div>
            @endforelse
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
