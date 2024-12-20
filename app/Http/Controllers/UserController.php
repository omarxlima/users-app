<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\RolesUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
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
        $user->load('profile', 'interests');
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('users.index')->with('status', 'Usuário editado com sucesso!');

    }

    public function updateProfile(ProfileUpdateRequest $request, User $user)
    {
        $user->profile()->updateOrCreate([
            'user_id'=> $user->id],
            $request->validated());

        return to_route('users.index')->with('status', 'Perfil editado com sucesso!');

    }

    public function updateInterest(InterestUpdateRequest $request, User $user)
    {
        $user->interests()->delete();
        if (!empty($request->validated()['interests'])) {
            $user->interests()->createMany($request->validated()['interests']);
        }
        return to_route('users.index')->with('status', 'Perfil editado com sucesso!');

    }

    public function updateRoles(RolesUpdateRequest $request, User $user)
    {
        // $user->roles()->attach($request->validated()['roles']);
        $user->roles()->sync($request->validated()['roles']);

        return to_route('users.index')->with('status', 'Cargo editado com sucesso!');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuário excluído com sucesso!');
    }
}
