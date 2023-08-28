<?php

namespace App\Repositories;

use App\Interfaces\TeamInterface;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TeamRepository implements TeamInterface
{
    private $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function getAll()
    {
        return $this->team->all();
    }

    public function getById($id)
    {
        return $this->team->find($id);
    }

    public function store($data)
    {
        $filenameProfilePicture = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/teams', $filenameProfilePicture);
        $data['image'] = $filenameProfilePicture;

        DB::beginTransaction();

        try {
            $this->team->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/teams/' . $filenameProfilePicture);
            return false;
        }
    }

    public function update($id, $data)
    {
        $team = $this->team->find($id);

        Storage::delete('public/teams/' . $team->image);
        $filenameProfilePicture = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/teams', $filenameProfilePicture);
        $data['image'] = $filenameProfilePicture;

        DB::beginTransaction();

        try {
            $team->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/teams/' . $filenameProfilePicture);
            return false;
        }
    }

    public function destroy($id)
    {
        $team = $this->team->find($id);

        Storage::delete('public/teams/' . $team->image);

        DB::beginTransaction();

        try {
            $team->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return false;
        }
    }

    public function countTeam()
    {
        return $this->team->get()->count();
    }
}
    