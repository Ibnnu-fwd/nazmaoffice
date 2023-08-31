<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EventSylabusInterface;
use Illuminate\Http\Request;

class EventSylabusController extends Controller
{
    private $eventSylabus;

    public function __construct(EventSylabusInterface $eventSylabus)
    {
        $this->eventSylabus = $eventSylabus;
    }

    public function index($id)
    {
        return view('admin.event_sylabus.index', [
            'eventSylabuses' => $this->eventSylabus->getByEventId($id),
            'eventId'        => $id
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->eventSylabus->getById($request->id));
    }

    public function store($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $request['event_id'] = $id;
        $this->eventSylabus->store($request->all());
        return redirect()->back()->with('success', 'Silabus berhasil ditambahkan');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $this->eventSylabus->update($id, $request->all());
        return redirect()->back()->with('success', 'Silabus berhasil diubah');
    }

    public function destroy($id)
    {
        $this->eventSylabus->destroy($id);
        return redirect()->back()->with('success', 'Silabus berhasil dihapus');
    }
}
