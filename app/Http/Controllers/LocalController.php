<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Local;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class LocalController extends Controller
{
    public function index()
    {
        $fav = [];
        if (auth()->check()) {
            // favoriteby return the collection and the pluck returns a new collection with only the id attribute
            $fav = auth()->user()->favoriteby->pluck('id')->toArray();
        }
        $favdata = [];
        if (auth()->check()) {
            $favdata = auth()->user()->favoriteby;
        }
        return Inertia::render('locals/Index', [
            'filters' => Request::only(['search', 'location']),
            'locals' => Local::latest()->accepted()->filter(Request::only('search', 'location'))->paginate(6)->withQueryString(),
            'favdata' => $favdata,
            'fav' => $fav,
        ]);
    }

    public function create()
    {
        return Inertia::render('locals/Create');
    }
    public function store()
    {
        $formFields = Request::validate([
            'name' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
        ]);

        if (Request::hasFile('image')) {
            $formFields['image'] = Request::file('image')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Local::create($formFields);
        return redirect('/localNGOs/manage')->with('success', 'created successfully');
    }
    public function destroy(Local $local)
    {
        $local->delete();
        return redirect('/localNGOs/manage')->with('success', 'deleted successfully');
    }
    public function show(Local $local)
    {
        // this will make a unique value
        $key = 'post_' . $local->id . '_views';
        // the session facades helper give a specific token for a user
        if (!Session::has($key)) {
            $local->increment('count');
            // then save the unique value
            Session::put($key, true);
        }
        return Inertia::render('locals/Show', [
            'local' => $local,
        ]);
    }
    public function edit(Local $local)
    {
        return Inertia::render('locals/Edit', [
            'locals' => [
                'id' => $local->id,
                'user_id' => $local->user_id,
                'name' => $local->name,
                'description' => $local->description,
                'location' => $local->location,
                'status' => $local->status
            ]
        ]);
    }
    public function update(Local $local)
    {
        $formFields = Request::validate([
            "name" => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'location' => ['required'],
        ]);

        if (Request::hasFile('image')) {
            $formFields['image'] = Request::file('image')->store('images', 'public');
        }
        $local->update($formFields);
        return redirect('/localNGOs/manage')->with('success', 'Updated successfully');
    }

    public function manage()
    {
        $admin = auth()->user()->role_id === 1;
        $user = auth()->user();
        if ($admin) {
            return Inertia::render('locals/Manage', [
                'localsaccepted' => Local::latest()->where('user_id', $user->id)->paginate(6),
            ]);
        } else {
            return Inertia::render('locals/Manage', [
                'localsaccepted' => Local::latest()->accepted()->paginate(6),
                'localspending' => Local::latest()->pending()->paginate(6),
            ]);
        }
    }
    public function toggleAccept($id)
    {
        Local::where('id', $id)
            ->update(['status' => 'accepted']);
        return back()->with('success', 'post updated');
    }
}
