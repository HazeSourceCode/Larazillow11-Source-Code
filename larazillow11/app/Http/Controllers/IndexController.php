<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index', [
            'listings' => Listing::all(),
        ]);
    }

    public function show()
    {
        return "Hello from the show method!";
    }
}
