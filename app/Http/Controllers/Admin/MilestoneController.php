<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\MilestoneInterface;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    private $milestone;

    public function __construct(MilestoneInterface $milestone)
    {
        $this->milestone = $milestone;
    }

    public function index()
    {
        return view('admin.milestone.index', [
            'milestones' => $this->milestone->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year'        => ['required'],
            'title'       => ['required'],
            'description' => ['required']
        ]);

        try {
            $this->milestone->store($request->all());
            return redirect()->back()->with('success', 'Milestone berhasil dibuat!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Milestone gagal dibuat!');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->milestone->getById($request->id));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'year'        => ['required'],
            'title'       => ['required'],
            'description' => ['required'],
        ]);

        try {
            $this->milestone->update($id, $request->all());
            return redirect()->back()->with('success', 'Milestone berhasil diupdate!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Milestone gagal diupdate!');
        }
    }

    public function destroy($id)
    {
        try {
            $this->milestone->destroy($id);
            return redirect()->back()->with('success', 'Milestone berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Milestone gagal dihapus!');
        }
    }
}
