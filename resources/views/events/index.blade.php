<body>
    <h1>Overzicht van alle evenementen</h1>
    <p>Bekijk hier een overzicht van alle evenementen.</p>
    <br>

    @foreach($events as $event)
        <kbd><a href="/events/{!! $event->id !!}">{!! $event['id'] !!}</a> | Word in <a href="/events/locatie/{!! $event->location !!}">{!! $event['location'] !!}</a> gehouden.</kbd> <br>
    @endforeach
</body>