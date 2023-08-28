<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\EventInterface;
use App\Interfaces\TeamInterface;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        return view('user.event.index', [
            'events'     => $this->event->getAll(),
            'eventTypes' => Event::EVENT_TYPES
        ]);
    }

    public function getById(Request $request)
    {
        return view('user.event.detail', [
            'event' => $this->event->getById($request->id),
        ]);
    }
}
