<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class FavoriteLocalController extends Controller
{
    public function addremoveFav($id)
    {
        $check = Favorite::where('user_id', Auth::id())->where('local_id', $id)->first();
        if ($check) {
            $check->delete();
        } else {
            Favorite::create([
                'user_id' => auth()->id(),
                'local_id' => $id

            ]);
        }
        return back()->with('success', 'Post Changed favorites!');
    }
}
