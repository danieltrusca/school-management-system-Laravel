<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userView()
    {
        $data['users']=User::all();
        return view('backend.users.view_users',$data);
    }
}
