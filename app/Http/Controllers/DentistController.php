<?php


namespace App\Http\Controllers;

use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    public function index()
    {
        $dentists = Dentist::all();
        return view('dentists.index', compact('dentists'));
    }

    public function create()
    {
        return view('dentists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
        ]);

        Dentist::create($request->all());
        return redirect()->route('dentists.index');
    }

    public function edit(Dentist $dentist)
    {
        return view('dentists.edit', compact('dentist'));
    }

    public function update(Request $request, Dentist $dentist)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
        ]);

        $dentist->update($request->all());
        return redirect()->route('dentists.index');
    }

    public function destroy(Dentist $dentist)
    {
        $dentist->delete();
        return redirect()->route('dentists.index');
    }
}
