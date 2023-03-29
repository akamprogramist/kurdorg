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
            'locals' => Local::latest()->filter($request->only('search'))->paginate(6)->through(fn ($local) => [
                'id' => $local->id,
                'name' => $local->name,
                'location' => $local->location,
                'description' => $local->description
            ])
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
