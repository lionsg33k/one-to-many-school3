<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $organizers = People::all()->where("role", "organizer");

        $events =  Event::all()->where("accepted", 1);

        return view("event.event", compact("organizers", "events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $events =  Event::all();

        return view("event.partials.event_people", compact("events"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            "name" => "required",
            "description" => "required",
            "place" => "required",
            "date" => "required|date",
            "start"  => "required",
            "end" => "required",
            "cover"  => "required|mimes:png,jpg,svg|max:2048",
            "people_id" => "required"
        ]);


        $file = file_get_contents($request->cover);
        $fileName = hash("sha256", $file) . "." . $request->cover->getClientOriginalExtension();
        Storage::disk("public")->put("images/eventCover/" . $fileName, $file);

        Event::create([
            "name" => $request->name,
            "description" => $request->description,
            "place" => $request->place,
            "date" => $request->date,
            "start"  => $request->start,
            "end" => $request->end,
            "cover"  => $fileName,
            "people_id" => $request->people_id
        ]);

        return back();
    }


    public function participate(Request $request, Event $event)
    {


        request()->validate([
            "participant.*" => "required"
        ]);


        $participants = $request->participant;

        $event->events()->attach($participants);


        return back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        // $participants = People::all()->where("id" , "!=" , $event->people_id);
        $participants = People::all()->except($event->people_id);

        return view("event.partials.show_event", compact("event", "participants"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        $event->accepted = true;
        $event->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();

        return back();
    }
}
