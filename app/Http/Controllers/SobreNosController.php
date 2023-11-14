<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //
    public function getIndex(){
        return View('site.sobre');
    }
}
