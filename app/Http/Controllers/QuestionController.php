<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
{
    //dd($request->all());

    $request->validate([
        'nama' => 'required|max:10',
        'email' => ['required', 'email'],
        'pertanyaan' => 'required|max:300|min:8',
    ]);

    $data['nama']       = $request->nama;
    $data['email']      = $request->email;
    $data['pertanyaan'] = $request->pertanyaan;

    //return view('home-question-respon', $data);

    //return redirect()->route('home');
    //return redirect()->back();
    //return redirect()->away('https://www.example.com');
    //return redirect()->route('home')->with('info', 'Selamat, Kamu Lulus!');
    //return redirect()->back()->with('info', 'Oops... Saldo Kamu Kurang!');
    //return redirect()->back()->with('info', 'Terimakasih Fikri! Pertanyaan ini:
    //Tolong jelaskan bagaimana cara mendaftar di PCR akan segera direspon melalui email fikri@pcr.ac.id');

    // Always return a response to fix the error
    return redirect()->back()->with('info', 'Pertanyaan kamu telah dikirim!');

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */

}
}
