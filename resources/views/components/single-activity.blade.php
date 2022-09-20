<div class="p-10 m-10">
    <div class="w-full rounded-2xl shadow-md flex border border-gray-300">

        <div class="rounded-l-2xl w-[20%] bg-amber-500 flex justify-center items-center float-left">
            <div class="">
                <h2 class="text-gray-900 text-xl md:text-2xl font-bold">{{$day}}</h2>
            </div>
        </div>

        <div class="flex flex-col p-5 w-[70%] float-left">
            <div class="text-gray-900 font-bold text-md md:text-lg">{{$title}}</div>
            <div class="text-gray-700 text-sm md:text-md"><span class="font-bold">{{$date}}</span> | {{$time}}</div>
        </div>

        <div class="float-right">
            <a href="#">// /activitys/{id}/edit
                <span class="h-full flex justify-end items-center p-5">
                    <img class="h-9" src="images/options.svg" alt="">
                </span>
            </a>
        </div>

    </div>
</div>
