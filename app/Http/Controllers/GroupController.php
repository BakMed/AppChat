<?php

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $users = User::all();
        return view('groups.create', compact('users'));
    }

    public function store(Request $request)
    {
        $group = Group::create([
            'name' => $request->input('name')
        ]);

        $group->users()->sync($request->input('users'));

        return redirect()->route('groups.index');
    }

    public function edit(Group $group)
    {
        $users = User::all();
        return view('groups.edit', compact('group', 'users'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update([
            'name' => $request->input('name')
        ]);

        $group->users()->sync($request->input('users'));

        return redirect()->route('groups.index');
    }
}
