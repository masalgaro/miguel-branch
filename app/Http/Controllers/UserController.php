<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['users'] = User::all();

        return view('user.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData['user'] = $user;

        return view('user.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('user.create')->with('viewData', $viewData);
    }

    public function save(StoreUserRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        User::create($validatedData);
        session()->flash('success', __('messages.userCreatedSuccessfully'));

        return redirect()->route('users.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        User::destroy($id);
        session()->flash('success', __('messages.userDeletedSuccessfully'));

        return redirect()->route('users.index');
    }
}
