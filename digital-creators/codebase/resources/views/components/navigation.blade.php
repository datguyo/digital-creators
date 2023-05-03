<div class="p-8 bg-[#115e59] bg-opacity-100 sm:relative">
    <div class="max-w-[80rem] mt-0 mr-auto mb-0 ml-auto pt-0 pr-8 pb-0 pl-8 md:pr-6 md:pl-6 xl:pr-10 xl:pl-10 flex items-center sm:justify-between">
        <a class="mt-0 mr-12 mb-0 ml-0" href="/">
            <span class="font-poppins font-semibold text-2xl text-white text-opacity-100 mt-0 mr-0 mb-0 ml-0 sm:text-xl">Digital creators</span>
        </a>

        <a class="no-underline font-poppins font-normal text-[#ccfbf1] text-opacity-75 hover:text-white hover:text-opacity-100 sm:hidden" href="/">All creators</a>

        @guest
            <div class="mt-0 mr-0 mb-0 ml-auto flex space-x-6 sm:hidden">
                <a class="tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 rounded-md flex items-center space-x-1.5 text-base font-poppins mb-0 ml-auto mr-0 mt-0 focus:outline-none bg-transparent text-[#5eead4] border border-solid divide-none border-[#0f766e] border-opacity-100 hover:border-[#0d9488] hover:border-opacity-100 md:hover:bg-transparent md:hover:bg-opacity-100 md:hover:text-white md:hover:text-opacity-100 md:hover:border-[#14b8a6] md:hover:border-opacity-100 hover:bg-transparent hover:text-white" href="{{ route('login') }}">
                    <span class="text-base">Log in</span>
                </a>

                <a class="tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 rounded-md flex items-center space-x-1.5 bg-[#5eead4] bg-opacity-100 text-[#134e4a] text-opacity-100 text-base font-poppins hover:text-[#134e4a] hover:text-opacity-100 hover:bg-[#99f6e4] hover:bg-opacity-100 mb-0 ml-auto mr-0 mt-0 focus:outline-none" href="{{ route('signup') }}">
                    <span>Sign up</span>
                </a>
            </div>
        @endguest

        @auth
            <div class="flex mb-0 ml-auto mr-0 mt-0 sm:hidden space-x-6 relative">
                <a class="flex items-center space-x-2 text-[#ccfbf1] text-opacity-75 hover:text-white hover:text-opacity-100 cursor-pointer" @click="toggleUserDropdown">
                    <img class="max-w-full rounded-full w-[44px] h-[44px] mt-0 mr-2 mb-0 ml-0" src="{{ $user->photo ? asset('storage/Images/' . auth()->user()->photo) : asset('storage/Images/avatar.png') }}" />
                    <span class="font-normal font-poppins no-underline sm:hidden text-opacity-100 hover:text-opacity-100">{{ auth()->user()->name }}</span>

                    <i class="inline-block h-auto w-[16px] text-opacity-100">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M3.515 8.465L12 16.95l8.485-8.485L19.07 7.05 12 14.122 4.929 7.05 3.515 8.465z" fill="#2E3A59"></path>
                        </svg>
                    </i>
                </a>

                <div v-if="userDropdown"
                     class="bg-white bg-opacity-100 absolute right-0 mt-10 mr-0 mb-0 ml-0 rounded-lg border border-solid border-[#134e4a] pt-2.5 pr-0 pb-2.5 pl-0 flex flex-col shadow-xl border-opacity-10"
                     id="user-dropdown"
                >
                    <a class="bg-white text-sm tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 disabled:bg-[#e4e4e7] disabled:text-[#a1a1aa] text-[#134e4a] text-opacity-100 font-poppins border-solid border-[#134e4a] border-opacity-20 shadow-none border-0 rounded-none hover:bg-[#ccfbf1] hover:bg-opacity-50 flex items-start focus:outline-none" href="{{ route('users.edit') }}">
                        <span>Edit profile</span>
                    </a>

                    <a class="bg-white text-sm tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 disabled:bg-[#e4e4e7] disabled:text-[#a1a1aa] text-[#134e4a] text-opacity-100 font-poppins border-solid border-[#134e4a] border-opacity-20 shadow-none border-0 rounded-none hover:bg-[#ccfbf1] hover:bg-opacity-50 flex items-start focus:outline-none" href="{{ route('work.index') }}">
                        <span>My projects</span>
                    </a>

                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="bg-white text-sm tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 w-full disabled:bg-[#e4e4e7] disabled:text-[#a1a1aa] text-[#134e4a] text-opacity-100 font-poppins border-solid border-[#134e4a] border-opacity-20 shadow-none border-0 rounded-none hover:bg-[#ccfbf1] hover:bg-opacity-50 flex items-start focus:outline-none">
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        @endauth

        <div class="hidden sm:block">
            <a class="flex p-2.5" @click="showMobileMenu">
                <i class="inline-block w-6 h-auto text-white text-opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </i>
            </a>
        </div>
    </div>

    <div v-if="mobileMenu"
         class="sm:fixed sm:top-0 sm:right-0 sm:bottom-0 sm:left-0 sm:bg-[#115e59] sm:bg-opacity-100 sm:z-30 fixed top-0 right-0 bottom-0 left-0 z-30 bg-[#115e59] bg-opacity-100 flex flex-col sm:p-8 md:p-8 p-8"
         id="mobile-menu"
         data-collection-id="1"
         data-record-id="6"
         data-collection-type="local"
    >
        <div class="max-w-[80rem] mt-0 mr-auto mb-0 ml-auto pt-0 pr-8 pb-0 pl-8 md:pr-6 md:pl-6 xl:pr-10 xl:pl-10 flex items-center sm:mb-8 justify-between w-[100%] sm:pt-0 sm:pr-6 sm:pl-6 md:pt-0 md:pb-0 sm:justify-between">
            <a class="mt-0 mr-12 mb-0 ml-0" href="/">
                <span class="font-poppins font-semibold text-2xl text-white text-opacity-100 mt-0 mr-0 mb-0 ml-0 sm:text-xl">Digital creators</span>
            </a>

            <div class="sm:block block">
                <a class="flex p-2.5" @click="hideMobileMenu">
                    <i class="inline-block w-6 h-auto text-white text-opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </i>
                </a>
            </div>

        </div>
        <div class="max-w-[80rem] mr-auto mb-0 ml-auto pt-0 pr-8 pb-0 pl-8 md:pr-6 md:pl-6 xl:pr-10 xl:pl-10 mt-20 w-[100%]">
            @guest
                <div class="flex sm:space-x-0 sm:flex sm:items-center sm:flex-col sm:space-y-5 sm:mt-8 flex-col items-center space-x-0 space-y-11 mt-0 mr-0 mb-0 ml-0">
                    <a class="no-underline font-poppins font-normal text-[#ccfbf1] text-opacity-75 hover:text-white hover:text-opacity-100 sm:block sm:text-center sm:text-white sm:text-opacity-100" href="/">All creators</a>
                    <a class="tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 rounded-md flex items-center space-x-1.5 text-base font-poppins mb-0 ml-auto mr-0 mt-0 focus:outline-none bg-transparent text-[#5eead4] border border-solid divide-none border-[#0f766e] border-opacity-100 hover:border-[#0d9488] hover:border-opacity-100 md:hover:bg-transparent md:hover:bg-opacity-100 md:hover:text-white md:hover:text-opacity-100 md:hover:border-[#14b8a6] md:hover:border-opacity-100 hover:bg-transparent hover:text-white" href="{{ route('login') }}">
                        <span class="text-base">Log in</span>
                    </a>
                    <a class="tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 rounded-md flex items-center space-x-1.5 bg-[#5eead4] bg-opacity-100 text-[#134e4a] text-opacity-100 text-base font-poppins hover:text-[#134e4a] hover:text-opacity-100 hover:bg-[#99f6e4] hover:bg-opacity-100 mb-0 ml-auto mr-0 mt-0 focus:outline-none" href="{{ route('signup') }}">
                        <span> Sign up</span>
                    </a>
                </div>
            @endguest

            @auth
                <div class="flex flex-col items-center mb-0 ml-0 mr-0 mt-0 sm:flex sm:flex-col sm:items-center sm:mt-8 sm:space-x-0 sm:space-y-5 space-x-0 space-y-11">
                    <a class="font-normal font-poppins hover:text-opacity-100 hover:text-white no-underline sm:block sm:text-center sm:text-opacity-100 sm:text-white text-[#ccfbf1] text-opacity-75" href="/" current=""> All creators</a>
                    <a class="font-normal font-poppins hover:text-opacity-100 hover:text-white no-underline sm:block sm:text-center sm:text-opacity-100 sm:text-white text-[#ccfbf1] text-opacity-75" href="{{ route('users.edit') }}"> Edit profile</a>
                    <a class="font-normal font-poppins hover:text-opacity-100 hover:text-white no-underline sm:block sm:text-center sm:text-opacity-100 sm:text-white text-[#ccfbf1] text-opacity-75" href="{{ route('work.create') }}"> Add project</a>
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="font-normal font-poppins hover:text-opacity-100 hover:text-white no-underline sm:block sm:text-center sm:text-opacity-100 sm:text-white text-[#ccfbf1] text-opacity-75">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</div>
