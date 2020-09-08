<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MaskapaiController extends Controller
{
    public function index(){
        $maskapai = DB::table('maskapai')->get();
        return view('index', compact('maskapai'));
    }

    public function delete($id){
        DB::table('maskapai')->where('id', $id)->delete();

        return redirect('index');
    }

    public function store(Request $request){
        $maskapai = $request->input_nama;
        $asal = $request->input_asal;
        $tujuan = $request->input_tujuan;
        $harga = $request->input_harga;
        $pajak = $request->input_pajak;

        $isTrue = DB::table('maskapai')->insert([
            'nama_maskapai' => $maskapai,
            'bandara_asal' => $asal,
            'bandara_tujuan' => $tujuan,
            'harga' => $harga,
            'pajak' => $pajak
        ]);

        if($isTrue){
            return redirect('index');
        }

        return redirect('create');
    }

    public function edit($id){
        //mengambil data berdasarkan id yg dipilih
        $maskapai =DB::table('maskapai')->where('id', $id)->get();

        //passing data yg didapat ke edit.blade.php
        return view('edit', ['maskapai' => $maskapai]);
    }

    public function update(Request $request){   
        DB::table('maskapai')->where('id', $request->id)->update([
            'id' => $request-> id,
            'nama_maskapai' => $request-> input_nama,
            'bandara_asal' => $request-> input_asal,
            'bandara_tujuan' => $request-> input_tujuan,
            'harga' => $request-> input_harga,
            'pajak' => $request-> input_pajak
        ]);

        return redirect('/index');
    }
}
