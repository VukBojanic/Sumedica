<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function onama() {
      return view('pages.onama');
    }

    public function services() {
      return view('pages.services');
    }
}
