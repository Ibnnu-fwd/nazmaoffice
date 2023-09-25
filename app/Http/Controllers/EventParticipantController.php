<?php

namespace App\Http\Controllers;

use App\Interfaces\EventParticipantInterface;
use Illuminate\Http\Request;

class EventParticipantController extends Controller
{
    private $eventParticipant;

    public function __construct(EventParticipantInterface $eventParticipant)
    {
        $this->eventParticipant = $eventParticipant;
    }

    public function registerEvent(Request $request, $event_id)
    {
        $request->validate([
            'name'      => ['required'],
            'email'     => ['required', 'email'],
            'phone'     => ['required'],
            'company'   => ['nullable'],
            'job_title' => ['nullable'],
        ]);

        try {
            $this->eventParticipant->store(array_merge($request->all(), ['event_id' => $event_id]));
            return redirect()->back()->with('success', 'Pendaftar berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pendaftar gagal ditambahkan');
        }
    }
}
