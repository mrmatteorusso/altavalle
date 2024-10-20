<x-layout>
    <div class="flex flex-col">
        <h2 class="text-2xl font-bold text-center mb-4">Featured Events</h2>


        <div class="flex flex-row space-x-4 mx-40">
            @foreach ($events as $event)
                @if ($event->is_featured === 1)
                    <x-card :event="$event" />
                @endif
            @endforeach
        </div>
        <x-button-call-to-action href="" class="mx-auto">More Events</x-button-call-to-action>
    </div>

    <h2 class="text-2xl font-bold text-center mb-4">Events</h2>

    <div class="mx-40">


        <div class="max-w-[50%] mx-auto flex justify-between my-8">
            <a href="/Valdisotto"> <x-button-filter>Valdisotto</x-button-filter></a>
            <a href="/Valdidentro"> <x-button-filter>Valdidentro</x-button-filter></a>
            <a href="/Valfurva"> <x-button-filter>Valfurva</x-button-filter></a>
            <a href="/Bormio"> <x-button-filter>Bormio</x-button-filter></a>
            <a href="/Livigno"> <x-button-filter>Livigno</x-button-filter></a>
            <a href="/Sondalo"> <x-button-filter>Sondalo</x-button-filter></a>
            <a href="/"> <x-button-filter>All</x-button-filter></a>
            <a href="/Roma"> <x-button-filter>Roma</x-button-filter></a>
        </div>
        @if (!empty($filteredEvents))


            @foreach ($filteredEvents as $event)
                <x-card-wide :event="$event" />
            @endforeach
        @else
            @if (!empty($area))

                <div> NO EVENTS AT THE MOMENT when you search {{ $area }}
                </div>
                <div> TRY with another area</div>
            @else
                @foreach ($events as $event)
                    <x-card-wide :event="$event" />
                @endforeach
            @endif
        @endif
    </div>

</x-layout>
