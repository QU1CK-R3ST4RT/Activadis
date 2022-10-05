<div class="overflow-y-scroll h-[650px]">
    <div class="w-full">
        @foreach (\App\Models\Event::all() as $e)
            @component('components.single-activity')
                @slot('color')
                    {{ $e->color }}
                @endslot

                @slot('day')
                    MA
                @endslot

                @slot('title')
                    {{ $e->name }}
                @endslot

                @slot('date')
                    {{ $e->start_time }}
                @endslot

                @slot('time')
                    {{ $e->start_time }}
                @endslot

                @slot('id')
                    {{ $e->id}}
                @endslot
            @endcomponent
        @endforeach
    </div>
</div>
