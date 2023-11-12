<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo 'Welcome ' . Auth::user()->username . '!';
        echo "<a href=''>Logout</a>";
    }
}
