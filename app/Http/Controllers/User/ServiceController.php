<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceCategoryInterface;
use App\Interfaces\ServiceInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    private $serviceCategory;

    public function __construct(ServiceInterface $service, ServiceCategoryInterface $serviceCategory)
    {
        $this->service         = $service;
        $this->serviceCategory = $serviceCategory;
    }

    public function index()
    {
        return view('user.service.index', [
            'services'          => $this->service->getAll(),
            'serviceCategories' => $this->serviceCategory->getAll()
        ]);
    }

    public function detail($id)
    {
        return view('user.service.detail', [
            'service' => $this->service->getById($id)
        ]);
    }
}
