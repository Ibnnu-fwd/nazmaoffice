<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceInterface;
use App\Interfaces\ServiceProjectInterface;
use Illuminate\Http\Request;

class ServiceProjectController extends Controller
{
    private $serviceProject;
    private $service;

    public function __construct(ServiceProjectInterface $serviceProject, ServiceInterface $service)
    {
        $this->serviceProject = $serviceProject;
        $this->service        = $service;
    }

    public function index()
    {
        return view('admin.service_project.index', [
            'serviceProjects' => $this->serviceProject->getAll(),
            'services'        => $this->service->getAll()
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->serviceProject->getById($request->id));
    }

    public function list($serviceId)
    {
        return response()->json($this->serviceProject->getByServiceid($serviceId));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id'     => ['required', 'exists:services,id'],
            'title'          => ['required', 'string', 'max:255'],
            'taken_at'       => ['nullable', 'date'],
            'due_at'         => ['nullable', 'date'],
            'customer_name'  => ['nullable', 'string', 'max:255'],
            'customer_phone' => ['nullable', 'string', 'max:255'],
            'status'         => ['required', 'string', 'max:255'],
            'price'          => ['required'],
            'image_1'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'image_2'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'image_3'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'tag'            => ['required', 'string', 'max:255'],
            'location'       => ['nullable', 'string', 'max:255'],
        ]);

        try {
            $this->serviceProject->store($request->all());
            return redirect()->back()->with('success', 'Project berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Project gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'service_id'     => ['required', 'exists:services,id'],
            'title'          => ['required', 'string', 'max:255'],
            'taken_at'       => ['nullable', 'date'],
            'due_at'         => ['nullable', 'date'],
            'customer_name'  => ['nullable', 'string', 'max:255'],
            'customer_phone' => ['nullable', 'string', 'max:255'],
            'status'         => ['required', 'string', 'max:255'],
            'price'          => ['required'],
            'image_1'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'image_2'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'image_3'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'tag'            => ['required', 'string', 'max:255'],
            'location'       => ['nullable', 'string', 'max:255'],
        ]);

        try {
            $this->serviceProject->update($id, $request->all());
            return redirect()->back()->with('success', 'Project berhasil diupdate');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Project gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            $this->serviceProject->destroy($id);
            return redirect()->back()->with('success', 'Project berhasil dihapus');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Project gagal dihapus');
        }
    }
}
