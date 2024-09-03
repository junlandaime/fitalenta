<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('order')->get();
        return view('admin.team-members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'bio' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team-members', 'public');
            $validatedData['image'] = $imagePath;
        }

        TeamMember::create($validatedData);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member added successfully.');
    }

    public function show(TeamMember $teamMember)
    {
        return view('admin.team-members.show', compact('teamMember'));
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'bio' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team-members', 'public');
            $validatedData['image'] = $imagePath;
        }

        $teamMember->update($validatedData);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('admin.team-members.index')->with('success', 'Team member deleted successfully.');
    }

    public function toggle(TeamMember $member)
    {
        // dd($slide);
        if ($member->is_active) {
            $member->update([
                'is_active' => 0
            ]);
            return redirect()->route('admin.team-members.index')->with(['success' => 'member  dideactivate!']);
        }

        if (!$member->is_active) {
            $member->update([
                'is_active' => 1
            ]);
            return redirect()->route('admin.team-members.index')->with(['success' => 'teamMember Activate!']);
        }
    }
}
