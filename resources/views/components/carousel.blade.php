<script src="{{ mix('js/app.js') }}"></script>


<div {{ $attributes->merge(['class' => 'max-w-4xl mx-auto p-4']) }}>
    <h2 class="text-2xl font-bold text-center mb-4">Activities</h2>
    <div class="relative">
        <div class="flex overflow-x-auto space-x-4">

            {{ $slot }}
        </div>
        <div class="flex justify-center mt-4">
            <button class="btn btn-primary">More Info</button>
        </div>
    </div>
</div>
