<ul class="flex space-x-3 items-center ticker__list ml-3">
    @foreach ($coins as $coin)
        <x-rate-item :coin="$coin" />
    @endforeach


</ul>
