<div class="pagination-box mr-10 ml-10">
     @php
        use App\Models\Event;
    @endphp

    {{        Event::paginate($perPage = 5, $columns = ['*'], $pageName = 'page')->links("pagination::simple-tailwind")
}}
</div>