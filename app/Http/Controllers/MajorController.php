<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
            'description' => 'nullable|string',
        ]);

        Majors::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
        ]);

        return redirect()->route('majors.index')->with('success', 'Major added!');
    }

    public function show(Majors $major)
    {
        return view('majors.show', compact('major'));
    }

    public function edit(Majors $major)
    {
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, Majors $major)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
            'description' => 'nullable|string',
        ]);

        $major->update([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
        ]);

        return redirect()->route('majors.index')->with('success', 'Major updated!');
    }

    public function destroy(Majors $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Major deleted!');
    }
}
