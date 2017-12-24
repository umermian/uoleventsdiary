<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\organizer;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{

    public function oindex()
    {
        return organizer::all();
    }
    

    public function index()
    {
        $events = DB::table('events')
            ->join('organizers', 'events.o_id', '=', 'organizers.id')
            ->select('events.id','events.image','events.name','events.date_time','events.venue','events.phone','events.o_id','organizers.name as o_name')
            ->get();

        return $events ;
    }

    public function show(Event $event)
    {
       // $events = DB::table('events')
       //      ->join('organizers', 'events.o_id', '=', 'organizers.id')
       //      ->select('events.id','events.image','events.name','events.date_time','events.venue','events.phone','events.o_id','organizers.name as o_name')
       //      ->where('events.id' , '=' , 52)
       //      ->get();

        return $event;
    }

    public function store(Request $request)

    {

       

//        $request->validate([
//            'name'=>'required|string',
//            'date'=>'required',
//            'time'=>'required',
//            'venue'=>'required|string',
//            'organizedBy'=>'required|string',
//
//        ]);

    
        $event = Event::create($request->all()); 
    
        return response()->json($event, 201);

    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function delete(Event $event)
    {
        $event->delete();

        return response()->json(null, 204);
    }


}
