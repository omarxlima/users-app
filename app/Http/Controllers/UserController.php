<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::orderByDesc('created_at')->paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserStoreRequest $request) 
    {
        User::create($request->validated());
        return to_route('users.index')->with('status', 'Usuário criado com sucesso!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('users.index')->with('status', 'Usuário editado com sucesso!');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuário excluído com sucesso!');
    }
}
