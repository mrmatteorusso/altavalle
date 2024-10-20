<div {{$attributes->merge(['class' => "card bg-base-100 shadow-xl w-64 mx-auto"])}}>
    <div class="bg-cover h-48"
        style="background-image: url('https://via.placeholder.com/640x480.png/f0a500');">
        <div class="card-body flex items-center justify-center h-full">
            <h3 class="text-white font-bold text-lg">{{ $slot }}</h3>
        </div>
    </div>
</div>

