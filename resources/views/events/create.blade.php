<x-layout>

    <div class="card bg-base-100  shadow-xl flex-none mb-8 mt-8 w-1/2 mx-auto">
        <div class="card-body">
            <form action="/events" class="space-y-4" method="POST">
                @csrf
                <div class="form-control">
                    <label for="event_name" class="label">
                        <span class="label-text">Event Name</span>
                    </label>
                    <input id="event_name" name="event_name" type="text" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="starting_time" class="label">
                        <span class="label-text">Starting Time</span>
                    </label>
                    <input id="starting_time" name="starting_time" type="text" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="finishing_time" class="label">
                        <span class="label-text">Finishing Time</span>
                    </label>
                    <input id="finishing_time" name="finishing_time" type="text"
                        class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="cover" class="label">
                        <span class="label-text">Cover Image URL</span>
                    </label>
                    <input id="cover" name="cover" type="text" class="input input-bordered w-full" />
                </div>

                <div class="form-control flex items-center space-x-2">
                    <input id="is_new" name="is_new" type="checkbox" class="checkbox" />
                    <label for="is_new" class="label">
                        <span class="label-text">Is New</span>
                    </label>
                </div>

                <div class="form-control flex items-center space-x-2">
                    <input id="is_featured" name="is_featured" type="checkbox" class="checkbox" />
                    <label for="is_featured" class="label">
                        <span class="label-text">Is Featured</span>
                    </label>
                </div>

                <div class="form-control">
                    <label for="short_description" class="label">
                        <span class="label-text">Short Description</span>
                    </label>
                    <input id="short_description" name="short_description" type="text"
                        class="input input-bordered w-full" />
                </div>

                {{-- <div class="form-control">
                    <label for="long_description" class="label">
                        <span class="label-text">Long Description</span>
                    </label>
                    <input id="long_description" name="long_description" type="text" class="input input-bordered w-full" />
                </div> --}}

                <!-- Event Description -->
                <div class="form-control">
                    <label for="long_description" class="label">
                        <span class="label-text">Event Description</span>
                    </label>
                    {{-- <textarea id="long_description" name="long_description" class="textarea textarea-bordered w-full"> --}}
                    <textarea id="test" name="long_description" class="textarea textarea-bordered w-full">
        </textarea>
                </div>

                <div class="form-control">
                    <label for="event_date" class="label">
                        <span class="label-text">Event Date</span>
                    </label>
                    <input id="event_date" name="event_date" type="date" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="location" class="label">
                        <span class="label-text">Location</span>
                    </label>
                    <input id="location" name="location" type="text" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="tag" class="label">
                        <span class="label-text">Tag</span>
                    </label>
                    <input id="tag" name="tag" type="text" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label for="area" class="label">
                        <span class="label-text">Choose an Area</span>
                    </label>
                    <select id="area" name="area" class="select select-bordered w-full">
                        <option value="Bormio">Bormio</option>
                        <option value="Livigno">Livigno</option>
                        <option value="Valfurva">Valfurva</option>
                        <option value="Valdisotto">Valdisotto</option>
                        <option value="Valdidentro">Valdidentro</option>
                        <option value="Sondalo">Sondalo</option>
                    </select>
                </div>

                <div class="form-control mt-4">
                    <button class="btn btn-primary w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
