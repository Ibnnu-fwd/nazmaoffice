<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceCategoryInterface;
use App\Interfaces\ServiceInterface;
use App\Interfaces\ServiceProjectInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    private $serviceCategory;
    private $serviceProject;

    public function __construct(ServiceInterface $service, ServiceCategoryInterface $serviceCategory, ServiceProjectInterface $serviceProject)
    {
        $this->service         = $service;
        $this->serviceCategory = $serviceCategory;
        $this->serviceProject  = $serviceProject;
    }

    public function index()
    {
        return view('user.service.index', [
            'services'          => $this->service->getAll(),
            'serviceCategories' => $this->serviceCategory->getAll(),
            'serviceProjects'    => $this->serviceProject->groupByMonth(date('Y'))
        ]);
    }

    public function detail($id)
    {
        return view('user.service.detail', [
            'service' => $this->service->getById($id)
        ]);
    }
}
