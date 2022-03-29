<?php

namespace App\Http\Controllers;

use App\Models\Chanson;
use Illuminate\Http\Request;


class chansonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $chansons = Chanson::all();
        return view('chanson',compact('chansons'));
    }
    
}
