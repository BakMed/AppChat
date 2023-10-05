@extends('layouts.app')

@section('content')
    <h1>Groups</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Members</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->users->count() }}</td>
                    <td>
                        <a href="{{ route('groups.edit', $group->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('groups.create') }}">Create
