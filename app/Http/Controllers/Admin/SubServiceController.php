<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SubServiceInterface;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    private $subService;

    public function __construct(SubServiceInterface $subService)
    {
        $this->subService = $subService;
    }

    public function index($service_id)
    {
        return view('admin.sub-services.index', [
            'subServices' => $this->subService->getAll($service_id),
            'serviceId'   => $service_id
        ]);
    }

    public function store($service_id, Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'nullable'
        ]);

        $request->merge([
            'service_id' => $service_id
        ]);

        try {
            $this->subService->store($request->all());
            return redirect()->back()->with('success', 'Sub Service berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Sub Service gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'nullable'
        ]);

        try {
            $this->subService->update($id, $request->all());
            return redirect()->back()->with('success', 'Sub Service berhasil diubah');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Sub Service gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->subService->destroy($id);
            return redirect()->back()->with('success', 'Sub Service berhasil dihapus');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Sub Service gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->subService->getById($request->id));
    }
}
