<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create(){
        return view('cast.tambah');
    }

    public function store(Request $request){

        $request->validate([
            'judul' => 'required|min:5|max:255',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'genre' => 'required',
            // 'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        DB::table('film')->insert([
            'judul' => $request->input('judul'),
            'ringkasan' => $request->input('ringkasan'),
            'tahun' => $request->input('tahun'),
            'genre' => $request->input('genre'),
            // 'poster' => $request->input('poster'),
        ]);

        return redirect('/cast');
    }
}