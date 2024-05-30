<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beasiswa;
class BeasiswaController extends Controller
{
    public function index()
    {
        $data_beasiswa = Beasiswa::all();
        return view ('beasiswa.index',['data_beasiswa' => $data_beasiswa]);
    }
}