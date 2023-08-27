<?php

namespace App\Repositories;

use App\Interfaces\CompanySocialMediaInteface;
use App\Models\CompanySocialMedia;

class CompanySocialMediaRepository implements CompanySocialMediaInteface
{
    private $companySocialMedia;

    public function __construct(CompanySocialMedia $companySocialMedia)
    {
        $this->companySocialMedia = $companySocialMedia;
    }

    public function getAll()
    {
        return $this->companySocialMedia->all();
    }

    public function getById($id)
    {
        return $this->companySocialMedia->find($id);
    }

    public function store($request)
    {
        $this->companySocialMedia->create($request->all());
    }

    public function update($request, $id)
    {
        $this->companySocialMedia->find($id)->update($request->all());
    }

    public function destroy($id)
    {
        $this->companySocialMedia->find($id)->delete();
    }
}
