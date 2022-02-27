<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EmailRequest;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(EmailRequest $request){
        $details = [
            'title' => $request->name,
            'body' => $request->mensaje,
            'correo' => $request->correo,
        ];
       
        Mail::to('gestorsistemaslesp@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado...');
    }
}

