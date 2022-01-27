<x-guest>
    <div class="w-screen h-screen text-white" style="background-color:#000039;">
        <header style="height: 10vh;" class="px-5 lg:px-0 max-w-6xl mx-auto flex items-center justify-between">
            <a href="/"><img class="w-32" src="/img/logo.png" alt="KOLLECT"></a>

            <a href="https://www.instagram.com/we_kollect/" class="cursor-pointer">
                <img class="w-10" src="/img/instagram.png" alt="Instagram">
            </a>
        </header>
        <div style="height: 90vh;"
            class="max-w-xl lg:px-0 px-6 text-center w-full mx-auto  flex flex-col items-center justify-center">
            <h1 class="text-3xl lg:text-5xl leading-tight">Buy & Sell Cryptocurrency coins at a good rate.</h1>
            <p class="lg:text-lg text-sm leading-normal mt-3">On Kollect, you can sell or buy any cryptocurrency coin at
                a good rate
                and get paid instantly. Our web app is currently under construction, you can get in touch with us on
                Whatsapp or Instagram.</p>
            <a href="tel:07049149371"
                class="bg-secondary px-6 hover:bg-black cursor-pointer py-5 mt-5 rounded text-white text-xl font-bold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>Get in touch
            </a>
        </div>

        <section class="fixed bg-slate-900 w-full flex items-center bottom-0 left-0 right-0 p-3 ticker">
            <ul class="flex space-x-3 items-center ticker__list ml-3">
                @foreach ($coins as $coin)
                <li class="flex items-center justify-between p-2 rounded bg-slate-700 w-[200px]">
                    <div class="flex items-center w-1/2">
                        <img class="w-7 h-7 mr-2" src="{{$coin['logo']}}"
                            alt="btc">
                        <div>
                            <h2 class="text-sm">{{$coin['symbol']}}</h2>
                            <h3 class="text-base font-light">{{$coin['name']}}</h3>
                        </div>
                    </div>

                    @if ($coin['deleted_at'])
                    <h2 class="ml-3 text-3xl w-1/2 flex justify-end text-slate-500">NILL<span class="text-sm text-gray-300">/$</span></h2>
                    @else
                    <h2 class="ml-3 text-3xl w-1/2 flex justify-end">{{$coin['buy_rate']}}<span class="text-sm text-gray-300">/$</span></h2>
                    @endif
                </li>
                @endforeach

            </ul>
        </section>

        @section('scripts')
        <script>
            let ticker = document.querySelector('.ticker')
            let list = document.querySelector('.ticker__list')
            let clone = list.cloneNode(true)

            ticker.append(clone)
        </script>
        @endsection
    </div>
</x-guest>
