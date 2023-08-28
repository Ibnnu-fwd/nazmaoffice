<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\EventInterface;
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
            'events'     => $this->event->getWithPaginate(10),
            'eventTypes' => Event::EVENT_TYPES
        ]);
    }
}