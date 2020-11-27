<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $phone = '081288190556';
        $email = 'ingafter60@gmail.com';
        return view('contact', compact('phone', 'email'));
    }
}
