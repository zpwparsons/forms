<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VueFormController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('VueForm');
    }

    public function store(Request $request)
    {
        //
    }
}
