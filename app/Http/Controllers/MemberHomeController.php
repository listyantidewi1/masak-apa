<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberHomeController extends Controller
{
    public function home(){
        return view('member.home.index');
    }
}
