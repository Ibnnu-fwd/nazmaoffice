<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.event.index', [
            'events'     => $this->event->getWithPaginate(10),
            'eventTypes' => Event::EVENT_TYPES
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->event->getById($request->id));
    }

    public function activate($id)
    {
        try {
            $this->event->activate($id);
            return redirect()->back()->with('success', 'Event berhasil diaktifkan!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'                  => ['required'],
            'description'            => ['required'],
            'thumbnail'              => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'hero_image'             => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'phone'                  => ['required'],
            'study_case'             => ['required'],
            'study_case_description' => ['required'],
            'capacity'               => ['required'],
            'start_date'             => ['required'],
            'end_date'               => ['required'],
            'event_date'             => ['required'],
            'event_time'             => ['required'],
            'price'                  => ['required'],
            'location'               => ['required'],
            'discount'               => ['nullable'],
            'event_type'             => ['required'],
        ]);

        try {
            $this->event->store($request->all());
            return redirect()->back()->with('success', 'Event berhasil dibuat!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'                  => ['required'],
            'description'            => ['required'],
            'thumbnail'              => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'hero_image'             => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'phone'                  => ['required'],
            'study_case'             => ['required'],
            'study_case_description' => ['required'],
            'capacity'               => ['required'],
            'start_date'             => ['required'],
            'end_date'               => ['required'],
            'event_date'             => ['required'],
            'event_time'             => ['required'],
            'price'                  => ['required'],
            'location'               => ['required'],
            'discount'               => ['nullable'],
            'event_type'             => ['required'],
        ]);

        try {
            $this->event->update($id, $request->all());
            return redirect()->back()->with('success', 'Event berhasil diupdate!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->event->destroy($id);
            return redirect()->back()->with('success', 'Event berhasil dinonaktifkan!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function setting()
    {
        return view('admin.event.setting', [
            'setting' => $this->event->getSetting()
        ]);
    }

    /* 
        This function will make a new setting page
    */
    public function settingNew(Request $request)
    {
        $request->validate([
            'header_title' => ['required'],
            'description'  => ['required'],
            'hero_image'   => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        try {
            $this->event->settingNew($request->all());
            return redirect()->back()->with('success', 'Setting berhasil dibuat!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Setting gagal dibuat!');
        }
    }

    /* 
        This function will update the setting page
    */
    public function settingUpdate(Request $request)
    {
        $request->validate([
            'header_title' => ['required'],
            'description'  => ['required'],
            'hero_image'   => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        try {
            $this->event->settingUpdate($request->all());
            return redirect()->back()->with('success', 'Setting berhasil diupdate!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Setting gagal diupdate!');
        }
    }

    // -------------- RUNDOWN -------------- //

    public function rundown($id)
    {
        return view('admin.event.rundown', [
            'event'    => $this->event->getById($id),
            'rundowns' => $this->event->rundownGetByEventId($id)
        ]);
    }

    public function rundownStore($id, Request $request)
    {
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'start_time'  => ['required'],
            'end_time'    => ['required'],
            'speaker'     => ['required']
        ]);

        $request['event_id'] = $id;

        try {
            $this->event->rundownStore($request->all());
            return redirect()->back()->with('success', 'Jadwal berhasil dibuat!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Jadwal gagal dibuat!');
        }
    }

    public function rundownDestroy($id)
    {
        $this->event->rundownDestroy($id);
        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }

    public function rundownGetById(Request $request)
    {
        return response()->json($this->event->rundownGetById($request->id));
    }

    public function rundownUpdate($id, Request $request)
    {
        $request->validate([
            'title'       => ['required'],
            'description' => ['required'],
            'start_time'  => ['required'],
            'end_time'    => ['required'],
            'speaker'     => ['required']
        ]);

        try {
            $this->event->rundownUpdate($id, $request->all());
            return redirect()->back()->with('success', 'Jadwal berhasil diupdate!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Jadwal gagal diupdate!');
        }
    }

    // -------------- SPEAKER -------------- //

    public function speaker($id)
    {
        return view('admin.event.speaker', [
            'event'    => $this->event->getById($id),
            'speakers' => $this->event->speakerGetByEventId($id) ?? []
        ]);
    }

    public function speakerStore($id, Request $request)
    {
        $request->validate([
            'name'      => ['required'],
            'position'  => ['required'],
            'image'     => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'facebook'  => ['nullable'],
            'instagram' => ['nullable'],
            'youtube'   => ['nullable'],
            'linkedin'  => ['nullable'],
            'tiktok'    => ['nullable'],
        ]);

        try {
            $request['event_id'] = $id;
            $this->event->speakerStore($request->all());
            return redirect()->back()->with('success', 'Pembicara berhasil dibuat!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Pembicara gagal dibuat!');
        }
    }

    public function speakerGetById(Request $request)
    {
        return response()->json($this->event->getSpeakerById($request->id));
    }

    public function speakerUpdate($id, Request $request)
    {
        $request->validate([
            'name'      => ['required'],
            'position'  => ['required'],
            'image'     => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'facebook'  => ['nullable'],
            'instagram' => ['nullable'],
            'youtube'   => ['nullable'],
            'linkedin'  => ['nullable'],
            'tiktok'    => ['nullable'],
        ]);

        try {
            $this->event->speakerUpdate($id, $request->all());
            return redirect()->back()->with('success', 'Pembicara berhasil diupdate!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Pembicara gagal diupdate!');
        }
    }

    public function speakerDestroy($id)
    {
        $this->event->speakerDestroy($id);
        return redirect()->back()->with('success', 'Pembicara berhasil dihapus!');
    }
}