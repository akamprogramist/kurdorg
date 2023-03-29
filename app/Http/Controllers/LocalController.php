<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocalController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('locals/Index', [
            'filters' => $request->all('search'),
            'locals' => Local::latest()->filter($request->only('search'))->get()
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
