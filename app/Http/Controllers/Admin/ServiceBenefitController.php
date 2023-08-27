<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceBenefitInterface;
use Illuminate\Http\Request;

class ServiceBenefitController extends Controller
{
    private $serviceBenefit;

    public function __construct(ServiceBenefitInterface $serviceBenefit)
    {
        $this->serviceBenefit = $serviceBenefit;
    }

    public function index($service_id)
    {
        return view('admin.service_benefit.index', [
            'serviceBenefits' => $this->serviceBenefit->getByServiceId($service_id),
            'serviceId'       => $service_id,
        ]);
    }

    public function store($service_id, Request $request)
    {
        $request->validate([
            'title'       => ['required'],
            // 'icon'        => ['required'],
            'description' => ['required'],
        ]);

        try {
            $this->serviceBenefit->store($service_id, $request->all());
            return redirect()->back()->with('success', 'Manfaat layanan berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Manfaat layanan gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'       => ['required'],
            // 'icon'        => ['required'],
            'description' => ['required'],
        ]);

        try {
            $this->serviceBenefit->update($id, $request->all());
            return redirect()->back()->with('success', 'Manfaat layanan berhasil diperbarui');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Manfaat layanan gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        $this->serviceBenefit->destroy($id);
        return redirect()->back()->with('success', 'Manfaat layanan berhasil dihapus');
    }

    public function getById(Request $request)
    {
        return response()->json($this->serviceBenefit->getById($request->id));
    }
}
