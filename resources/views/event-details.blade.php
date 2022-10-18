@extends('layouts.layout')

@section('content')
<div class="outer-container mx-5">
    <div class="main-container">
        <div class="card-banner" style="background: {{ $event->color ?? "" }} !important;"></div>
        @if($event->image)
        <div class="w-full h-56" style="opacity:0.85; background-size:cover; background-image: url('{{$event->image}}');"></div>
        @endif
        <div class="table-list">
            <table>
                <tr>
                    <td>
                        <p><b>Maker: </b>{{$event->name ?? ""}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Locatie: </b>{{$event->location ?? ""}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Begin: </b>{{$event->start_time}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Eind: </b>{{$event->end_time}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mt-10"><b>Beschrijving</b></p>
                        <p class="mb-5">{{$event->description ?? ""}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Eten inclusief: </b>@php if ($event->food_included =1){echo "ja";} else {echo "nee";} @endphp</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="mb-2"><b>Prijs: </b>€{{$event->cost ?? ""}}</p>
                    </td>
                    <td>
                        @php
                            $count = 0;
                            foreach(\App\Models\Reservation::all()->where('event_id', $event->id) as $e) {
                                $count ++;
                            }
                        @endphp
                        <p><b>Reservaties: </b>{{ $count }}/{{ $event->max_people }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-lg">Deelnemers</p>
                        <p><b>Min: </b>{{ $event->min_people }}</p>
                        <p><b>Max: </b>{{ $event->max_people }}</p>
                    </td>
                    <td>
                        @if(\App\Models\Reservation::all()->where('event_id',$event->id)->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->first())
                            <a href="#" class="my-2">
                                <button type="" disabled class="btn-custom-disabled">Inschrijven</button>
                            </a>
                            <a href="/events/{{ $event->id }}/leave">
                                <button type="" class="btn-custom">Afmelden</button>
                            </a>
                        @else
                            <a href="/events/{{ $event->id }}/join">
                                <button type="" class="btn-custom">Inschrijven</button>
                            </a>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
