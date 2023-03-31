<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function indexEvent() {

        $activity = Child::paginate(10);
        return view('Event.index', compact('event'));
    }

    public function createEvent() {

        return view('event.create');
    }

    public function storeEvent(Request $request) {
        
        $event = new Child();

        $event->user_id = auth()->user()->id;
        $event->name = $request->post('name');
        $event->description = $request->post('description');
        $event->date = $request->post('date');
        $event->price_no_associated = $request->post('price_no_associated');
        $event->price_associated = $request->post('price_associated');
        $event->date_finilized = $request->post('date_finilized');
        $event->category_id = $request->post('category_id');

        $event->save();

        return redirect()->route('event.index')->with('success', 'Activity created successfully!!');
    }

    public function showEvent(Child $child) {
        
        return view('event.show', compact('event'));
    }

    public function editEvent($id) {

        $event = Child::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    public function updateEvent(Request $request, $id) {

        $event = Child::findOrFail($id);
        $event->user_id = auth()->user()->id;
        $event->name = $request->post('name');
        $event->descripcion = $request->post('descripcion');
        $event->date = $request->post('date');
        $event->price_no_associated = $request->post('price_no_associated');
        $event->price_associated = $request->post('price_associated');
        $event->date_finilized = $request->post('date_finilized');
        $event->category_id = $request->post('category_id');
        
        $event->save();

        return redirect()->route('event.index')->with('success', 'Activity updated successfully!!');
    }

    public function destroyEvent($id) {

        $event = Child::findOrFail($id);

        if($event->user_id != Auth::user()->id) {
            return redirect()->back()->withErrors('message', 'No tienes permiso para eliminar esta actividad');
        }

        $event->delete();
        return redirect()->route('event.index');
    }
}
