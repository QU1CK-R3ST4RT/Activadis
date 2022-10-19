<div class="pagination-box mr-10 ml-10">
     @php
        use App\Models\Event;
        echo Event::paginate($perPage = 5, $columns = ['*'], $pageName = 'page');
    @endphp
</div>