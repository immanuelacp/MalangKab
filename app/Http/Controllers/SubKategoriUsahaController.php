<?php

namespace App\Http\Controllers;

use App\KategoriUsaha;
use App\SubSektorUsaha;
use Illuminate\Http\Request;

class SubKategoriUsahaController extends Controller
{
    public function index(){
        $kategori = KategoriUsaha::all();

        return view('admin.adminSubKategoriUsaha',compact('kategori'));
    }
    public function show(Request $request){

        if ($request->ajax()) {

            $data = SubSektorUsaha::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-xs dataTable"><i class="fas fa-pencil-alt mr-2"></i>Ubah</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="delete btn btn-danger btn-xs dataTable"><i class="fas fa-trash-alt mr-2"></i>Hapus</a>';

                    return $btn;

                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('admin.adminDesa');
    }
    public function store(Request $request)
    {

        $kecamatanId = $request->kecamatan;
        $desa = Desa::updateOrCreate(
            ['id' => $request->id],
            ['nama_desa' => $request->nama_desa],
            ['kecamatan_id' => $kecamatanId]);
        return response()->json($desa);

    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $desa = Desa::where($where)->first();

        return response()->json($desa);

    }
    public function destroy($id)
    {
        $desa = Desa::where('id', $id)->delete();
        return response()->json($desa);


    }
}
