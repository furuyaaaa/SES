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
            'experience_years' => ['required', 'integer', 'min:0'],
            'self_pr' => ['nullable'],
        ]);

        Engineer::create($validated);

        return redirect()->route('engineers.index')
            ->with('success', 'エンジニアを登録しました。');
    }

    public function show(Engineer $engineer)
    {
        return view('engineers.show', compact('engineer'));
    }

    public function edit(Engineer $engineer)
    {
        return view('engineers.edit', compact('engineer'));
    }

    public function update(Request $request, Engineer $engineer)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:engineers,email,' . $engineer->id],
            'skill' => ['required'],
            'experience_years' => ['required', 'integer', 'min:0'],
            'self_pr' => ['nullable'],
        ]);

        $engineer->update($validated);

        return redirect()->route('engineers.show', $engineer)
            ->with('success', 'エンジニア情報を更新しました。');
    }

    public function destroy(Engineer $engineer)
    {
        $engineer->delete();

        return redirect()->route('engineers.index')
            ->with('success', 'エンジニアを削除しました。');
    }
}
