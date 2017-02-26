<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (Client $client)
    {
        return view('pages.index');
    }
}
