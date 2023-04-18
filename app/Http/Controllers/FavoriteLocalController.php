<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class FavoriteLocalController extends Controller
{
    public function addToFavorites(Local $local)
    {
        auth()->user()->favorites->attach($local);

        return back()->with('success', 'Post added to favorites!');
    }
}
