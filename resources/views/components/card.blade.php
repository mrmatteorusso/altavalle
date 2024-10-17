<div class="card bg-base-100 w-96 shadow-xl flex-none mb-8">
    <figure>
        <img class="max-h-40 w-full object-cover" src="https://via.placeholder.com/640x480.png/0066cc?text=delectus"
            alt="Event" />
    </figure>
    <div class="card-body">
        <div class="card-actions justify-end">
        <p   class="badge badge-outline mt-1">{{$event->tag}}</p  >
        </div>
        <h2 class="card-title">
            {{$event->event_name}}
            @if ($event->is_new)

            <div class="badge badge-secondary">NEW</div>
            @endif
        </h2>
        <p class="text-sm text-gray-600">{{$event->short_description}}</p>
        <div class="mt-4">
            <p><strong>Date:</strong> {{\Carbon\Carbon::parse($event->event_date)->format('D, d M')}}</p>
            <p><strong>Time:</strong> {{ $event->starting_time }} AM - {{ $event->finishing_time }} PM</p>
            <p><strong>Location:</strong>{{$event->location}}</p>
            <div class="inline-block border border-gray-400  px-2 py-0.5 mt-1 rounded-md text-white">
                {{$event->area}}
            </div>

        </div>
        <div class="mt-4 flex justify-end">
            <a href="/events/show/{{$event->id}}" class="btn btn-primary">Learn more</a>
        </div>
    </div>
</div>
