@if(\Illuminate\Support\Facades\Auth::user()->role_id >= 2)
<div class="w-2 h-2 bg-gray-300 font-bold text-lg mr-10 ml-10">
    <a href="/create" class="btn-custom">+</a>
</div>
@endif