<div class="card bg-base-100 shadow-xl grid grid-cols-[10%,15%,70%] items-start p-4 w-full mb-8 gap-4">
    <!-- First Block (20%) -->
    <div class="flex flex-col justify-center">
        <p class="text-lg text-white">{{$event->event_date}}</p>
    </div>

    <!-- Second Block (50%) - Image -->
    <div class="flex justify-center">
        <img class="h-40 w-full object-cover" src="https://via.placeholder.com/640x480.png/0066cc?text=delectus" alt="Event" />
    </div>

    <!-- Third Block (30%) - Content -->
    {{-- <div class="flex flex-col">
        <p><strong>Time:</strong> {{ $event->starting_time }} AM - {{ $event->finishing_time }} PM</p>
        <h2 class="card-title">
            Event Name
            @if ($event->is_new)
                <div class="badge badge-secondary">NEW</div>
            @endif
        </h2>
        <p class="text-sm text-gray-600">{{$event->short_description}}</p>
        <p><strong>Location:</strong> {{$event->location}}</p>
        <p class="badge badge-outline mt-1">{{$event->tag}}</p>
    </div>

    <!-- Fourth Block (Right-aligned Content in Third Block) -->
    <div class="flex flex-col justify-between items-end">
        <p class="inline-block border border-gray-400 text-gray-700 px-2 py-0.5 mt-1 rounded-md text-white">
            {{$event->area}}
        </p>
        <button class="btn btn-primary mt-auto">Learn more</button>
    </div> --}}
    <div class="ml-4 grid grid-cols-[70%,30%]">
        <div>
            <p><strong>Time:</strong> {{ $event->starting_time }} AM - {{ $event->finishing_time }} PM</p>
            <h2 class="card-title">
                {{$event->event_name}}
                @if ($event->is_new)
                    <div class="badge badge-secondary">NEW</div>
                @endif
            </h2>
            <p class="text-sm text-gray-600">{{$event->short_description}}</p>
            <p><strong>Location: </strong>{{$event->location}}</p>
        <p   class="badge badge-outline mt-1">{{$event->tag}}</p  >

        </div>
        <div class="ml-4 flex flex-col justify-between items-end">
            <!-- Paragraph aligned at the top-right -->
            <p class="inline-block border border-gray-400 text-gray-700 px-2 py-0.5 mt-1 rounded-md text-white">
                {{$event->area}}
            </p>

            <!-- Button aligned at the bottom-right -->
            <button class="btn btn-primary mt-auto">Learn more</button>
        </div>
    </div>
</div>

{{--
<div class="card bg-base-100 shadow-xl flex flex-row items-start p-4 w-full mb-8">
    <!-- First Block -->
    <div class="flex flex-col mr-4">
        <p class="text-sm text-gray-600">{{$event->event_date}}</p>


    </div>
    <!-- Second Block -->
    <div class="flex-none">
        <img class="max-h-40 w-32 object-cover" src="https://via.placeholder.com/640x480.png/0066cc?text=delectus"
            alt="Event" />
    </div>
    <!-- Third Block -->
    <div class="ml-4 flex flex-row">
        <div>
            <p><strong>Time:</strong> {{ $event->starting_time }} AM - {{ $event->finishing_time }} PM</p>
            <h2 class="card-title">
                Event Name
                @if ($event->is_new)
                    <div class="badge badge-secondary">NEW</div>
                @endif
            </h2>
            <p class="text-sm text-gray-600">{{$event->short_description}}</p>
            <p><strong>Location: </strong>{{$event->location}}</p>
        <p   class="badge badge-outline mt-1">{{$event->tag}}</p  >

        </div>
        <div class="ml-4 flex flex-col justify-between items-end">
            <!-- Paragraph aligned at the top-right -->
            <p class="inline-block border border-gray-400 text-gray-700 px-2 py-0.5 mt-1 rounded-md text-white">
                {{$event->area}}
            </p>

            <!-- Button aligned at the bottom-right -->
            <button class="btn btn-primary mt-auto">Learn more</button>
        </div>
    </div>
</div> --}}
