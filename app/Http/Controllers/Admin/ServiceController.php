<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.service.index', [
            'services'          => $this->service->getAll(),
            'serviceCategories' => $this->serviceCategory->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'icon'                => 'required',
            'icon_color'          => 'required',
            'title'               => 'required',
            'description'         => 'required',
            'phone'               => 'required',
            'hero_image'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'benefit_image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'teaser_link'         => 'nullable',
        ]);

        try {
            $this->service->store($request->all());
            return redirect()->back()->with('success', 'Layanan berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Layanan gagal ditambahkan');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'icon'                => 'required',
            'icon_color'          => 'required',
            'title'               => 'required',
            'description'         => 'required',
            'phone'               => 'required',
            'hero_image'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'benefit_image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'teaser_link'         => 'nullable',
        ]);

        try {
            $this->service->update($request->id, $request->all());
            return redirect()->back()->with('success', 'Layanan berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Layanan gagal diubah');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->service->getById($request->id));
    }

    public function destroy($id)
    {
        try {
            $this->service->changeStatus($id, 0);
            return redirect()->back()->with('success', 'Layanan berhasil dinonaktifkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Layanan gagal dinonaktifkan');
        }
    }

    public function recover($id)
    {
        try {
            $this->service->changeStatus($id, 1);
            return redirect()->back()->with('success', 'Layanan berhasil diaktifkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Layanan gagal diaktifkan');
        }
    }
}
