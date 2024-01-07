<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showData()
    {
        // $response['users'] = $this->user->all();
        // return view('welcome')->with($response);

        return User::all();
    }
}
