<?php

namespace App\Repositories;

use App\Interfaces\EventParticipantInterface;
use App\Models\EventParticipant;

class EventParticipantRepository implements EventParticipantInterface
{
    private $eventParticipant;

    public function __construct(EventParticipant $eventParticipant)
    {
        $this->eventParticipant = $eventParticipant;
    }

    public function getAll()
    {
        return $this->eventParticipant->with('event')->get();
    }

    public function getById($id)
    {
        return $this->eventParticipant->find($id);
    }

    public function getByEventId($eventId)
    {
        return $this->eventParticipant->where('event_id', $eventId)->get();
    }

    public function store($data)
    {
        return $this->eventParticipant->create($data);
    }

    public function update($id, $data)
    {
        return $this->eventParticipant->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->eventParticipant->find($id)->delete();
    }
}
