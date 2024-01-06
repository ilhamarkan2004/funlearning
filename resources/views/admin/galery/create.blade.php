<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Tambah Galery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg bg-white">
                <div class="p-6 text-gray-900">
                    <div class="p-8 rounded">
                        <h1 class="font-medium text-3xl">Tambah Galery</h1>
                        <p class="text-gray-600 mt-6">Jika ingin menambahkan Galery baru, maka isilah beberapa form di
                            bawah ini</p>
                        <form method="POST" action="{{ route('galery.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-8 grid lg:grid-cols-3 gap-4">
                                <div>
                                    <label for="nama"
                                        class="text-sm text-gray-700 block mb-1 font-medium">Nama Galery</label>
                                    <input type="text" name="nama" id="nama"
                                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                                        placeholder="Nama Aplikasi" value=" {{ old('nama') }}" />
                                    @error('nama')
                                    <p class="text-red-500 mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-8 grid lg:grid-cols-3 gap-4">
                                <div>
                                    <label for="produksi"
                                        class="text-sm text-gray-700 block mb-1 font-medium">Produksi Galery</label>
                                    <input type="text" name="produksi" id="produksi"
                                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                                        placeholder="produksi Aplikasi" value=" {{ old('produksi') }}" />
                                    @error('produksi')
                                    <p class="text-red-500 mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-8 grid lg:grid-cols-3 gap-4">
                                <div>
                                    <label for="tahun"
                                        class="text-sm text-gray-700 block mb-1 font-medium">Tahun Produksi</label>
                                    <input type="text" name="tahun" id="tahun"
                                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                                        placeholder="tahun Aplikasi" value=" {{ old('tahun') }}" />
                                    @error('nama')
                                    <p class="text-red-500 mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                             <div class="mt-8">
                                <label for="logo" class="text-sm text-gray-700 block mb-1 font-medium">Logo Produksi</label>
                                <input name="logo" type="file"
                                    class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                                @error('logo')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="file" class="text-sm text-gray-700 block mb-1 font-medium">Video
                                    Apps</label>
                                <input name="file" type="file"
                                    class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                                @error('file')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="space-x-4 mt-8">
                                <button type="submit"
                                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                                <a href=""
                                    class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
