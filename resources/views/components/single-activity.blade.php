<div class="mt-10 ml-5">
    <div class="w-full rounded-2xl shadow-md flex border border-gray-300">

        <div style="background-color: {{ $color }};" class="rounded-l-2xl w-[20%] flex justify-center items-center float-left">
            <div class="">
                <h2 class="text-gray-900 text-xl md:text-2xl font-bold">{{$day}}</h2>
            </div>
        </div>

        <div class="flex flex-col py-3 px-5 w-[70%] float-left">
            <div class="text-gray-900 font-bold text-md md:text-lg">{{$title}}</div>
            <div class="text-gray-700 text-sm md:text-md"><span class="font-bold">{{$date}}</span> | {{$time}}</div>
        </div>

        <div class="float-right" onmouseover="showMenu({{ $id }})">
            <a href="#">
                <span class="h-full flex justify-end items-center py-3 px-5">
                    <img class="h-9" src="{{asset('images/options.svg')}}" alt="">
                </span>
            </a>
        </div>
    </div>
    <ul class="z-10 shadow-lg border border-gray-500 mt-[-2rem] hidden mb-2 float-right menu" id="CardX{{ $id }}" onmouseleave="hideMenu({{ $id }})">
        @if(\Illuminate\Support\Facades\Auth::user()->role_id >= 2)
            <a href="/events/{{ $id }}/edit">
                <li class="px-3 py-2 shadow-md bg-white font-bold text-black hover:text-amber-500">Bewerk</li>
            </a>

            <a href="/events/{{ $id }}/delete">
                <li class="px-3 py-2 shadow-md bg-white font-bold text-black hover:text-amber-500">Verwijder</li>
            </a>
        @endif
        <a href="/events/{{ $id }}/details">
            <li class="px-3 py-2 shadow-md bg-white font-bold text-black hover:text-amber-500">Details</li>
        </a>
    </ul>
</div>
