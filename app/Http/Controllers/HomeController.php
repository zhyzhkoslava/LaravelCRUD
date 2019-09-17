<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DateCheck;

class HomeController extends Controller
{
    public function index()
    {
        $ext = new DateCheck();

        dd($ext->isValid('25/01/2018'));

        return view('welcome');
    }
}
