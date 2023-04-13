<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Local;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalController extends Controller
{
    public function index()
    {
        return Inertia::render('admin/locals/Index', [
            'locals' => Local::latest()->paginate(6)
        ]);
    }
}
