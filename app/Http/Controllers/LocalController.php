<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Inertia\Response;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocalController extends Controller
{
    public function index()
    {
        return Inertia::render('locals/Index', [
            'locals' => Local::all()
        ]);
    }
    public function create()
    {
        return Inertia::render('locals/Create');
    }
    public function store(Request $request)
    {
        Local::create($request->validate([
            "name" => ['required'],
            'description' => ['required'],
            'location' => ['required'],
        ]));
        return to_route('localNGOs');
    }
    public function destroy(Local $local)
    {
        $local->delete();
        return to_route('localNGOs');
    }
}
