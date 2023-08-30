<?php

namespace App\Repositories;

use App\Interfaces\CoachingScheduleInterface;
use App\Models\CoachingSchedule;
use Illuminate\Support\Facades\Storage;

class CoachingScheduleRepository implements CoachingScheduleInterface
{
    private $coachingSchedule;

    public function __construct(CoachingSchedule $coachingSchedule)
    {
        $this->coachingSchedule = $coachingSchedule;
    }

    public function getAll()
    {
        return $this->coachingSchedule->orderBy('year', 'asc')->get();
    }

    public function getById($id)
    {
        return $this->coachingSchedule->find($id);
    }

    public function store($data)
    {
        $filenameFile = uniqid() . '.' . $data['file']->extension();
        $data['file']->storeAs('public/coaching-schedules', $filenameFile);
        $data['file'] = $filenameFile;
        $data['year'] = date('Y');
        return $this->coachingSchedule->create($data);
    }

    public function update($id, $data)
    {
        $coachingSchedule = $this->coachingSchedule->find($id);
        if (isset($data['file'])) {
            $filenameFile = uniqid() . '.' . $data['file']->extension();
            $data['file']->storeAs('public/coaching-schedules', $filenameFile);
            $data['file'] = $filenameFile;
            Storage::delete('public/coaching-schedules/' . $coachingSchedule->file);
        }

        return $coachingSchedule->update($data);
    }

    public function destroy($id)
    {
        $coachingSchedule = $this->coachingSchedule->find($id);
        Storage::delete('public/coaching-schedules/' . $coachingSchedule->file);
        return $coachingSchedule->delete();
    }
}
