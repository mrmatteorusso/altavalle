<x-layout>
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
        <div class="max-w-[50%] mx-auto flex justify-between my-8">
            <x-button-filter>Valdisotto</x-button-filter>
            <x-button-filter>Valdidentro</x-button-filter>
            <x-button-filter>Valfurva</x-button-filter>
            <x-button-filter>Bormio</x-button-filter>
            <x-button-filter>Livigno</x-button-filter>
            <x-button-filter>Sondalo</x-button-filter>
        </div>

        @foreach ($events as $event)
            <x-card-wide :event="$event" />
        @endforeach

    </div>
</x-layout>
