<x-layout>
    <h2 class="text-2xl font-bold text-center mb-4">Featured Events</h2>


    <div class="flex flex-row space-x-4 mx-40">
        @foreach ($events as $event)
            @if ($event->is_featured === 1)
                <x-card :event="$event" />
            @endif
        @endforeach
    </div>

    <div class="max-w-[10%] mx-auto flex justify-between my-8">
        <x-button-filter id="winterButton">Winter</x-button-filter>
        <x-button-filter id="summerButton">Summer</x-button-filter>
    </div>

    <x-carousel id="summerCarousel" class="hidden">
        <x-card-carousel>Climbing</x-card-carousel>
        <x-card-carousel>Trail Running</x-card-carousel>
        <x-card-carousel>Mountain Bike</x-card-carousel>
        <x-card-carousel>Golf</x-card-carousel>
        <x-card-carousel>SPA & Relax</x-card-carousel>
        <x-card-carousel>Skiing</x-card-carousel>
        <x-card-carousel>IceSkating</x-card-carousel>
    </x-carousel>
    <x-carousel id="winterCarousel" class="hidden">
        <x-card-carousel>Skiing</x-card-carousel>
        <x-card-carousel>Ice Skating</x-card-carousel>
        <x-card-carousel>SPA & Relax</x-card-carousel>
        <x-card-carousel>Indoor Climbing</x-card-carousel>
        <x-card-carousel>Snowboarding</x-card-carousel>
        <x-card-carousel>Snowshoeing</x-card-carousel>
        <x-card-carousel>Cross-country Skiing</x-card-carousel>
        <x-card-carousel>Snowmobile Tours</x-card-carousel>
        <x-card-carousel>Dog Sledding</x-card-carousel>
        <x-card-carousel>Fat Biking</x-card-carousel>
        <x-card-carousel>Thermal Baths</x-card-carousel>
    </x-carousel>
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
