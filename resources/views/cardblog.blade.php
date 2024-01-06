<x-app-layout>
     <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            {{-- Left Section - Single Blog --}}
            @if(count($blogs) > 0)
                <div class="md:col-span-2 relative h-48 md:h-64 xl:h-72 w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="background-image:url({{asset('storage/' . $blogs[0]['gambar'])}});">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <div class="text-white font-regular flex flex-col justify-start">
                            <?php
                                // Ambil tanggal dari timestamp blog
                                $timestamp = strtotime($blogs[0]['created_at']);
                                $day = date('d', $timestamp); // Mendapatkan tanggal

                                // Ambil bulan dalam tiga huruf pertama
                                $month = date('M', $timestamp); // Mendapatkan tiga huruf pertama dari bulan
                            ?>
                            <span class="text-3xl leading-0 font-semibold">{{ $day }}</span>
                            <span class="-mt-3">{{ $month }}</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="{{ url('/artikel/' . $blogs[0]->id) }}"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$blogs[0]->judul}}
                        </a>
                    </main>
                </div>
            @endif

            {{-- Right Section - List of Blogs --}}
            <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-5">
                @if(count($blogs) > 1)
                    @foreach($blogs->skip(1)->take(2) as $blog)
                        <div class="relative h-48 md:h-64 xl:h-72 w-full flex items-end justify-start text-left bg-cover bg-center"
                            style="background-image:url({{asset('storage/' . $blog['gambar'])}});">
                            <div class="absolute top-0 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                            </div>
                            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                                <div class="text-white font-regular flex flex-col justify-start">
                                    <span class="text-2xl leading-0 font-semibold">{{ $blog->created_at->format('d') }}</span>
                                    <span class="-mt-2">{{ $blog->created_at->format('M') }}</span>
                                </div>
                            </div>
                            <main class="p-3 z-10">
                                <a href="{{ url('/artikel/' . $blog->id) }}"
                                    class="text-sm tracking-tight font-medium leading-6 font-regular text-white hover:underline">{{ $blog->judul }}
                                </a>
                            </main>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    <!-- Component Code -->
    <div id="cardblog" class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

            @foreach($blogs as $blog)
            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url({{asset('storage/' . $blog['gambar'])}});">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    {{-- <a href="#"
                        class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a> --}}
                    <div class="text-white font-regular flex flex-col justify-start">
                        <?php
                            // Ambil tanggal dari timestamp blog
                            $timestamp = strtotime($blog['created_at']);
                            $day = date('d', $timestamp); // Mendapatkan tanggal

                            // Ambil bulan dalam tiga huruf pertama
                            $month = date('M', $timestamp); // Mendapatkan tiga huruf pertama dari bulan
                        ?>
                        <span class="text-3xl leading-0 font-semibold">{{ $day }}</span>
                        <span class="-mt-3">{{ $month }}</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="{{ url('/artikel/' . $blog->id) }}"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{$blog->judul}}
                    </a>
                </main>

            </div>
            @endforeach
            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://media.gettyimages.com/photos/ashraf-ghani-afghanistans-president-speaks-at-the-council-on-foreign-picture-id850794338?k=6&m=850794338&s=612x612&w=0&h=b_XBw5S38Cioslqr6VL3e36cWQU205IsInqDXZpDOD4=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    {{-- <a href="#"
                        class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a> --}}
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">10</span>
                        <span class="-mt-3">Mar</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Lorem
                        ipsum dolor sit amet consectetur adipisicing
                    </a>
                </main>

            </div>

            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-arrives-to-the-welcoming-ceremony-the-picture-id694155252?k=6&m=694155252&s=612x612&w=0&h=IIJPetzJL-hAgPkE4hm2wUKvO4YOav8jJp484CgLEUs=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    {{-- <a href="#"
                        class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a> --}}
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">20</span>
                        <span class="-mt-3">Jan</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Lorem
                        ipsum dolor sit amet consectetur, adipisicing elit. Aliquam?
                    </a>
                </main>

            </div>


        </div>
    </div>



</x-app-layout>
