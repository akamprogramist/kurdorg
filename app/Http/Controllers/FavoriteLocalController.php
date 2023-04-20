<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;


class FavoriteLocalController extends Controller
{
    public function addFavorite(Request $request)
    {
        Favorite::create([
            'user_id' => auth()->id(),
            'local_id' => $request->local_id
        ]);
        return back()->with('success', 'Post added to favorites!');
    }
    public function removeFavorite(Favorite $favorite)
    {
        $favorite->delete();
        return back()->with('success', 'deleted successfully');
    }
}
