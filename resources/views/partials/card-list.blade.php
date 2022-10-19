@php
    use \App\Models\Event as Event
@endphp

<div class="h-[600px] mb-10 mt-10 shadow-transparent overflow-hidden">
    <div class="w-full">
        @foreach (Event::all() as $e)
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
