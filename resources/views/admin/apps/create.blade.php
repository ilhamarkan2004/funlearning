<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Tambah Apps') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg bg-white">
                <div class="p-6 text-gray-900">
                    <div class="p-8 rounded">
                        <h1 class="font-medium text-3xl">Tambah Apps</h1>
                        <p class="text-gray-600 mt-6">Jika ingin menambahkan apps baru, maka isilah beberapa form di
                            bawah ini</p>
                        <form method="POST" action="{{ route('apps.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-8 grid lg:grid-cols-3 gap-4">
                                <div>
                                    <label for="nama" class="text-sm text-gray-700 block mb-1 font-medium">Nama
                                        Aplikasi</label>
                                    <input type="text" name="nama" id="nama"
                                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                                        placeholder="Nama Aplikasi" value=" {{ old('nama') }}" />
                                    @error('nama')
                                    <p class="text-red-500 mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-8">
                                <label for="harga" class="text-sm text-gray-700 block mb-1 mt-4 font-medium">Harga
                                    Apps</label>
                                <input type="number" name="harga" id="harga"
                                    class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                                    placeholder="Harga" value=" {{ old('harga') }}" />
                                @error('harga')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="tipe" class="text-sm text-gray-700 block mb-1 mt-4 font-medium">Tipe</label>
                                <select name="tipe"
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option class="font-bold " value="">Pilih Tipe</option>
                                    <option value="gratis">Gratis</option>
                                    <option value="berbayar">Berbayar</option>
                                </select>
                                @error('tipe')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="kategori"
                                    class="text-sm text-gray-700 block mb-1 mt-4 font-medium">Kategori</label>
                                <select name="kategori"
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label="Default select example">
                                    <option class="font-bold " value="">Pilih Kategori</option>
                                    <option value="konvensional">Konvensional</option>
                                    <option value="apps">Apps</option>
                                    <option value="bundle">Bundle</option>
                                </select>
                                @error('kategori')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="deskripsi" class="text-sm text-gray-700 block mb-1 font-medium">Deskripsi
                                    Apps</label>
                                <textarea placeholder="Deskripsi Apps" name="deskripsi" id="deskripsi" cols="30"
                                    rows="10"
                                    class="w-full bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700"> {{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="gambar" class="text-sm text-gray-700 block mb-1 font-medium">Gambar
                                    Apps</label>
                                <input name="gambar" type="file"
                                    class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                                @error('gambar')
                                <p class="text-red-500 mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <label for="apk" class="text-sm text-gray-700 block mb-1 font-medium">File APK</label>
                                <input name="apk" type="file"
                                    class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                                @error('apk')
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
