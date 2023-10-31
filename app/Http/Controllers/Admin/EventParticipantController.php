<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EventInterface;
use App\Interfaces\EventParticipantInterface;
use App\Models\EventParticipant;
use Illuminate\Http\Request;

class EventParticipantController extends Controller
{
    private $event;
    private $eventParticipant;

    public function __construct(EventInterface $event, EventParticipantInterface $eventParticipant)
    {
        $this->event            = $event;
        $this->eventParticipant = $eventParticipant;
    }

    public function index()
    {
        return view('admin.event_participant.index', [
            'eventParticipants' => $this->eventParticipant->getAll(),
            'events'            => $this->event->getAll()
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->eventParticipant->getById($request->id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id'  => ['required', 'exists:events,id'],
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email'],
            'phone'     => ['required'],
            'company'   => ['nullable', 'string', 'max:255'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'status'     => ['required'],
        ]);

        try {
            $this->eventParticipant->store(array_merge($request->all(), ['status' => EventParticipant::STATUS_PENDING]));
            return redirect()->back()->with('success', 'Event participant berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Event participant gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'event_id'  => ['required', 'exists:events,id'],
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email'],
            'phone'     => ['required'],
            'company'   => ['nullable', 'string', 'max:255'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'phone'     => ['required'],
            'status'     => ['required'],
        ]);

        try {
            $this->eventParticipant->update($id, $request->all());
            return redirect()->back()->with('success', 'Event participant berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Event participant gagal diubah');
        }
    }

    public function destroy($id)
    {
        $this->eventParticipant->destroy($id);
        return redirect()->back()->with('success', 'Event participant berhasil dihapus');
    }
}
