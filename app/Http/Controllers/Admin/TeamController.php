<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\TeamInterface;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private $team;

    public function __construct(TeamInterface $team)
    {
        $this->team = $team;
    }

    public function index()
    {
        return view('admin.team.index', [
            'teams' => $this->team->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required'],
            'image'     => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'job'       => ['required'],
            'facebook'  => ['nullable'],
            'twitter'   => ['nullable'],
            'instagram' => ['nullable'],
            'linkedin'  => ['nullable']
        ]);

        try {
            $this->team->store($request->all());
            return redirect()->back()->with('success', 'Team berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Team gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'      => ['required'],
            'image'     => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'job'       => ['required'],
            'facebook'  => ['nullable'],
            'twitter'   => ['nullable'],
            'instagram' => ['nullable'],
            'linkedin'  => ['nullable']
        ]);

        try {
            $this->team->update($id, $request->all());
            return redirect()->back()->with('success', 'Team berhasil diubah');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Team gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->team->destroy($id);
            return redirect()->back()->with('success', 'Team berhasil dihapus');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Team gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->team->getById($request->id));
    }
}
