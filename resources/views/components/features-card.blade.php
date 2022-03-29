@props(['color'])
<div class="flex flex-col items-start">
    <div class="{{$color}} mb-8 rounded-lg p-3">
        {{$icon}}
    </div>
    <h2 class="font-bold text-black text-xl">{{$title}}</h2>
    <p class="text-gray-500 mt-2">{{$description}}</p>
</div>
