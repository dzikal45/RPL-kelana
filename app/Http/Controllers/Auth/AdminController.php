<?php

namespace App\Http\Controllers\Auth;

use Auth;
use session;
use Illuminate\Http\Request;




use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
}
