<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminWisatawanController extends Controller
{
    //
    public function dataWisatawan()
    {
        $user = User::where('admin', 0)->get();
        return view('content.dataWisatawan', compact('user'));
    }

    public function addWisatawan()
    {
        return view('content.addWisatawan');
    }

    public function about()
    {
        return view('content.about');
    }
    
    public function contact()
    {
        return view('content.contact');
    }
}
