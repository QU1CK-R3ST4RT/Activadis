@extends('layouts.layout')



@section('content')
    <div class="grid grid-cols-2 mt-10">
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
                            {{ $e->start_time}}
                        @endslot

                        @slot('time')
                            {{ $e->start_time }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endsection