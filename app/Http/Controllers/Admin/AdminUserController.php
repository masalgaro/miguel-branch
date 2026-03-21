<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $viewData['users'] = User::with(['invoices', 'savingsAccounts'])->get();

        return view('admin.user.index')->with('viewData', $viewData);
    }


    public function show(int $id): View
    {
        $viewData = [];
        $user = User::with(['invoices', 'savingsAccounts'])->findOrFail($id);

        $viewData['user'] = $user;

        return view('admin.user.show')->with('viewData', $viewData);
    }


    public function create(): View
    {
        $viewData = [];

        return view('admin.user.create')->with('viewData', $viewData);
    }


    public function save(StoreUserRequest $request): RedirectResponse
    {
        $validatedUserData = $request->validated();

        User::create($validatedUserData);

        session()->flash('success', __('messages.userCreatedSuccessfully'));

        return redirect()->route('admin.user.index');
    }


    public function edit(int $id): View
    {
        $viewData = [];

        $user = User::findOrFail($id);

        $viewData['user'] = $user;

        return view('admin.user.edit')->with('viewData', $viewData);
    }


    public function update(StoreUserRequest $request, int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $validatedUserData = $request->validated();

        $user->update($validatedUserData);

        session()->flash('success', __('messages.userUpdatedSuccessfully'));

        return redirect()->route('admin.user.index');
    }


    public function destroy(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->delete();

        session()->flash('success', __('messages.userDeletedSuccessfully'));

        return redirect()->route('admin.user.index');
    }
}