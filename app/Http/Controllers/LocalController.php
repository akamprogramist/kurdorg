<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class LocalController extends Controller
{
    public function index()
    {
        return Inertia::render('locals/Index', [
            'filters' => Request::only(['search', 'location']),
            'locals' => Local::latest()->filter(Request::only('search', 'location'))->paginate(6)->withQueryString()
        ]);
    }
    public function create()
    {
        return Inertia::render('locals/Create');
    }
    public function store()
    {
        $formFields = Request::validate([
            "name" => ['required'],
            'description' => ['required'],
            'location' => ['required'],
        ]);

        if (Request::hasFile('image')) {
            $formFields['image'] = Request::file('image')->store('images', 'public');
        }
        Local::create($formFields);
        return to_route('localNGOs');
    }
    public function destroy(Local $local)
    {
        $local->delete();
        return to_route('localNGOs');
    }
    public function show(Local $local)
    {
        return Inertia::render('locals/Show', [
            'local' => $local
        ]);
    }
    public function edit(Local $local)
    {
        return Inertia::render('locals/Edit', [
            'local' => [
                'id' => $local->id,
                'name' => $local->name,
                'description' => $local->description,
                'location' => $local->location
            ]
        ]);
    }
    public function update(Local $local)
    {
        $formFields = Request::validate([
            "name" => ['required'],
            'description' => ['required'],
            'location' => ['required'],
        ]);

        if (Request::hasFile('image')) {
            $formFields['image'] = Request::file('image')->store('images', 'public');
        }
        $local->update($formFields);
        return to_route('localNGOs');
    }
}
