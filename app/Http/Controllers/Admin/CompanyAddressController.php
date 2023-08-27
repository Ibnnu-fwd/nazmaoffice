<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CompanyAddressInterface;
use Illuminate\Http\Request;

class CompanyAddressController extends Controller
{
    private $companyAddress;

    public function __construct(CompanyAddressInterface $companyAddress)
    {
        $this->companyAddress = $companyAddress;
    }

    public function index()
    {
        return view('admin.company_address.index', [
            'companyAddresses' => $this->companyAddress->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => ['required'],
            'address' => ['required'],
            'link'    => ['required'],
        ]);

        try {
            $this->companyAddress->store($request->all());
            return redirect()->back()->with('success', 'Alamat perusahaan berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Alamat perusahaan gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'   => ['required'],
            'address' => ['required'],
            'link'    => ['required'],
        ]);

        try {
            $this->companyAddress->update($request->all(), $id);
            return redirect()->back()->with('success', 'Alamat perusahaan berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Alamat perusahaan gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->companyAddress->destroy($id);
            return redirect()->back()->with('success', 'Alamat perusahaan berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Alamat perusahaan gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->companyAddress->getById($request->id));
    }
}
