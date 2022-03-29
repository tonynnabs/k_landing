<li class="flex items-center justify-between p-2 rounded bg-slate-700 w-[200px]">
    <div class="flex items-center w-1/2">
        <img class="w-7 h-7 mr-2" src="{{$coin['logo']}}"
            alt="btc">
        <div>
            <h2 class="text-xs font-bold">{{$coin['symbol']}}</h2>
            <h3 class="text-sm font-light">{{$coin['name']}}</h3>
        </div>
    </div>

    @if ($coin['deleted_at'])
    <h2 class="ml-3 text-2xl font-bold w-1/2 flex justify-end text-slate-500">NILL<span class="text-sm text-gray-300">/$</span></h2>
    @else
    <h2 class="ml-3 text-2xl font-bold w-1/2 flex justify-end">{{$coin['buy_rate']}}<span class="text-sm text-gray-300">/$</span></h2>
    @endif
</li>
