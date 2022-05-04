<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "password" => ["required"]
        ]);

        if(auth("admin")->attempt($data)) {

            return redirect(route('admin.users.index'));
        }

        return redirect(route('admin.login'))->withErrors(["name" => "Password or username is not correct"]);
    }

    public function logout()
    {
        auth("admin")->logout();

        return redirect(route('home'));
    }
}
