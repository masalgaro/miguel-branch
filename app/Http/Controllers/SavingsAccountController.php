<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavingsAccountRequest;
use App\Models\SavingsAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SavingsAccountController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['savingsAccounts'] = SavingsAccount::all();

        return view('savingsAccount.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $savingsAccount = SavingsAccount::findOrFail($id);
        $viewData['savingsAccount'] = $savingsAccount;

        return view('savingsAccount.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('savingsAccount.create')->with('viewData', $viewData);
    }

    public function save(StoreSavingsAccountRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        SavingsAccount::create($validatedData);
        session()->flash('success', __('messages.savingsAccountCreatedSuccessfully'));

        return redirect()->route('savingsAccount.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        SavingsAccount::destroy($id);
        session()->flash('success', __('messages.savingsAccountDeletedSuccessfully'));

        return redirect()->route('savingsAccount.index');
    }

    public function edit(int $id): view
    {
        $viewData = [];
        $savingsAccount = SavingsAccount::findOrFail($id);
        $viewData['savingsAccount'] = $savingsAccount;

        return view('savingsAccount.edit')->with('viewData' , $viewData);
    }

    public function update(StoreSavingsAccountRequest $request , int $id): RedirectResponse
    {
        $savingsAccount = SavingsAccount::findOrFail($id);
        $savingsAccount->update($request->validated());

        return redirect()->route('savingsAccount.index');
    }
}
