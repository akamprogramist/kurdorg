<?php

namespace App\Http\Controllers;

use App\Models\International;
use Inertia\Response;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InternationalController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('internationals/Index', [
            'internationals' => International::all()
        ]);
    }
}
