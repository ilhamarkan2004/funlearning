<x-app-layout class="">
    <x-slot name="header">
        <h2 class="text-2xl text-[18px] text-slate-200 font-bold text-center">Koleksi App Anda</h2>
    </x-slot>

    <div class="container bg-black mx-auto">
        @empty($app)
        <p class="mt-14 text-center text-slate-200 text-sm font-semibold">App belum tersedia.</p>
        @else

        @if (session()->has('success'))

            <div id="alert-3" class="flex p-4 mb-10  text-green-700 bg-green-100 rounded-lg" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ session()->get('success') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8  "
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>


            @endif

        @if (session()->has('error'))
            <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 " role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ session()->get('error') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 "
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            @endif
        <div class="flex flex-wrap gap-2 lg:gap-5 xl:gap-10 justify-center">
            @foreach($apps as $app)
            <!-- CARD -->
            <div
                class="w-[175px] lg:w-72 xl:w-90 border-slate-100 bg-transparent xl:rounded-xl shadow-lg shadow-slate-700 overflow-x-hidden">
                <div class=" p-4 ">
                    <img class="overflow-hidden h-80 w-full object-cover object-center"
                        src="{{ asset('storage/'. $app->gambar) }}" alt="Book image" />
                    <div class="">
                        <div class="">
                            <p class="text-lg lg:text-lg text-slate-900 font-semibold text-center mb-1">{{ $app->nama }}
                            </p>
                            <a href="{{asset('storage/'. $app->apk)}}" download
                                class="block text-center py-1 xl:py-1.5 rounded-lg border bg-pink-500 hover:bg-pink-700 text-white hover:text-slate-300">
                                Download
                            </a>


                    

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endempty
    </div>
    <script>
        // JavaScript untuk interaksi dengan bintang rating
        const stars = document.querySelectorAll('[data-value]');
        const ratingValueInput = document.getElementById('rating-value');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const value = parseInt(star.getAttribute('data-value'));
                stars.forEach(s => s.classList.remove('text-yellow-500'));
                for (let i = 0; i < value; i++) {
                    stars[i].classList.add('text-yellow-500');
                }
                ratingValueInput.value = value;
            });
        });

    </script>
</x-app-layout>
