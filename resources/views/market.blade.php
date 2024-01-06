<x-app-layout class="">
    <x-slot name="header">
        <h2 class="text-2xl text-[18px] text-slate-200 font-bold text-center">Market Application</h2>
    </x-slot>

    <div class="container bg-black mx-auto">



        @empty($apps)
        <p class="mt-14 text-center text-slate-800 text-sm font-semibold">Aplikasi belum tersedia.</p>
        @else
        <div class="flex flex-wrap gap-2 lg:gap-5 xl:gap-10 justify-center">
            @foreach($apps as $app)
            <!-- CARD -->
            <div
                class="w-[175px] lg:w-48 xl:w-60 border-slate-800 border border- bg-transparent rounded xl:rounded-lg shadow-lg shadow-stone-800 overflow-x-hidden">
                <a class="mb-2 p-3 block">
                    <img class="overflow-hidden h-64 w-full object-cover object-center -mb-5"
                        src="{{ asset('storage/'. $app->gambar) }}" alt="Book image" />
                    <div class="px-3 pb-1">
                        <p class="text-lg lg:text-lg text-slate-200 font-semibold text-center mb-1 ">
                            {{ $app['nama'] }}
                        </p>
                        <a href="{{ route('market.show',$app->id) }}"
                            class="block text-center py-1 xl:py-1.5 mb-4 rounded-lg bg-pink-600 text-white transform scale-100 hover:scale-105 transition-transform duration-300"
                            >
                            Read
                        </a>
                    </div>

                </a>
            </div>
            @endforeach
        </div>
        @endempty
    </div>
</x-app-layout>
