<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EventInterface;
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
        return view('admin.event.index');
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
}
