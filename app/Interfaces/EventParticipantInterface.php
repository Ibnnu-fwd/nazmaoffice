<?php

namespace App\Interfaces;

interface EventParticipantInterface
{
    public function getAll();
    public function getById($id);
    public function getByEventId($eventId);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}
