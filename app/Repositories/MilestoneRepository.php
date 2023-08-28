<?php

namespace App\Repositories;

use App\Interfaces\MilestoneInterface;
use App\Models\Milestone;

class MilestoneRepository implements MilestoneInterface
{
    private $milestone;

    public function __construct(Milestone $milestone)
    {
        $this->milestone = $milestone;
    }

    public function getAll()
    {
        return $this->milestone->get();
    }

    public function getAllWithPagination()
    {
        return $this->milestone->orderBy('year', 'desc')->paginate(10);
    }

    public function getById($id)
    {
        return $this->milestone->find($id);
    }

    public function store($data)
    {
        return $this->milestone->create($data);
    }

    public function update($id, $data)
    {
        return $this->milestone->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->milestone->find($id)->delete();
    }
}
