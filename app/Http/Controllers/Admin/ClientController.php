<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('name')->get();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable|url',
            // 'is_featured' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('clients', 'public');
            $validatedData['logo'] = $logoPath;
        }

        Client::create($validatedData);

        return redirect()->route('admin.clients.index')->with('success', 'Client added successfully.');
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable|url',
            // 'is_featured' => 'required'

        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('clients', 'public');
            $validatedData['logo'] = $logoPath;
        }

        $client->update($validatedData);

        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully.');
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Client deleted successfully.');
    }

    public function toggle(Client $client)
    {
        // dd($client);
        if ($client->is_featured) {
            $client->update([
                'is_featured' => 0
            ]);
            return redirect()->route('admin.clients.index')->with(['success' => 'client  dideactivate!']);
        }

        if (!$client->is_featured) {
            $client->update([
                'is_featured' => 1
            ]);
            return redirect()->route('admin.clients.index')->with(['success' => 'client Activate!']);
        }
    }
}
