<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fun Learning Digital') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    <link rel="icon" href="{{ asset('build/assets/images/logo.png') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/3eeab2f4f4.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .slides-container {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        .slides-container::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }


        /* CSS kustom untuk animasi */
        .partner-logo {
            animation: moveLeftRight 4s linear infinite;
        }

        @keyframes moveLeftRight {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(20px);
            }

            100% {
                transform: translateX(0);
            }
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            scroll-behavior: smooth;
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-black">
        @if(Auth::user() != null)
        @if(Auth::user()->role == "admin")
        @include('admin.navigation')
        @else
        @include('navigation')
        @endif
        @else
        @include('navigation')
        @endif



        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-blackshadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: 'monthly',

                plans: [{
                        name: 'Starter',
                        price: {
                            monthly: 29,
                            annually: 29 * 12 - 199,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Growth Plan',
                        price: {
                            monthly: 59,
                            annually: 59 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Business',
                        price: {
                            monthly: 139,
                            annually: 139 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                ],
            };
        };

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
            const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
            const videos = document.querySelectorAll('video');

            // Function to pause all videos
            const pauseVideos = () => {
                videos.forEach(video => {
                    video.pause();
                });
            };

            // Listen for modal hide events
            modalHideButtons.forEach(button => {
                button.addEventListener('click', () => {
                    pauseVideos();
                });
            });
        });

    </script>
    <script>
        const slidesContainer = document.querySelector(".slides-container");
        const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");

        nextButton.addEventListener("click", () => {
            slidesContainer.scrollLeft += slideWidth;
        });

        prevButton.addEventListener("click", () => {
            slidesContainer.scrollLeft -= slideWidth;
        });

    </script>
</body>

</html>
