<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $email = $req->email;
        $pwd = $req->pwd;

        $records = UserModel::where("email", $email)
            ->where("password", $pwd)
            ->get();

        echo "<pre>";
        print_r($records);
    }
}
