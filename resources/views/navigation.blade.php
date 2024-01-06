<nav class="bg-black opa border-gray-200 px-2 sm:px-4   " >
    <div class="container flex  justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <img src="/build/assets/images/logo.png" class="mr-3 h-3 md:h-7" alt="idbookstore" />
            <p class="text-slate-200 font-semibold text-lg">Fun Learning Digital</p>
        </a>

        <div class="flex items-center md:order-2">
            @if(Auth::user() != null)
            <button type="button"
                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 "
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                @if(Auth::user()->photoprofile == null)
                <img class="w-8 h-8 rounded-full" src="build/assets/images/profildefault.jpg" alt="user photo">
                @else
                <img class="w-8 h-8 rounded-full" src="build/assets/images/profildefault.jpg" alt="user photo">
                @endif
            </button>

            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none bg-stone-900 rounded  shadow "
                id="user-dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-slate-200 ">{{ Auth::user()->name }}</span>
                    <span
                        class="block text-sm font-medium text-slate-500 truncate ">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                    <li>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    </li>
                    <li>
                       <x-dropdown-link >
                            {{ __('Koleksi Buku') }}
                        </x-dropdown-link>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <a href="{{route('login')}}"
                class="inline-flex mr-1 items-center px-4 py-2 bg-transparent border border-transparent rounded-md font-semibold text-sm hover:text-stone-400 text-white tracking-widest">Login</a>

            <a href="{{route('register')}}"
                class="inline-flex items-center px-4 py-2 bg-pink-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-pink-800 focus:bg-pink-900 active:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition ease-in-out duration-150">Register</a>

            @endif

            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul
                class="flex flex-col p-4 mt-4 bg-black rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-black ">
                <li>
                    @if (!Auth::user())
                    <a href="/"
                        class="block py-2 pr-4 pl-3 {{ Request::is('/') ? 'text-pink-500' : 'text-gray-400' }} rounded hover:text-pink-500 md:hover:bg-transparent active:text-pink-500 text-lg sm:text-md"
                        aria-current="page">Home</a>

                    @else
                    <a href="/"
                        class="block py-2 pr-4 pl-3 {{ Request::is('/') ? 'text-pink-500' : 'text-gray-400' }} rounded hover:text-pink-500 md:hover:bg-transparent active:text-pink-500 text-lg sm:text-md"
                        aria-current="page">Home</a>
                    @endif


                </li>
                <li>
                    <a href="/market"
                        class="block py-2 pr-4 pl-3 {{ Request::is('market') ? 'text-pink-500' : 'text-gray-400' }} rounded hover:text-pink-500 md:hover:bg-transparent active:text-pink-500 text-lg sm:text-md">Market</a>
                </li>
                <li>
                    <a href="/artikel"
                        class="block py-2 pr-4 pl-3 {{ Request::is('artikel') ? 'text-pink-500' : 'text-gray-400' }} rounded hover:text-pink-500 md:hover:bg-transparent active:text-pink-500 text-lg sm:text-md">Blog</a>
                </li>
                <li>
                    <div class="flex md:order-2">
                        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                            aria-expanded="false"
                            class="md:hidden text-gray-500  hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 mr-1">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                        <form class="relative hidden md:block" action="/market" method="get">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Search icon</span>
                            </div>
                            <input type="text" id="search-navbar"
                                class="block w-full p-2 pl-10 text-sm text-stone-400 border border-stone-600 rounded-lg bg-stone-900 focus:ring-tone-500 focus:border-stone-500 "
                                placeholder="Search..." name="search" value="" required>
                        </form>
                    </div>
                </li>
                <li class="my-auto">
                    <a href="/keranjang" class="block py-2 pr-4 pl-3 {{ Request::is('keranjang') ? 'text-pink-500' : 'text-gray-400' }} rounded hover:text-pink-500 md:hover:bg-transparent active:text-pink-500 text-lg sm:text-md"
                        >
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
                <li>
                    
                </li>
            </ul>

        </div>

    </div>
