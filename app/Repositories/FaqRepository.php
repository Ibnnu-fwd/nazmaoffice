<?php

namespace App\Repositories;

use App\Interfaces\FaqInterface;
use App\Models\Faq;

class FaqRepository implements FaqInterface
{
    private $faq;

    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    public function getAll()
    {
        return $this->faq->all();
    }

    public function getById($id)
    {
        return $this->faq->find($id);
    }

    public function store($data)
    {
        return $this->faq->create($data);
    }

    public function update($id, $data)
    {
        return $this->faq->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->faq->find($id)->delete();
    }
}
