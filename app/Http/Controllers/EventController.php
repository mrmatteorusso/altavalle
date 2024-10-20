<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{

    public function home(){
        $events = Event::latest()->get();

        return view('home', ['events' => $events]);
    }
    public function index()
    {

        $events = Event::latest()->get();
        return view('events.index', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $is_new = $request->has('is_new') ? true : false;
        $is_featured = $request->has('is_featured') ? true : false;
        $event = Event::create(
            [
                'event_name' => $request->event_name,
                'starting_time' => $request->starting_time,
                'finishing_time' => $request->finishing_time,
                'event_date' => $request->event_date,
                'is_new' => $is_new,
                'is_featured' => $is_featured,
                'short_description' => $request->short_description,
                // 'long_description' => $request->long_description,
                'long_description' => $request->input('long_description'),
                'location' => $request->location,
                'tag' => $request->tag,
                'cover' => $request->cover,
                'area' => $request->area,
            ]
        );
        return redirect('/events/index');
    }

    public function showByArea($area)
    {
        $events = Event::all();
        $filteredEvents = Event::where('area', $area)->get();
        if (count($filteredEvents) > 0) {

            return view('events.index', ['events' => $events,'filteredEvents' => $filteredEvents]);
        } else {
            return view('events.index', ['events' => $events, 'area' => $area]);
        };
    }



    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', ['event' => $event]);
    }

    public function update(Event $event, Request $request)
    {
        $is_new = $request->has('is_new') ? true : false;
        $is_featured = $request->has('is_featured') ? true : false;

        $event->update([
            'event_name' => $request->event_name,
            'starting_time' => $request->starting_time,
            'finishing_time' => $request->finishing_time,
            'event_date' => $request->event_date,
            'is_new' => $is_new,
            'is_featured' => $is_featured,
            'short_description' => $request->short_description,
            // 'long_description' => $request->long_description,
            'long_description' => $request->input('long_description'),
            'location' => $request->location,
            'tag' => $request->tag,
            'cover' => $request->cover,
            'area' => $request->area,
        ]);
        return redirect("/events/show/{$event->id}");
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/');
    }
}
