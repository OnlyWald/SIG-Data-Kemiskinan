<?php

namespace App\Http\Controllers;

use App\Models\Dinsos;
use App\Models\Kota;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        return view('maps', [
            'dataes' => Dinsos::all()
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required',
            'telepon'   => 'required',
            'barang'    => 'required',
            'id'        => 'required'

        ]);
    }
}
