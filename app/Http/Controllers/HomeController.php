<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        echo "Hello";
    }

    public function index()
    {
        echo __CLASS__;
    }
}
