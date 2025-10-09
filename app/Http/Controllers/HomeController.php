<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Tampilan form input nama
    public function index()
    {
        return view('home');
    }

    // Terima data dari form
    public function kirim(Request $request)
    {
        $nama  = $request->input('nama');
        $email = $request->input('email');
        $pesan = $request->input('pesan');

        return view('thankyou', compact('nama', 'email', 'pesan'));
    }
}
