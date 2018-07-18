<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang; // use model

use PDF;

class BarangController extends Controller
{
	public function index(Request $request){
		if ($request->get('search')) {
			$barangs = Barang::where('nama_barang', 'LIKE', '%'.$request->get('search').'%')->get();
		}else{
			$barangs = Barang::all();
		}
		return view('barang.show', ['barang' => $barangs]);
	}

	public function create(){
		return view('barang.create');
	}

	public function insert(Request $request){
		$barang = new Barang;
		$barang->id_tiket = $request->id_tiket;
		$barang->nama_pemesan = $request->nama_pemesan;
		$barang->kelas = $request->kelas;
		$barang->tgl = $request->tgl;
		$barang->save();

		return redirect(Route('index'))->with('alert-success','Berhasil Menambahkan Data!');
	}

	public function delete($id){
		$barang = Barang::findOrFail($id);
		$barang->delete();
		return redirect(Route('index'))->with('success','Data berhasil Di Hapus');
	}

	public function edit($id){
		$barang = Barang::findOrFail($id);
		return view('barang.edit', ['barang' => $barang]);
	}

	public function submitedit(Request $request, $id){
		$barang = Barang::findOrFail($id);

		$barang->id_tiket = $request->id_tiket;
		$barang->nama_pemesan = $request->nama_pemesan;
		$barang->kelas = $request->kelas;
		$barang->tgl = $request->tgl;
		$barang->save();

		return redirect(Route('index'))->with('alert-success','Berhasil Merubah Data!');
	}

	public function cetak(){
		$barang = Barang::all();

		$pdf = PDF::loadview('barang.cetak', ['barang' => $barang]);
    return $pdf->setPaper('a4', 'potrait')->stream();
	}
}
