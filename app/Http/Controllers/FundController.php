<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;

class FundController extends Controller
{

    public function store(Request $request){
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required',
            'telepon'   => 'required',
            'barang'    => 'required',
            'id'        => 'required'
        ]);

        $upload = Fund::create([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'phone'     => $request->telepon,
            'barang'    => $request->barang,
            'dinsos_id' => $request->id
        ]);

        return redirect('/');
    }
}
