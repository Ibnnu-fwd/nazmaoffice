<?php

namespace App\Repositories;

use App\Interfaces\GalleryInterface;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryRepository implements GalleryInterface
{
    private $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function getAll()
    {
        return $this->gallery->orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/gallery', $fileNameImage);

        DB::beginTransaction();
        try {
            $this->gallery->create([
                'image' => $fileNameImage,
                'title' => $data['title'],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/gallery/' . $fileNameImage);
            DB::rollback();
            return false;
        }
    }

    public function update($data, $id)
    {
        $gallery = $this->gallery->find($id);

        Storage::delete('public/gallery/' . $gallery->image);
        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/gallery', $fileNameImage);

        DB::beginTransaction();
        try {
            $gallery->update([
                'image' => $fileNameImage,
                'title' => $data['title'],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/gallery/' . $fileNameImage);
            DB::rollback();
            return false;
        }
    }

    public function destroy($id)
    {
        $gallery = $this->gallery->find($id);

        Storage::delete('public/gallery/' . $gallery->image);

        DB::beginTransaction();
        try {
            $gallery->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return false;
        }
    }

    public function getById($id)
    {
        return $this->gallery->find($id);
    }

    public function countGallery()
    {
        return $this->gallery->get()->count();

    }

}