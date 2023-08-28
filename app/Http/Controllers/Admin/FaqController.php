<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\FaqInterface;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $faq;

    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    public function index()
    {
        return view('admin.faq.index', [
            'faqs' => $this->faq->getAll()
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->faq->getById($request->id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required'
        ]);

        try {
            $this->faq->store($request->all());
            return redirect()->back()->with('success', 'Faq berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Faq gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer'   => 'required'
        ]);

        try {
            $this->faq->update($id, $request->all());
            return redirect()->back()->with('success', 'Faq berhasil diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Faq gagal diupdate');
        }
    }

    public function destroy($id)
    {
        try {
            $this->faq->destroy($id);
            return redirect()->back()->with('success', 'Faq berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Faq gagal dihapus');
        }
    }
}
