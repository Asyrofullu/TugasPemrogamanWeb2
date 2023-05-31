<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BiodataController extends Controller
{

    public function biodata()
    {
        return View('biodata', [
            'nama' => 'umam',
            'nim'  => '21103041066',
            'umur' => '20',
            'alamat' => 'megelang',
            'hobi' => 'game'
        ]);
    }
}
