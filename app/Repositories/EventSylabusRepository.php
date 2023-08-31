<?php

namespace App\Repositories;

use App\Interfaces\EventSylabusInterface;
use App\Models\EventSylabus;

class EventSylabusRepository implements EventSylabusInterface
{
    private $eventSylabus;

    public function __construct(EventSylabus $eventSylabus)
    {
        $this->eventSylabus = $eventSylabus;
    }

    public function getByEventId($id)
    {
        return $this->eventSylabus->where('event_id', $id)->get();
    }

    public function getById($id)
    {
        return $this->eventSylabus->find($id);
    }

    public function store($data)
    {
        return $this->eventSylabus->create($data);
    }

    public function update($id, $data)
    {
        return $this->eventSylabus->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->eventSylabus->find($id)->delete();
    }
}
