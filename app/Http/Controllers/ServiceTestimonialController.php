<?php

namespace App\Http\Controllers;

use App\Interfaces\ServiceTestimonialInterface;
use Illuminate\Http\Request;

class ServiceTestimonialController extends Controller
{
    private $serviceTestimonial;

    public function __construct(ServiceTestimonialInterface $serviceTestimonial)
    {
        $this->serviceTestimonial = $serviceTestimonial;
    }

    public function index($serviceId)
    {
        return view('admin.service_testimonial.index', [
            'serviceId'    => $serviceId,
            'testimonials' => $this->serviceTestimonial->getByServiceId($serviceId)
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->serviceTestimonial->getById($request->id));
    }

    public function store($serviceId, Request $request)
    {
        $request->validate([
            'name'        => ['required'],
            'image'       => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'job'         => ['required'],
            'description' => ['required'],
            'rating'      => ['required', 'numeric', 'min:1', 'max:5']
        ]);

        try {
            $this->serviceTestimonial->store($serviceId, $request->all());
            return redirect()->back()->with('success', 'Testimoni layanan berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni layanan gagal ditambahkan');
        }
    }

    public function update($serviceId, Request $request)
    {
        $request->validate([
            'name'        => ['required'],
            'image'       => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'job'         => ['required'],
            'description' => ['required'],
            'rating'      => ['required', 'numeric', 'min:1', 'max:5']
        ]);

        try {
            $this->serviceTestimonial->update($request->id, $request->all());
            return redirect()->back()->with('success', 'Testimoni layanan berhasil diperbarui');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni layanan gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        try {
            $this->serviceTestimonial->destroy($id);
            return redirect()->back()->with('success', 'Testimoni layanan berhasil dihapus');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni layanan gagal dihapus');
        }
    }
}
