<x-app-layout>
    <div class="bg-black overflow-x-hidden">
        <div
            class="fixed right-10 bottom-10 z-50 hover:scale-110 transition-transform duration-300 ease-in-out animate-bounce">
            <a href="https://api.whatsapp.com/send?phone=6285171670522" target="_blank" rel="noopener noreferrer"
                class=" text-white py-2 px-6 ">
                <img src="/build/assets/images/wa.svg" class="w-[40px] lg:w-[50px] xl:w-[56px]" alt="">
            </a>
        </div>


        @if (session()->has('success'))

        <div id="alert-3"
            class="flex p-4 mb-10  text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400"
            role="alert">
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
                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
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
        <!-- Section 1 -->

        {{-- <section class="min-h-screen bg-center bg-black bg-opacity-50  bg-cover "
            style="background-image: url('build/assets/images/back.gif');">
            <div class="px-4 mx-auto max-w-screen-xl  text-center py-44 lg:py-56 ">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl ">
                    Explore and Play with Fun Learning</h1>
                <p class="mb-8 text-lg font-normal  lg:text-xl sm:px-16 lg:px-48 text-white">We believe that by
                    creating this digital educational product, we can help children acquire general knowledge through
                    the most effective approach for children, which is playing games.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-pink-600 duration-500 hover:scale-100 hover:text-xl">
                        Get started
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Learn more
                    </a>
                </div>
            </div>
        </section> --}}
        <!-- End Section 1  -->



        <!-- Section 1 -->
        <div class="lg:flex bg-center lg:items-center min-h-screen mt-0 bg-cover"
            style="background-image: url('build/assets/images/back.gif');">
            <!-- Bagian Kiri: Formulir Email -->
            <div class="lg:w-2/3 p-6">
                <section class="mb-32 max-w-m lg:hidden mx-auto">

                </section>

            </div>


            <div class="lg:w-1/3">
                <div class="h-screen block mx-auto mt-0 lg:mt-6">
                    <div class="px-4 mx-auto max-w-screen-xl  py-44 lg:py-56  ">
                        <h1
                            class="mb-4 text-xl font-extrabold tracking-tight text-center lg:text-left leading-none text-white md:text-5xl lg:text-3xl ">
                            Explore and Play with Fun Learning</h1>
                        <p class="mb-8 text-sm font-normal  lg:text-base text-justify text-white lg:mr-20">We believe
                            that by
                            creating this digital educational product, we can help children acquire general knowledge
                            through
                            the most effective approach for children, which is playing games.</p>
                        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                            <a href="#product"
                                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-pink-600 duration-500 hover:scale-100 hover:text-xl">
                                Get started
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div id=" animation-carousel" class="relative w-full bg-cover mt-10 mb-20" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div id="product" class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="build/assets/images/animal.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="build/assets/images/food.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                    <img src="build/assets/images/super.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="build/assets/images/animal.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="build/assets/images/food.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                    <img src="build/assets/images/super.png"
                        class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>







        {{-- <div id="animation-carousel" style="background-image: url('build/assets/images/spiral.gif');"
            class="relative bg-cover w-full mt-20 " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-screen">


                @foreach($galerys as $galery)
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <div
                        class="max-w-xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <video controls class="rounded-t-lg w-full h-64"
                                src="{{ asset('storage/' . $galery['file'])}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy
                                    technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-pink-600 rounded-lg hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 ">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute -top-36 start-1/4 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute -top-36 end-1/4 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> --}}




        <div class="bg-cover mt-10 mb-20" style="background-image: url('build/assets/images/spiral.gif');">
            <div id="app" class="max-w-screen-xl mx-auto px-4 md:px-8  transition-all duration-500 ease-linear ">
                <div class="flex items-center relative ">
                    <div
                        class=" slides-container h-96 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-4 rounded scroll-smooth before:w-[80vw] before:shrink-0 after:w-[80vw] after:shrink-0 md:before:w-0 md:after:w-0">

                        @foreach($galerys as $galery)
                        {{-- CARD --}}
                        <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                            <div class="card p-4">
                                <video class="w-full h-64 object-cover object-center mb-4" controls>
                                    <source src="{{ asset('storage/' . $galery['file'])}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                                <h1 class="text-2xl font-bold mb-4 text-slate-200">{{$galery['nama']}}</h1>
                                <h3 class=" font-medium  text-slate-300"><img src="{{ asset('storage/' . $galery['logo'])}}" alt="" class="inline w-6 h-6 rounded-full mr-2">{{$galery['produksi']}}</h3>
                                <p class="text-slate-400 font-thin">{{$galery['tahun']}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- END CARD -->


                    </div>

                    <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                        <button role="button" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                            aria-label="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                        <button role="button" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                            aria-label="next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>







        <!-- End Section 2  -->

        <hr class="border-t-1 mb-2 shadow-lg shadow-slate-500  border-slate-800">


        {{-- Section 3 --}}

        <div id="aboutus" class="bg-black">

            <section id="features"
                class="relative block px-6 py-10 md:py-20 md:px-10  border-t border-b border-neutral-900 bg-neutral-900/30">


                <div data-aos="fade-down" class="relative mx-auto max-w-5xl text-center">
                    <span
                        class="text-gray-400 my-3 flex items-center justify-center font-medium uppercase tracking-wider">
                        About us
                    </span>
                    <h2
                        class="block w-full bg-gradient-to-b from-white to-gray-400 bg-clip-text font-bold text-transparent text-3xl sm:text-4xl">
                        When Fun Meets Digital Learning
                    </h2>
                    <p
                        class="mx-auto my-4 w-full max-w-xl lg:max-w-4xl xl:max-w-7xl bg-transparent text-center font-medium leading-relaxed tracking-wide text-gray-400">
                        FunLearning Digital (FLD) is a digital educational media product resulting from a collaboration
                        with Funlearning_id, which focuses on the application of an educational game in the form of
                        Gamification (2D Game) and AR/VR based on Android for children's education. This digital
                        educational media is played using educational tool props (APE) produced from handicrafts.
                    </p>
                </div>
                <div
                    class="relative mx-auto max-w-7xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine"
                        class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-color-swatch"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2"></path>
                                <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9"></path>
                                <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                                <line x1="17" y1="17" x2="17" y2="17.01"></line>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Low Price</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">FLD products offer
                            affordable and practical prices. The product bundle packages offered consist of conventional
                            games made from felt fabric and digital application products.
                        </p>
                    </div>


                    <div data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine"
                        class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Fast Performance</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">Smart features have
                            been implemented in every FLD product, starting from Augmented Reality, Flashcards, and
                            Gamification to support the development performance of children during their golden age.
                        </p>
                    </div>


                    <div data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine"
                        class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                                <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                                <polyline points="12 8 7 3 3 7 8 12"></polyline>
                                <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                                <polyline points="16 12 21 17 17 21 12 16"></polyline>
                                <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Fully Featured</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                            Every feature or application that is created has been aligned with guidelines and levels
                            that are synchronized with conventional Fun Learning games.
                        </p>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
                    style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
                </div>
                <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
                    style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
                </div>

            </section>
        </div>





        <!-- Section Netflix -->
        <div class="lg:flex">
            <!-- Bagian Kiri -->
            <div class="lg:w-1/2 p-6">
                <section class="mt-5 lg:mb-10 max-w-md mx-auto flex justify-center items-center">
                    <div class="lg:mt-36">
                        <h1 class="text-2xl text-center lg:text-left lg:text-6xl font-extrabold text-white">Have created
                            more than 20+ products
                        </h1>
                        <p class=" lg:text-xl text-center lg:text-left text-white mt-8 font-semibold">Make and create
                            your own educational
                            technology products with
                            us</p>
                    </div>
                </section>
            </div>
            <!-- Bagian Kanan -->
            <div class="lg:w-1/2">
                <div class=" block mx-auto mt-0 lg:mt-6">
                    <div
                        class="relative mt-6 lg:mt-36 mx-auto border-gray-700  bg-gray-700 border-[8px] rounded-t-xl h-[172px] max-w-[301px] md:h-[294px] md:max-w-[512px]">
                        <div class="rounded-lg overflow-hidden h-[156px] md:h-[278px] bg-gray-700">
                            <img src="/build/assets/images/gif1.gif"
                                class="dark:hidden h-[156px] md:h-[278px] w-full rounded-xl" alt="">
                            <img src="/build/assets/images/gif1.gif"
                                class="hidden dark:block h-[156px] md:h-[278px] w-full rounded-lg" alt="">
                        </div>
                    </div>
                    <div
                        class="relative mx-auto bg-gray-400  rounded-b-xl rounded-t-sm h-[17px] max-w-[351px] md:h-[21px] md:max-w-[597px]">
                        <div
                            class="absolute left-1/2 top-0 -translate-x-1/2 rounded-b-xl w-[56px] h-[5px] md:w-[96px] md:h-[8px] bg-gray-800">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- End Section Netflix --}}

        <hr class="border-t-1 mb-2 shadow-lg shadow-slate-500  border-slate-800">


        <!-- Section Netflix 2 -->
        <div class="lg:flex my-10">
            <div class="lg:w-1/2 hidden lg:block ">
                <div class=" block mx-auto mt-0 lg:mt-6">
                    <div
                        class="relative mx-auto border-slate-800  bg-slate-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                        <div
                            class="w-[148px] h-[18px] bg-slate-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute">
                        </div>
                        <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[124px] rounded-s-lg">
                        </div>
                        <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[178px] rounded-s-lg">
                        </div>
                        <div class="h-[64px] w-[3px] bg-slate-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white">
                            <video autoplay loop muted playsinline
                                class="dark:hidden w-[272px] h-[572px] bg-cover object-cover">
                                <source src="build/assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <video autoplay loop muted playsinline
                                class="hidden dark:block w-[272px] h-[572px] bg-cover object-cover">
                                <source src="build/assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bagian Kanan -->
            <div class="lg:w-1/2 p-6">

                <section class="mt-5 lg:mb-10 max-w-lg mx-auto flex justify-center items-center">
                    <div class="lg:mt-36">
                        <h1 class="text-2xl text-center lg:text-left lg:text-5xl font-extrabold text-white">Widely used
                            in 10+ schools throughout Indonesia
                        </h1>
                        <p class=" lg:text-xl text-center lg:text-left text-white mt-8 font-semibold">Provide a fun and
                            modern playing experience for children</p>
                    </div>
                </section>
            </div>

            <div class="lg:w-1/2 lg:hidden">
                <div class=" block mx-auto mt-0 lg:mt-6">
                    <div
                        class="relative mx-auto border-slate-800  bg-slate-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                        <div
                            class="w-[148px] h-[18px] bg-slate-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute">
                        </div>
                        <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[124px] rounded-s-lg">
                        </div>
                        <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[178px] rounded-s-lg">
                        </div>
                        <div class="h-[64px] w-[3px] bg-slate-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-black">
                            <video autoplay loop muted playsinline
                                class="dark:hidden w-[272px] h-[572px] bg-cover object-cover">
                                <source src="build/assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <video autoplay loop muted playsinline
                                class="hidden dark:block w-[272px] h-[572px] bg-cover object-cover">
                                <source src="build/assets/videos/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        {{-- End Section Netflix 2 --}}

        <hr class="border-t-1 mb-2 shadow-lg shadow-slate-500  border-slate-800">


        <section class="py-10  mb-8">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-slate-200 text-center mb-14">Partner Us</h2>
                <div class="flex flex-wrap justify-center items-center gap-4 lg:gap-8">
                    <a href="" class="w-24 h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 ">
                        <img src="build/assets/images/logo_fun.png" alt="Mitra 1"
                            class="partner-logo object-cover w-full h-full rounded-full">
                    </a>
                    <a href="" class="w-24 h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 ">
                        <img src="build/assets/images/logo_iota.png" alt="Mitra 2"
                            class="partner-logo object-cover w-full h-full rounded-full">
                    </a>
                    <a href="" class="w-24 h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 ">
                        <img src="build/assets/images/logo_musi.png" alt="Mitra 3"
                            class="partner-logo object-cover w-full h-full rounded-full">
                    </a>
                    <a href="" class="w-24 h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 ">
                        <img src="build/assets/images/logo_p3.png" alt="Mitra 3"
                            class="partner-logo object-cover w-full h-full rounded-full">
                    </a>
                    <a href="" class="w-24 h-24 md:w-32 md:h-32 lg:w-36 lg:h-36 ">
                        <img src="build/assets/images/logo_fx.png" alt="Mitra 3"
                            class="partner-logo object-cover w-full h-full rounded-full">
                    </a>
                </div>

            </div>
        </section>

        {{-- Maps --}}

        <!-- Section 4 -->
        <div class="lg:flex">
            <!-- Bagian Kiri: Formulir Email -->
            <div class="lg:w-1/2 p-6">
                <section class="mb-32 max-w-md mx-auto">
                    <div class="">
                        <h1 class="text-2xl font-bold text-center text-white">Contact Us</h1>
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <div class="mt-4">
                                <label for="name" class="text-sm text-stone-300 block mb-1 font-medium">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name"
                                    class="w-full bg-stone-900 text-white border border-stone-700 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <div class="mt-4">
                                <label for="email" class="text-sm text-stone-300 block mb-1 font-medium">Email
                                    Address</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="w-full bg-stone-900 text-white border border-stone-700 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500" />
                            </div>

                            <div class="mt-4">
                                <label for="message"
                                    class="text-sm text-stone-300 block mb-1 font-medium">Message</label>
                                <textarea name="message" id="message" placeholder="Message" rows="5"
                                    class="w-full bg-stone-900 text-white border border-stone-700 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>

                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 hover:text-slate-300 text-white w-full px-5 mt-5 py-2.5 rounded-lg">Send</button>
                        </form>
                    </div>
                </section>

            </div>

            <!-- Bagian Kanan: Peta -->
            <div class="lg:w-1/2">
                <!-- Gantilah dengan kode untuk menampilkan peta di sini -->
                <div class="h-screen block mx-auto mt-0 lg:mt-6">
                    <h1 class="text-2xl font-bold text-center text-white mx-auto mb-6">Our Location</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.356249268813!2d112.61553677486019!3d-7.962086779348646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78834d532cabe1%3A0x3a74c7e57f34599e!2sPUI%20PT%20DLI%20(Disruptive%20Learning%20Innovation)%20UM!5e0!3m2!1sid!2sid!4v1697689371340!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        class="mx-auto   max-w-lg" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>




        {{-- End Maps --}}

        <!-- Footer -->

        <footer class="bg-cover -mt-10  bg-left-top" style="background-image: url('build/assets/images/animate.gif');">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="" class="flex items-center">
                            <img src="build/assets/images/logo.png" class="h-8 mr-3" alt="Fun Learning Logo" />
                            <span class="self-center text-lg font-semibold whitespace-nowrap text-slate-200">Fun
                                Learning Digital</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-stone-200 uppercase ">Explore
                            </h2>
                            <ul class="text-stone-400  font-medium">
                                <li class="mb-4">
                                    <a href="#aboutus" class="hover:underline">About Us</a>
                                </li>
                                <li class="mb-4">
                                    <a href="#portofolio" class="hover:underline">Portofolio</a>
                                </li>
                                <li class="mb-4">
                                    <a href="#portofolio" class="hover:underline">Contact Us</a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{route('market.index')}}" class="hover:underline">Marketplace</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-stone-200 uppercase ">Follow us
                            </h2>
                            <ul class="text-stone-400  font-medium">
                                <li class="mb-4">
                                    <a href="https://www.instagram.com/funlearning.digital/" class="hover:underline "><i
                                            class="fa-brands fa-instagram"></i> funlearning.digital</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://www.facebook.com/profile.php?id=100078340431107"
                                        class="hover:underline"><i class="fa-brands fa-facebook"></i> Funlearning
                                        Digitall </a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://www.tiktok.com/@funlearning.digital" class="hover:underline"><i
                                            class="fa-brands fa-tiktok"></i> funlearning.digital</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://www.youtube.com/@funlearningdigital6748" class="hover:underline"><i
                                            class="fa-brands fa-youtube"></i> funlearningdigital6748
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-stone-200 uppercase ">Legal</h2>
                            <ul class="text-stone-400  font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 sm:mx-auto  lg:my-8 border-t-1 mb-2 shadow-lg shadow-slate-500  border-slate-800">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-stone-400 sm:text-center ">© 2023 <a href="" class="hover:underline">Fun
                            Learning Digital™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                        <a href="#" class="text-stone-400 hover:text-stone-200 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-stone-200 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 21 16">
                                <path
                                    d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-stone-200 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-stone-200 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-stone-200 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- End Footer  -->
    </div>


</x-app-layout>
