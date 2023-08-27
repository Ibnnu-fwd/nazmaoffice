<?php

namespace App\Interfaces;

interface EventInterface
{
    public function getAll();
    public function getById($id);
    public function getWithPaginate($limit);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function activate($id);
    public function getSetting();
    public function settingNew($data);
    public function settingUpdate($data);


    // Rundown
    public function rundownGetByEventId($id);
    public function rundownStore($data);
    public function rundownDestroy($id);
    public function rundownGetById($id);
    public function rundownUpdate($id, $data);

    // Speaker
    public function speakerGetByEventId($id);
    public function speakerStore($data);
    public function getSpeakerById($id);
    public function speakerUpdate($id, $data);
    public function speakerDestroy($id);
}
