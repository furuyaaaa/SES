<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use Illuminate\Http\Request;

class EngineerController extends Controller
{
    public function index()
    {
        $engineers = Engineer::latest()->get();
        return view('engineers.index', compact('engineers'));
    }

    public function create()
    {
        return view('engineers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:engineers,email'],
            'skill' => ['required'],
            'experience_years' => ['required', 'integer'],
            'self_pr' => ['nullable'],
        ]);

        Engineer::create($validated);

        return redirect()->route('engineers.index');
    }
}
