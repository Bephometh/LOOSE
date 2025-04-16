<?php

namespace App\Controllers;

class WhatsUp extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}
