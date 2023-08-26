<?php

namespace App\Repositories;

use App\Interfaces\EventInterface;
use App\Models\Event;
use App\Models\EventPageSetting;
use Illuminate\Support\Facades\Storage;

class EventRepository implements EventInterface
{
    private $event;
    private $eventPageSetting;

    public function __construct(Event $event, EventPageSetting $eventPageSetting)
    {
        $this->event = $event;
        $this->eventPageSetting = $eventPageSetting;
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
}
