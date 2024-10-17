<x-layout>
    <div class="card bg-white w-auto shadow-xl flex-none mb-8 mt-8">
        <div class="card-body">

            <div class="flex justify-between">
                <div>
                    <p class="badge badge-outline mt-1 text-gray-800">{{ $event->tag }}</p>
                </div>

                <div class="inline-block border border-gray-400 px-2 py-0.5 mt-1 rounded-md text-black">
                    {{ $event->area }}
                </div>
            </div>

            <h2 class="card-title text-4xl font-bold text-center mx-auto text-black">
                {{ $event->event_name }}
                @if ($event->is_new)
                    <div class="badge badge-secondary text-black bg-pink-500">NEW</div>
                @endif
            </h2>

            <div class="mt-4 flex w-1/3 text-black">
                <p><strong>Date:</strong> {{ $event->event_date }}</p>
                <p><strong>Time:</strong> {{ $event->starting_time }} AM - {{ $event->finishing_time }} PM</p>
                <p><strong>Location:</strong>{{ $event->location }}</p>
            </div>

            <figure>
                <img class="max-h-40 w-full object-cover"
                    src="https://via.placeholder.com/640x480.png/0066cc?text=delectus" alt="Event" />
            </figure>

            <p class="text-sm text-gray-800">{{ $event->long_description }}</p>

            <div class="mt-4 flex justify-between w-72 mx-auto">
                <a href="/" class="btn btn-primary bg-blue-600 text-white">Edit</a>
                <a href="/" class="btn btn-primary bg-gray-300 text-black">Back</a>
                <form action="/events/{{ $event->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button href="/events/{{ $event->id }}"
                        class="btn btn-primary bg-red-600 text-white">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
