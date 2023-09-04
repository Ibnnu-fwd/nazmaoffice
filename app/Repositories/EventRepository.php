<?php

namespace App\Repositories;

use App\Interfaces\EventInterface;
use App\Models\Event;
use App\Models\EventPageSetting;
use App\Models\EventRundown;
use App\Models\EventSpeaker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventRepository implements EventInterface
{
    private $event;
    private $eventPageSetting;
    private $eventRundown;
    private $eventSpeaker;

    public function __construct(Event $event, EventPageSetting $eventPageSetting, EventRundown $eventRundown, EventSpeaker $eventSpeaker)
    {
        $this->event            = $event;
        $this->eventPageSetting = $eventPageSetting;
        $this->eventRundown     = $eventRundown;
        $this->eventSpeaker     = $eventSpeaker;
    }

    public function settingNew($data)
    {
        $fileNameHeroImage = uniqid() . '.' . $data['hero_image']->extension();
        $data['hero_image']->storeAs('public/event/setting', $fileNameHeroImage);

        return $this->eventPageSetting->create([
            'header_title' => $data['header_title'],
            'description'  => $data['description'],
            'hero_image'   => $fileNameHeroImage,
        ]);
    }

    public function getSetting()
    {
        return $this->eventPageSetting->first();
    }

    public function settingUpdate($data)
    {
        $setting = $this->eventPageSetting->first();

        if (isset($data['hero_image'])) {
            $fileNameHeroImage = uniqid() . '.' . $data['hero_image']->extension();
            $data['hero_image']->storeAs('public/event/setting', $fileNameHeroImage);
            $setting->hero_image = $fileNameHeroImage;
            Storage::delete('public/event/setting/' . $setting->hero_image);
        }

        $setting->header_title = $data['header_title'];
        $setting->description  = $data['description'];
        $setting->save();

        return $setting;
    }

    public function getWithPaginate($limit)
    {
        $events = $this->event->where('is_active', 1)->orderBy('created_at', 'desc')->paginate($limit);
        return $events;
    }

    public function store($data)
    {
        if (isset($data['thumbnail'])) {
            $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/event/thumbnail', $filenameThumbnail);
        }

        if (isset($data['hero_image'])) {
            $fileNameHeroImage = uniqid() . '.' . $data['hero_image']->extension();
            $data['hero_image']->storeAs('public/event/hero_image', $fileNameHeroImage);
        }

        $data['start_date'] = date('Y-m-d', strtotime($data['start_date']));
        $data['end_date']   = date('Y-m-d', strtotime($data['end_date']));
        $data['event_date'] = date('Y-m-d', strtotime($data['event_date']));
        $data['event_time'] = Carbon::parse($data['event_time'])->format('H:i:s');

        DB::beginTransaction();
        try {
            $this->event->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/event/thumbnail/' . $filenameThumbnail);
            Storage::delete('public/event/hero_image/' . $fileNameHeroImage);

            DB::rollBack();
        }
    }

    public function update($id, $data)
    {
        $event = $this->event->findOrFail($id);

        if (isset($data['thumbnail'])) {
            $filenameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/event/thumbnail', $filenameThumbnail);
            $data['thumbnail'] = $filenameThumbnail;
            Storage::delete('public/event/thumbnail/' . $event->thumbnail);
        }

        if (isset($data['hero_image'])) {
            $fileNameHeroImage = uniqid() . '.' . $data['hero_image']->extension();
            $data['hero_image']->storeAs('public/event/hero_image', $fileNameHeroImage);
            $data['hero_image'] = $fileNameHeroImage;
            Storage::delete('public/event/hero_image/' . $event->hero_image);
        }

        $data['start_date'] = date('Y-m-d', strtotime($data['start_date']));
        $data['end_date']   = date('Y-m-d', strtotime($data['end_date']));
        $data['event_date'] = date('Y-m-d', strtotime($data['event_date']));
        $data['event_time'] = date('H:i:s', strtotime($data['event_time']));

        $event->update($data);
    }

    public function getAll()
    {
        return $this->event->where('is_active', 1)->orderBy('event_date', 'asc')->get();
    }

    public function getById($id)
    {
        return $this->event->with(['eventSpeakers', 'eventSylabuses'])->findOrFail($id);
    }

    public function destroy($id)
    {
        return $this->event->find($id)->update([
            'is_active' => 0
        ]);
    }

    public function activate($id)
    {
        return $this->event->find($id)->update([
            'is_active' => 1
        ]);
    }

    // --------------------- RUNDOWN ---------------------

    public function rundownStore($data)
    {
        return $this->eventRundown->create($data);
    }

    public function rundownGetByEventId($id)
    {
        return $this->eventRundown->where('event_id', $id)->get();
    }

    public function rundownDestroy($id)
    {
        return $this->eventRundown->find($id)->delete();
    }

    public function rundownGetById($id)
    {
        return $this->eventRundown->findOrFail($id);
    }

    public function rundownUpdate($id, $data)
    {
        return $this->eventRundown->find($id)->update($data);
    }

    // --------------------- SPEAKER ---------------------

    public function speakerGetByEventId($id)
    {
        return $this->eventSpeaker->where('event_id', $id)->get();
    }

    public function speakerStore($data)
    {
        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/event/speaker', $fileNameImage);

        DB::beginTransaction();

        try {
            $data['image'] = $fileNameImage;

            $this->eventSpeaker->create($data);

            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/event/speaker/' . $fileNameImage);

            DB::rollBack();
        }
    }

    public function getSpeakerById($id)
    {
        return $this->eventSpeaker->findOrFail($id);
    }

    public function speakerUpdate($id, $data)
    {
        $eventSpeaker = $this->eventSpeaker->findOrFail($id);

        Storage::delete('public/event/speaker/' . $eventSpeaker->image);

        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/event/speaker', $fileNameImage);
        $data['image'] = $fileNameImage;

        return $eventSpeaker->update($data);
    }

    public function speakerDestroy($id)
    {
        $eventSpeaker = $this->eventSpeaker->findOrFail($id);
        Storage::delete('public/event/speaker/' . $eventSpeaker->image);
        return $eventSpeaker->delete();
    }
}
