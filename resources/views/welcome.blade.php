<x-guest>
    <section class="relative overflow-y-hidden overflow-x-hidden">
        <div
            class="origin-top-left overflow-y-hidden absolute top-0 left-0 canvas-container skew-y-[-5deg] skew-x-0 lg:skew-x-[-45deg] w-full lg:w-4/5 h-64 lg:h-96  ">
            <canvas id="gradient-canvas">
            </canvas>
        </div>
        {{-- <div class="w-full h-64 lg:h-96 absolute ">
            <canvas id="gradient-canvas">
            </canvas>
        </div> --}}
        <div class="max-w-7xl px-8 mx-auto relative">
            <header style="height: 10vh;" class="bg-transparent lg:px-0 py-4 flex items-center justify-between">
                <a href="/"><img class="w-32" src="/img/logo.svg" alt="KOLLECT"></a>
                <nav class="hidden lg:block">
                    <ul class="flex items-center space-x-8 text-white">
                        <x-menu-item href="/">Home</x-menu-item>
                        <x-menu-item href="#how_it_works">How it works</x-menu-item>
                        <x-menu-item href="#support">Support</x-menu-item>
                    </ul>
                </nav>
                <div class=" items-center hidden lg:flex">
                    <a href="https://www.instagram.com/we_kollect/" target="_blank" class="cursor-pointer">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </a>
                </div>
                <x-mobile-nav />
            </header>
        </div>
        <div class="max-w-7xl px-8 mx-auto relative">
            <div class="flex flex-col lg:flex-row items-start mt-24 pb-64 lg:pb-56 w-full">
                <div class="w-full lg:w-1/2">
                    <h1 class="text-6xl lg:text-8xl mix-blend-overlay font-bold tracking-tighter mix-blend-differences">
                        Buy and sell your Crypto Currencies</h1>
                    <p class="text-lg mt-5 text-gray-500">Your 24/7 Crypto p2p trading service. Hassle free Crypto p2p experience is our aim. Don&#8242;t settle for less, trade with Kollect. </p>
                    <div class="mt-4 flex items-center">
                        <x-download-button />

                        {{-- <a href="https://wa.link/2v2a6a">
                            <button class="bg-transparent text-black font-bold rounded-lg py-3 px-5">Make Inquiry
                                <i class="fa-solid fa-chevron-right ml-2"></i>
                            </button>
                        </a> --}}
                    </div>
                </div>
                <div class="w-full lg:w-1/2 ml-0 mt-8 lg:mt-0 lg:ml-12 relative">
                    <div class=" ml-24 rounded-xl desktop-screen right-0 p-2 absolute w-xfull left-10">
                        <img class="rounded-lg" src="/img/desktop-screen.svg" alt="Desktop Screen">
                    </div>
                    <div class="p-3 absolute top-5 overflow-hidden rounded-3xl phone-figure"
                        style="width:264px; height:533px;">
                        <div class="bg-white flex items-center justify-center overflow-hidden rounded-2xl">
                            <img style="height:510px;" src="/img/phone-screen.svg" alt="Screenshot x7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="how_it_works" class=" bg-blue-50">
        <div class="p-8 max-w-7xl mx-auto py-24  text-white ">
            <div class="flex items-center mb-8">
                <h1 class="flex-none font-bold text-4xl lg:text-5xl text-black ">How it works</h1>
                <div class="border-t border-gray-300 w-full ml-8"></div>
            </div>
            <div
                class="flex items-center flex-col lg:flex-row space-x-0 space-y-8 lg:space-y-0 lg:space-x-8 justify-between">
                <x-features-card color="text-blue-500 bg-blue-100">
                    <x-slot name="icon">
                        <i class="fa-solid fa-coins text-3xl"></i>
                    </x-slot>
                    <x-slot name="title">
                        Initiate Transaction
                    </x-slot>
                    <x-slot name="description">
                        Choose the cryptocoin you would like to sell/buy, put in the amount you would like to trade and
                        see
                        conversions in realtime.
                    </x-slot>
                </x-features-card>
                <x-features-card color="text-red-500 bg-red-100">
                    <x-slot name="icon">
                        <i class="fa-solid fa-building-columns text-3xl"></i>
                    </x-slot>
                    <x-slot name="title">
                        Account Information
                    </x-slot>
                    <x-slot name="description">
                        Fill out the Bank account information where you would like to receive the NGN equivalent of the
                        amount of coin traded.
                    </x-slot>

                </x-features-card>
                <x-features-card color="text-purple-500 bg-purple-100">
                    <x-slot name="icon">
                        <i class="fa-solid fa-hand-holding-dollar text-3xl"></i>
                    </x-slot>
                    <x-slot name="title">
                        Payment Confirmation
                    </x-slot>
                    <x-slot name="description">
                        Bitcoin transactions are automatically confirmed with the blockchain network, Altcoins are
                        confirmed
                        manually after you upload proof of deposit.
                    </x-slot>
                </x-features-card>
            </div>
        </div>
    </section>
    <section class="flex max-w-7xl flex-col-reverse lg:flex-row mx-auto p-8 items-center ">
        <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
            <div class="p-3 mx-auto overflow-hidden rounded-3xl phone-figure" style="width:264px; height:533px;">
                <div class="bg-white flex items-center justify-center overflow-hidden rounded-2xl">
                    <img style="height:510px;" src="/img/auto-confirmation.svg" alt="Screenshot x7">
                </div>
            </div>
        </div>
        <div class="w-full  lg:w-1/2 flex flex-col space-y-5">
            <h2 class="uppercase text-sm font-bold tracking-widest text-secondary">Confirmation</h2>
            <h1 class="text-4xl lg:text-5xl font-bold text-black">Bitcoin Automatic Confirmation</h1>
            <p>A Bitcoin transaction must be confirmed on a blockchain to verify that the transaction is legitimate. A
                confirmed transaction means that the transaction has been included in a block, and therefore included in
                the blockchain. That means the transaction has now been officially recorded and verified. This is all
                monitored by the Kollect system and updated automatically</p>

        </div>
    </section>
    <section class=" bg-blue-50 ">
        <div class="flex flex-col lg:flex-row max-w-7xl mx-auto p-8 items-center">
            <div class="w-full lg:w-1/2 flex flex-col space-y-5">
                <h2 class="uppercase text-sm font-bold tracking-widest text-secondary">KOLLECT Game</h2>
                <h1 class="text-4xl lg:text-5xl font-bold text-black">Spin and Win Prizes on Kollect Lucky Wheel</h1>
                <p>Spin the Lucky wheel and win different coin prizes. All winnings will be deposited into wallet
                    address of
                    your choosen within 3 business days. You are limited to a certain amount of spin in a day and can
                    request to get more spins. </p>

            </div>
            <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
                <div class="p-3 mx-auto overflow-hidden rounded-3xl phone-figure" style="width:264px; height:533px;">
                    <div class="bg-white flex items-center justify-center overflow-hidden rounded-2xl">
                        <img style="height:510px;" src="/img/game-screen.svg" alt="Game Screenshot">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="support"
        class="flex flex-col lg:flex-row  max-w-3xl mx-auto p-8 items-start  lg:items-center justify-center my-8">
        <div>
            <h1 class="font-bold text-3xl">Speak with our support team</h1>
            <p class="text-gray-500 mt-2">You can also visit our office at - <span class="font-bold">15chizet plaza,
                    plot 235 ikenegbu layout, owerri, IMO state.</span></p>

        </div>
        <a href="https://wa.link/2v2a6a" class="flex-none">
            <button class="ml-0 mt-5 lg:mt-0 lg:ml-5  bg-secondary px-8 py-4 text-white rounded-md">
                <i class="fa-solid fa-phone-flip mr-2"></i>
                Call Support</button>
        </a>

    </section>
    <footer class="flex flex-col items-center justify-center text-gray-400">
        <ul class="flex mb-3">
            <li class="text-sm pr-3 text-blue-600 cursor-pointer"><a href="/privacy-policy/">Privacy Policy</a></li>
            <li class="text-sm text-blue-600 cursor-pointer">Terms of Service</li>
        </ul>
        © 2022 Kollect Global Tech.
    </footer>
    <section class="fixed bg-slate-900 text-white w-full flex items-center bottom-0 left-0 right-0 p-3 ticker">
        <x-ticker :coins="$coins" />
    </section>
</x-guest>
