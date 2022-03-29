<ul class="flex space-x-3 items-center ticker__list ml-3">
    @foreach ($coins as $coin)
        <x-rate-item :coin="$coin" />
    @endforeach

    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let ticker = document.querySelector('.ticker')
                let list = document.querySelector('.ticker__list')
                let clone = list.cloneNode(true)

                ticker.append(clone)
            }, false);
        </script>
    @endsection
</ul>
