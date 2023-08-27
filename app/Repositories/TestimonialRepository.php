<?php

namespace App\Repositories;

use App\Interfaces\TestimonialInterface;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialRepository implements TestimonialInterface
{
    private $testimonial;

    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function getAll()
    {
        return $this->testimonial->orderBy('id', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->testimonial->find($id);
    }

    public function store($data)
    {
        $fileNameProfilePicture = uniqid() . '.' . $data['profile_picture']->extension();
        $data['profile_picture']->storeAs('public/testimonial', $fileNameProfilePicture);
        $data['profile_picture'] = $fileNameProfilePicture;

        DB::beginTransaction();

        try {
            $this->testimonial->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/testimonial/' . $fileNameProfilePicture);
            return false;
        }
    }

    public function update($id, $data)
    {
        $testimonial = $this->testimonial->find($id);

        Storage::delete('public/testimonial/' . $testimonial->profile_picture);

        $fileNameProfilePicture = uniqid() . '.' . $data['profile_picture']->extension();
        $data['profile_picture']->storeAs('public/testimonial', $fileNameProfilePicture);
        $data['profile_picture'] = $fileNameProfilePicture;

        DB::beginTransaction();

        try {
            $testimonial->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/testimonial/' . $fileNameProfilePicture);
            return false;
        }
    }

    public function destroy($id)
    {
        $testimonial = $this->testimonial->find($id);

        Storage::delete('public/testimonial/' . $testimonial->profile_picture);

        DB::beginTransaction();

        try {
            $testimonial->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return false;
        }
    }
}
