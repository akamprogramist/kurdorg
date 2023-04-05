<?php

namespace App\Http\Controllers;


use App\Models\User;
use Inertia\Inertia;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function create()
    {
        return Inertia::render('users/Register');
    }
    public function store()
    {
        $formFields = Request::validate([
            "username" => ['required|min:3|max:50|', Rule::unique('users')],
            'email' => ['required|max:50|email', Rule::unique('users')],
            'password' => ['required|confirmed'],
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        Auth::login($user);
        return to_route('localNGOs');
    }
}
