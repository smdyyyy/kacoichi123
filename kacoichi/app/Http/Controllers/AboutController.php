<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * 紹介ページ
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('about.index',['user'=>$user,]);
    }
}
