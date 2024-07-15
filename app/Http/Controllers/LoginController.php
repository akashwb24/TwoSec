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

        if ($records->isNotEmpty()) {
            $req->session()->put("uid", $records[0]);
            return redirect("dashboard");
        } else {
            return redirect("userform")->with("msg", "Invalid User!");
        }
    }

    function logout(Request $req)
    {
        $req->session()->forget("uid");
        return redirect("userform")->with("msg", "Successfully Logged out!");
    }
}