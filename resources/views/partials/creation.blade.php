@if(\Illuminate\Support\Facades\Auth::user()->role_id >= 2)
<div class="pagination-box mr-10 ml-10">
    <a href="/create" class="btn-custom">Event maken</a>
</div>
@endif