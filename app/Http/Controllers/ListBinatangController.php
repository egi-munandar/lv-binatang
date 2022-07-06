<?php

namespace App\Http\Controllers;

use App\Models\ListBinatang;
use Illuminate\Http\Request;

class ListBinatangController extends Controller
{
    function getBinatang()
    {
        $binatang = ListBinatang::all();
        return view('list_binatang.index', ['binatang' => $binatang]);
    }
    public function create()
    {
        return view('list_binatang.create');
    }
    public function store(Request $r)
    {
        ListBinatang::create([
            'nama_binatang' => $r->nama_binatang,
            'deskripsi' => $r->deskripsi
        ]);
        return redirect(route('list-binatang'))->with('msg', ['type' => 'success', 'message' => 'Data berhasil disimpan']);
    }
    public function edit(ListBinatang $lb)
    {
        return view('list_binatang.edit', ['dt' => $lb]);
    }
    public function update(Request $r, ListBinatang $lb)
    {
        $lb->nama_binatang = $r->nama_binatang;
        $lb->deskripsi = $r->deskripsi;
        $lb->save();
        return redirect('list-binatang')->with('msg', ['type' => 'success', 'message' => 'Data berhasil dirubah']);
    }
    public function destroy($id)
    {
        $lb = ListBinatang::find($id);
        $lb->delete();
        return redirect('list-binatang')->with('msg', ['type' => 'success', 'message' => 'Data berhasil dihapus']);
    }
}
