<x-app-layout class="overflow-x-hidden">
    <x-slot name="header" class="">
        <h2 class="font-semibold text-xl text-white  leading-tight">
            {{ __('Daftar Galery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">
            <div class="flex flex-col overflow-x-auto">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 mt-10">
                        <a href="{{ route('galery.create') }}"
                            class="text-white w-full rounded-lg py-3 px-3 mt-4 bg-[#0e8f8f] text-xs hover:bg-white hover:text-[#0e8f8f] text-center">
                            <i class="fas fa-plus-circle mr-2"></i> Tambah Galery
                        </a>
                        <div class="overflow-x-auto mt-5">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">Gambar/Video</th>
                                        <th scope="col" class="px-6 py-4">Nama</th>
                                        <th scope="col" class="px-6 py-4">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $nomor_urut = 1; @endphp
                                    @foreach($galerys as $galery)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $nomor_urut }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            @if (in_array(pathinfo($galery['file'], PATHINFO_EXTENSION), ['jpg', 'jpeg',
                                            'png', 'svg']))
                                            <img class="overflow-hidden h-24 w-full object-cover object-center"
                                                src="{{ asset('storage/' . $galery['file']) }}" alt="product image" />
                                            @else
                                            <video class="overflow-hidden h-24 w-full object-cover object-center"
                                                autoplay loop>
                                                <source src="{{ asset('storage/' . $galery['file']) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $galery['nama'] }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $galery['apk'] }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a href="{{ route('galery.edit', $galery) }}"
                                                class="text-yellow-500 hover:underline mr-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('galery.destroy',$galery) }}" method="POST"
                                                class="inline-block"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus galery ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php $nomor_urut++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
