<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('index', ['events' => $events]);
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
                'long_description' => $request->long_description,
                'location' => $request->location,
                'tag' => $request->tag,
                'cover' => $request->cover,
                'area' => $request->area,
            ]
        );
        return redirect('/');
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show', ['event' => $event]);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/');
    }
}
