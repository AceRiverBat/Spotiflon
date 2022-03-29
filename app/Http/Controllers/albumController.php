<?php

namespace App\Http\Controllers;

use App\Models\Chanson;
use Illuminate\Http\Request;

class albumController extends Controller
{
    public function details($id){
        $detail = Chanson::find($id);
        return view('album', ['chanson' => $detail]);
    }
}
