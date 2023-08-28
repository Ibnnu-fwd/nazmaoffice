<?php

namespace App\Repositories;

use App\Interfaces\PartnerInterface;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerRepository implements PartnerInterface
{
    private $partner;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function getAll()
    {
        return $this->partner->orderBy('name', 'asc')->get();
    }

    public function getAllWithPagination()
    {
        return $this->partner->orderBy('name', 'asc')->paginate(10);
    }

    public function getById($id)
    {
        return $this->partner->find($id);
    }

    public function store($data)
    {
        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/partner', $fileNameImage);
        $data['image'] = $fileNameImage;

        return $this->partner->create($data);
    }

    public function update($id, $data)
    {
        $partner = $this->partner->find($id);

        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/partner', $fileNameImage);
        $data['image'] = $fileNameImage;

        Storage::delete('public/partner/' . $partner->image);

        return $partner->update($data);
    }

    public function destroy($id)
    {
        $partner = $this->partner->find($id);
        Storage::delete('public/partner/' . $partner->image);
        return $partner->delete();
    }

    public function countPartner()
    {
        return $this->partner->get()->count();
    }
}