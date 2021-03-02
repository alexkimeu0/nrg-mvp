<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('client.index');
    }

    public function apply() {
        return view('client.apply');
    }

    public function application() {
        return view('client.form');
    }
}
