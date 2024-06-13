<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Wyświetla listę wszystkich usług
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Formularz do tworzenia nowej usługi (dostępny tylko dla zalogowanych użytkowników)
    public function create()
    {
        return view('services.create');
    }

    // Zapisuje nową usługę do bazy danych (dostępny tylko dla zalogowanych użytkowników)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);
        return redirect()->route('services.index');
    }

    // Formularz do edycji istniejącej usługi (dostępny tylko dla zalogowanych użytkowników)
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Aktualizuje istniejącą usługę w bazie danych (dostępny tylko dla zalogowanych użytkowników)
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);
        return redirect()->route('services.index');
    }

    // Usuwa istniejącą usługę z bazy danych (dostępny tylko dla zalogowanych użytkowników)
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
