<?php

namespace App\Controllers;

class WhatsUp extends BaseController
{
    public function index(): string
    {
        return view('whatsup');
    }

    public function detail($slug){
        
    }
}
