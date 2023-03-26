<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Inertia\Response;
use Inertia\Inertia;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('locals/Index', [
            'locals' => Local::all()
        ]);
    }
}
