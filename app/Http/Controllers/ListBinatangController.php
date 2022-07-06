<?php

namespace App\Http\Controllers;

use App\Models\ListBinatang;
use Illuminate\Http\Request;

class ListBinatangController extends Controller
{
    function getBinatang()
    {
        $binatang = ListBinatang::all();
        return $binatang;
    }
}
