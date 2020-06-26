<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    //
    public function index()
    {
        $users = DB::table('users')->get();
        return view('User', compact('users'));
    }
}
