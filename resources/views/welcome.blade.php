<x-layout>


    <h1 class="text-8xl font-bold text-center mb-4">Alta Valle Events</h2>
        <h2 class="text-2xl font-bold text-center mb-4">Featured Events</h2>

        <div class="flex flex-row space-x-4 mx-40">
            @foreach ($events as $event)
                @if ($event->is_featured === 1)
                    <x-card :event="$event" />
                @endif
            @endforeach
        </div>
        <x-carousel />

        <h2 class="text-2xl font-bold text-center mb-4">Events</h2>
        <div class="mx-40">

            @foreach ($events as $event)
                <x-card-wide :event="$event" />
            @endforeach

        </div>
</x-layout>
