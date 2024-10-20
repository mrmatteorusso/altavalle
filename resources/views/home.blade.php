<x-layout>
    <div class="flex flex-col">
        <h2 class="text-2xl font-bold text-center mb-4">New Events</h2>
        <div class="flex flex-row space-x-4 mx-40">
            @foreach ($events as $event)
                @if ($event->is_featured === 1)
                    <x-card :event="$event" />
                @endif
            @endforeach
        </div>
        <x-button-call-to-action href="/events/index" class="mx-auto">More Events</x-button-call-to-action>
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
    <div class="flex flex-col">
        <h2 class="text-2xl font-bold text-center mb-4">Archived Events</h2>
        <div class="flex flex-row space-x-4 mx-40">
            @foreach ($events as $event)
                @if ($event->is_featured === 1)
                    <x-card :event="$event" />
                @endif
            @endforeach
        </div>
        <x-button-call-to-action href="#" class="mx-auto">More Events</x-button-call-to-action>
    </div>

</x-layout>
