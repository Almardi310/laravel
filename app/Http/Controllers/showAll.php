<?php

namespace App\Http\Controllers;

use App\Models\UsefulLink;
use Illuminate\Http\Request;

class showAll extends Controller
{
    public function print()
    {
        return view('usefulLink.print',[
            'links' => UsefulLink::all()
        ]);
    }
}