</nav>
{{-- 
<div class="bg-gray-200" x-data="{ showBar: false }">
  
  <nav
       class="w-full py-4 text-center fixed text-xs font-semibold"
       :class="{ 'bg-white shadow transition duration-100' : showBar }"
       @scroll.window="showBar = (window.pageYOffset > 20) ? true : false"
       >
    MENU
  </nav>
  
  <div class="pt-20 w-full px-8 lg:w-1/2 mx-auto">
    <span class="inline-flex px-2 py-0 rounded mb-8 text-xs uppercase bg-indigo-200 text-indigo-600 font-semibold">Scroll down</span>
    
    <p class="mb-8 text-sm text-gray-600">
      Made with TailwindCSS & Alpine.js.
    </p>
    
    <p>
      The wheel is come full circle.  Harp not on that.  I will no longer endure it, though yet I know no wise remedy how to avoid it.  A fool, a fool! I met a fool i' th' forest, A motley fool.  Invest me in my motley; give me leave To speak my mind, and I will through and through Cleanse the foul body of th' infected world, If they will patiently receive my medicine. Then a soldier, Full of strange oaths, and bearded like the pard, Jealous in honour, sudden and quick in quarrel, Seeking the bubble reputation Even in the cannon's mouth. 
    <br><br>
    Young man, have you challeng'd Charles the wrestler? If he fail of that, He will have other means to cut you off; I overheard him and his practices.   Speak you so gently? Pardon me, I pray you; I thought that all things had been savage here, And therefore put I on the countenance Of stern commandment.  Last scene of all, That ends this strange eventful history, Is second childishness and mere oblivion; Sans teeth, sans eyes, sans taste, sans every thing. Now in respect it is in the fields, it pleaseth me well; but in respect it is not in the court, it is tedious. 
    <br><br>
    Uneasy lies the head that wears a crown.  By the pricking of my thumbs, At one fell swoop  For my part, he keeps me rustically at home, or, to speak more properly, stays me here at home unkept; for call you that keeping for a gentleman of my birth that differs not from the stalling of an ox? His horses are bred better; for, besides that they are fair with their feeding, they are taught their manage, and to that end riders dearly hir'd; but I, his brother, gain nothing under him but growth; for the which his animals on his dunghills are as much bound to him as I.  To-day my Lord of Amiens and myself Did steal behind him as he lay along Under an oak whose antique root peeps out Upon the brook that brawls along this wood!  To the which place a poor sequest'red stag, That from the hunter's aim had ta'en a hurt, Did come to languish; and, indeed, my lord, The wretched animal heav'd forth such groans That their discharge did stretch his leathern coat Almost to bursting; and the big round tears Cours'd one another down his innocent nose In piteous chase; and thus the hairy fool, Much marked of the melancholy Jaques, Stood on th' extremest verge of the swift brook, Augmenting it with tears. If he fail of that, He will have other means to cut you off; I overheard him and his practices.    A fool, a fool! I met a fool i' th' forest, A motley fool.  But whate'er you are That in this desert inaccessible, Under the shade of melancholy boughs, Lose and neglect the creeping hours of time; If ever you have look'd on better days, If ever been where bells have knoll'd to church, If ever sat at any good man's feast, If ever from your eyelids wip'd a tear, And know what 'tis to pity and be pitied, Let gentleness my strong enforcement be; In the which hope I blush, and hide my sword. At first the infant, Mewling and puking in the nurse's arms; Then the whining school-boy, with his satchel And shining morning face, creeping like snail Unwillingly to school. 
    <br><br>
    Neither a borrower or a lender be.  That's meat and drink to me, now.  This ring was mine, I gave it his first wife. Come, sing; and you that will not, hold your tongues. Last scene of all, That ends this strange eventful history, Is second childishness and mere oblivion; Sans teeth, sans eyes, sans taste, sans every thing.
    <br><br>
    The game is up.  He has eaten me out of house and home.  This woman's an easy glove, my lord; she goes of and on at pleasure. Let me love him for that; and do you love him because I do. Look, here comes the Duke. No, Corin, being old, thou canst not guess, Though in thy youth thou wast as true a lover As ever sigh'd upon a midnight pillow.   Last scene of all, That ends this strange eventful history, Is second childishness and mere oblivion; Sans teeth, sans eyes, sans taste, sans every thing. But look to it: Find out thy brother wheresoe'er he is; Seek him with candle; bring him dead or living Within this twelvemonth, or turn thou no more To seek a living in our territory.   Peace, you dull fool! I found them on a tree. I'll graff it with you, and then I shall graff it with a medlar. Then it will be the earliest fruit i' th' country; for you'll be rotten ere you be half ripe, and that's the right virtue of the medlar.
    </p>
  </div>
</div> --}}
