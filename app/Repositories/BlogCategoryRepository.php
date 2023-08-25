<?php

namespace App\Repositories;

use App\Interfaces\BlogCategoryInterface;
use App\Models\BlogCategory;

class BlogCategoryRepository implements BlogCategoryInterface
{
    private $blogCategory;

    public function __construct(BlogCategory $blogCategory)
    {
        $this->blogCategory = $blogCategory;
    }

    public function getAll()
    {
        return $this->blogCategory->paginate(5);
    }

    public function store($data)
    {
        return $this->blogCategory->create([
            'title' => $data['title']
        ]);
    }

    public function update($id, $data)
    {
        return $this->blogCategory->where('id', $id)->update([
            'title' => $data['title']
        ]);
    }

    public function destroy($id)
    {
        return $this->blogCategory->find($id)->delete();
    }

    public function getById($id)
    {
        return $this->blogCategory->find($id);
    }
}
