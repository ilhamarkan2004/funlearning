<x-app-layout>

    <section class="container flex justify-center pt-16 mb-20 overflow-x-hidden">
        <div class="container">
            @if (session()->has('success'))

            <div id="alert-3" class="flex p-4  rounded-lg bg-gray-800 text-green-400 mt-3 mb-10" role="alert">
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
                    class="ml-auto -mx-1.5 -my-1.5  rounded-lg focus:ring-2 inline-flex h-8 w-8 bg-gray-800 text-green-400 hover:bg-gray-700"
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
            <div id="alert-2" class="flex items-center p-4  bg-gray-800 text-red-400 mt-3 mb-10 " role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    {{ session()->get('error') }}
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-gray-800 text-red-500  rounded-lg focus:ring-2 focus:ring-red-500 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8  "
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            @endif
            <h2 class="text-xl tracking-wide break-words container text-center font-extrabold text-white">
                {{$app->nama}}
            </h2>
            <div class="mt-10">
                <div class="mx-auto">
                    <img src="{{ asset('storage/'. $app->gambar)  }}" alt=" Gambar produk"
                        class=" mx-auto max-w-sm w-full rounded-md">

                    <form
                        class="mt-3 mx-auto block text-center w-32 py-1 xl:py-1.5 rounded-md  text-base bg-pink-500 hover:bg-pink-700 text-white hover:text-slate-300"
                        method="POST" action="{{route('keranjang.store')}}">
                        @csrf
                        <input type="text" name="id" class="hidden" value="{{$app->id}}">
                        <button class=" w-full  " type="submit">
                            Beli Sekarang
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-6 xs:max-w-sm p-12 md:mx-8 xl:max-w-none mx-auto">
                <h2 class="text-lg font-bold text-slate-200 mb-2 break-words">Description Apps</h2>
                <p class="text-slate-300 mt-2 break-words text-justify">{{ $app['deskripsi'] }}</p>
            </div>
        </div>
    </section>


</x-app-layout>
