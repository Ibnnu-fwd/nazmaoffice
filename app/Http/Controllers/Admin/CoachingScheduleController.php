<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CoachingScheduleInterface;
use Illuminate\Http\Request;

class CoachingScheduleController extends Controller
{
    private $coachingSchedule;

    public function __construct(CoachingScheduleInterface $coachingSchedule)
    {
        $this->coachingSchedule = $coachingSchedule;
    }

    public function index()
    {
        return view('admin.coaching_schedule.index', [
            'coachingSchedules' => $this->coachingSchedule->getAll()
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->coachingSchedule->getById($request->id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'year'  => ['required'],
            // excel
            'file'  => ['required']
        ]);

        try {
            $this->coachingSchedule->store($request->all());
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'year'  => ['required'],
            'file'  => ['nullable']
        ]);

        try {
            $this->coachingSchedule->update($id, $request->all());
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $this->coachingSchedule->destroy($id);
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
