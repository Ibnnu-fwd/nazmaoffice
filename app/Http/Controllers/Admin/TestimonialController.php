<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\TestimonialInterface;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonial;

    public function __construct(TestimonialInterface $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function index()
    {
        return view('admin.testimonial.index', [
            'testimonials' => $this->testimonial->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname'        => ['required'],
            'profile_picture' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'job'             => ['required'],
            'rating'          => ['required'],
            'testimonial'     => ['required']
        ]);

        try {
            $this->testimonial->store($request->all());
            return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'fullname'        => ['required'],
            'profile_picture' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'job'             => ['required'],
            'rating'          => ['required'],
            'testimonial'     => ['required']
        ]);

        try {
            $this->testimonial->update($id, $request->all());
            return redirect()->back()->with('success', 'Testimoni berhasil diubah');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->testimonial->destroy($id);
            return redirect()->back()->with('success', 'Testimoni berhasil dihapus');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Testimoni gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->testimonial->getById($request->id));
    }
}
