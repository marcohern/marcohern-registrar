<?php

namespace Marcohern\Registrar\Http\Controllers;

class RegistrarController extends Controller
{
    public function form() {
      return view('registrar::register_form');
    }
}
