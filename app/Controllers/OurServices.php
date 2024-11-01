<?php

namespace App\Controllers;

class OurServices extends BaseController
{
    public function index(): string
    {
        return view('services');
    }
}