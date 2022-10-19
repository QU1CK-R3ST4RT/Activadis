<div class="mr-10 ml-10 mb-5 cursor-pointer select-none" onclick="toggleMenu({{ $id }})">
    <div class="w-full rounded-2xl shadow-md flex border border-gray-300">
        <div style="background-color: {{ $color }};" class="rounded-l-2xl w-[20%] flex justify-center items-center float-left">
            <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" ><path d="M9 44q-1.2 0-2.1-.9Q6 42.2 6 41V10q0-1.2.9-2.1Q7.8 7 9 7h3.25V4h3.25v3h17V4h3.25v3H39q1.2 0 2.1.9.9.9.9 2.1v31q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h30V19.5H9V41Zm0-24.5h30V10H9Zm0 0V10v6.5ZM24 28q-.85 0-1.425-.575Q22 26.85 22 26q0-.85.575-1.425Q23.15 24 24 24q.85 0 1.425.575Q26 25.15 26 26q0 .85-.575 1.425Q24.85 28 24 28Zm-8 0q-.85 0-1.425-.575Q14 26.85 14 26q0-.85.575-1.425Q15.15 24 16 24q.85 0 1.425.575Q18 25.15 18 26q0 .85-.575 1.425Q16.85 28 16 28Zm16 0q-.85 0-1.425-.575Q30 26.85 30 26q0-.85.575-1.425Q31.15 24 32 24q.85 0 1.425.575Q34 25.15 34 26q0 .85-.575 1.425Q32.85 28 32 28Zm-8 8q-.85 0-1.425-.575Q22 34.85 22 34q0-.85.575-1.425Q23.15 32 24 32q.85 0 1.425.575Q26 33.15 26 34q0 .85-.575 1.425Q24.85 36 24 36Zm-8 0q-.85 0-1.425-.575Q14 34.85 14 34q0-.85.575-1.425Q15.15 32 16 32q.85 0 1.425.575Q18 33.15 18 34q0 .85-.575 1.425Q16.85 36 16 36Zm16 0q-.85 0-1.425-.575Q30 34.85 30 34q0-.85.575-1.425Q31.15 32 32 32q.85 0 1.425.575Q34 33.15 34 34q0 .85-.575 1.425Q32.85 36 32 36Z"/></svg>
            </div>
        </div>

        @if(\Illuminate\Support\Facades\Auth::user()->role_id < 2)
            <a href="/events/{{ $id }}/details">
                @endif
        <div class="flex flex-col py-3 px-5 w-[70%] float-left">
            <div class="text-gray-900 font-bold text-md md:text-lg">{{$title}}</div>
            <div class="text-gray-700 text-sm md:text-md"><span class="font-bold">{{$date}}</span> | {{$time}}</div>
        </div>

        <div class="float-right">
            <a href="#">
                <span class="h-full flex justify-end items-center py-3 px-5">
                    <img class="h-9" src="{{asset('images/options.svg')}}" alt="">
                </span>
            </a>
        </div>
        @if(\Illuminate\Support\Facades\Auth::user()->role_id < 2)
        </a>
        @endif
    </div>
    <ul class="z-10 shadow-lg border border-gray-500 mt-[-2rem] hidden mb-2 float-right menu" id="CardX{{ $id }}">
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
