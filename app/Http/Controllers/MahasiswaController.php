<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data=Mahasiswa::get();
        return view('mahasiswa',compact('data'));
    }
}
