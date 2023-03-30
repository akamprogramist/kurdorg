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
            'filters' => $request->only(['search', 'location']),
            'locals' => Local::latest()->filter($request->only('search', 'location'))->paginate(6)->withQueryString()->through(fn ($local) => [
                'id' => $local->id,
                'name' => $local->name,
                'location' => $local->location,
                'description' => $local->description,
                'image' => ($local->image ? asset('storage/' . $local->image) : asset('/storage/images/no-image.jpg')),
            ])
        ]);
    }
    public function create()
    {
        return Inertia::render('locals/Create');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => ['required'],
            'description' => ['required'],
            'location' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
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
}
