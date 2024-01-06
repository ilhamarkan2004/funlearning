<x-app-layout class="text-slate-300">

    <div class="grid grid-cols-1 sm:grid-cols-8 gap-4">
        <section class="sm:col-span-5 pl-[20px] sm:pl-[70px] lg:pl-[100px] xl:pl-[200px] 2xl:pl-[250px] pr-5 py-9">
            <!-- header konten utama -->
            <div>
                <h1 class="text-2xl lg:text-4xl font-bold text-slate-200">{{ $blog->judul }}</h1>
                <br />
                <br />
                <div
                    class="flex flex-row md:flex-col xl:flex-row justify-between items-end md:items-start xl:items-end gap-4">
                    <div
                        class="text-gray-500 flex flex-col md:flex-row gap-1 md:gap-3 2xl:gap-6 items-start md:items-center text-sm 2xl:text-base">
                        <p>by admin</p>
                        <p class="hidden md:block">|</p>
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-clock"></i>
                            <p>{{ $blog->created_at->format('d F Y') }}</p>
                        </div>
                        <p class="hidden md:block">|</p>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-message"></i>
                            <p>{{ $blog->created_at->format('d F Y') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="h-7 w-7 bg-cover bg-no-repeat bg-center rounded-lg"
                            style="background-image: url('{{ asset('build/assets/images/instagram.png') }}')"></div>
                        <div class="h-7 w-7 bg-cover bg-no-repeat bg-center rounded-lg"
                            style="background-image: url('{{ asset('build/assets/images/twitter.jpg') }}')">
                        </div>
                        <div class="h-7 w-7 bg-cover bg-no-repeat bg-center rounded-lg"
                            style="background-image: url('{{ asset('build/assets/images/whatsapp.jpg') }}')">
                        </div>
                        <div class="h-7 w-7 bg-cover bg-no-repeat bg-center rounded-lg"
                            style="background-image: url('{{ asset('build/assets/images/facebook.png') }}')">
                        </div>
                    </div>
                </div>
            </div>
            <!-- header konten utama -->
            <br />
            <br />
            <!-- konten utama -->
            <div class="h-[350px] w-full">
                <div class="h-full w-full bg-cover bg-no-repeat bg-center rounded-lg"
                    style="background-image: url({{asset('storage/' . $blog['gambar'])}})"></div>
            </div>
            <br />
            <p class="text-slate-200 text-justify">
                {{ $blog->deskripsi }}
                <br />

                <br />
                <br />
                <!-- komentar -->
                <div class="">
                    <p class="font-medium">Komentar</p>
                    <div class="relative group">
                        <input type="text" placeholder="Tulis komentarmu"
                            class="mt-2 p-2.5 w-full border-2 border-gray focus:border-pink-600 rounded-xl bg-transparent placeholder:text-gray text-slate-300 hover:bg-lightGray/50" />
                        <i
                            class="absolute top-4 right-5 text-slate-300 text-lg fa-solid fa-paper-plane group-hover:text-cyan hover:text-pink-600"></i>
                    </div>
                </div>
                <!-- komentar -->
                <br />
                <br />
        </section>
        <aside class="sm:col-span-3 px-[20px] sm:pr-[70px] lg:pr-[100px] xl:pr-[150px] 2xl:pr-[200px] py-9">
            <div class="bg-stone-900 rounded-md p-5">


                <h1 class="font-medium text-slate-200  ">Artikel Terpopuler</h1>
                <hr class="border-yellow bg-yellow h-1 my-2" />
                <!-- konten artikel terbaru -->
                <br />
                <div class="">
                    @foreach($artikels as $artikel)
                    <div class="flex gap-4 text-sm text-darkGray items-center ">
                        <div class="h-[50px] w-[20%] sm:w-[30%] lg:w-[20%] bg-cover bg-no-repeat bg-center rounded-lg"
                            style="background-image: url({{asset('storage/' . $artikel['gambar'])}})"></div>
                        <div class="w-[80%] sm:w-[70%] lg:w-[80%]">
                            <a href="{{ url('/artikel/' . $artikel->id) }}"
                                class="font-semibold text-slate-300 hover:underline">{{$artikel->judul}}</a>
                            <div
                                class="text-gray flex gap-0 2xl:gap-2 2xl:items-center pt-1 justify-start flex-col 2xl:flex-row text-gray-500">
                                <p>by admin</p>
                                <p class="hidden 2xl:block">|</p>
                                <div class="flex items-center gap-2">
                                    <i class="hidden 2xl:block fa-regular fa-clock"></i>
                                    <p>{{ $artikel->created_at->format('d F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    @endforeach
                </div>
                <div class="flex gap-4 text-sm text-darkGray items-center">
                    <div class="h-[50px] w-[20%] sm:w-[30%] lg:w-[20%] bg-cover bg-no-repeat bg-center rounded-lg"
                        style="background-image: url({{asset('build/assets/images/masjid1.jpg')}})"></div>
                    <div class="w-[80%] sm:w-[70%] lg:w-[80%]">
                        <p class="font-semibold text-slate-300">Perundungan yang dilakukan kian marak</p>
                        <div
                            class="text-gray flex gap-0 2xl:gap-2 2xl:items-center pt-1 justify-start flex-col 2xl:flex-row text-gray-500">
                            <p>by admin</p>
                            <p class="hidden 2xl:block">|</p>
                            <div class="flex items-center gap-2">
                                <i class="hidden 2xl:block fa-regular fa-clock"></i>
                                <p>24 Oktober 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br />

                <br />
            </div>
            <!-- konten artikel terbaru -->
            <br />
            <br />
            <br />
            <!-- notifikasi mail -->
            {{-- <div
                class="border-2 border-gray/50 text-gray h-[200px] rounded-md flex flex-col items-center justify-center">
                <span><i class="fa-regular fa-envelope text-6xl"></i></span>
                <p class="font-medium">Newsletter</p>
                <p class="text-sm">Subscribe to get news update</p>
            </div> --}}
            <!-- notifikasi mail -->
        </aside>
    </div>
    <br />
    <br />
    <br />
    <br />


</x-app-layout>
