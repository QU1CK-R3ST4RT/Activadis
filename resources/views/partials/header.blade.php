<div class="w-screen bg-[#04173E] h-[70px] flex flex-row">
    <div class="w-[80%] max-w-[80%] h-auto">
        <div class="pl-6 sm:pl-10 md:pl-16 pt-8 md:pt-4">
            <div style=' background-image: url({{ asset("images/logo.svg") }}); background-size: cover;' class="h-[70px] w-[70px] md:h-[100px] md:w-[100px]"></div>
        </div>
    </div>
    <div class="w-[20%]">
        <div class="pt-[5px] md:pt-0 flex items-center h-full float-right">
            <div style='background-image: url({{ asset("images/def-profile.svg") }}); background-repeat: no-repeat; background-size: cover; float: right;' class="h-[33px] w-[33px] mr-[32px] cursor-pointer" onclick="toggleMenu('UserMenu')"></div>
        </div>
    </div>
</div>
<ul class="z-10 shadow-lg border border-gray-500 hidden float-right menu" id="UserMenu">
    <a href="#">
        <li class="px-3 py-2 shadow-md bg-white font-bold text-black hover:text-amber-500">Profiel</li>
    </a>

    <a href="/logout">
        <li class="px-3 py-2 shadow-md bg-white font-bold text-black hover:text-amber-500">Log uit</li>
    </a>
</ul>

