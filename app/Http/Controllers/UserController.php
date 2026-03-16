<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        return view('user.create');
    }

    public function save(Request $request): RedirectResponse
    {
        $user = new User();

        $user->setNationalId($request->input('nationalId'));
        $user->setFirstName($request->input('firstName'));
        $user->setLastName($request->input('lastName'));
        $user->setRole($request->input('role'));
        $user->setPhoneNumber($request->input('phoneNumber'));
        $user->setBirthday($request->input('birthday'));
        $user->setAddress($request->input('address'));

        $user->save();

        return redirect()->route('user.list')
            ->with('success', 'User created successfully');
    }

    public function list(): View
    {
        $viewData = [];

        $viewData['users'] = User::all();

        return view('user.list')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];

        $viewData['user'] = User::findOrFail($id);

        return view('user.show')->with('viewData', $viewData);
    }

    public function delete(int $id): RedirectResponse
    {
        User::destroy($id);

        return redirect()->route('user.list');
    }
}