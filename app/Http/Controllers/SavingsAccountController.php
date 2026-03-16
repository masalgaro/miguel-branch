<?php

namespace App\Http\Controllers;

use App\Models\SavingsAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SavingsAccountController extends Controller
{
    public function create(): View
    {
        return view('savingsAccount.create');
    }

    public function save(Request $request): RedirectResponse
    {
        $account = new SavingsAccount;

        $account->setType($request->input('type'));
        $account->setNumber($request->input('number'));
        $account->setExpirationDate($request->input('expirationDate'));
        $account->setBalance($request->input('balance'));
        $account->setUserId($request->input('userId'));
        
        $account->save();

        return redirect()->route('savingsAccount.list')->with('success', 'Item created successfully');
    }

    public function list(): View
    {
        $viewData = [];

        $viewData['accounts'] = SavingsAccount::all();

        return view('savingsAccount.list')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];

        $viewData['account'] = SavingsAccount::findOrFail($id);

        return view('savingsAccount.show')->with('viewData', $viewData);
    }

    public function delete(int $id): RedirectResponse
    {
        SavingsAccount::destroy($id);

        return redirect()->route('savingsAccount.list');
    }
}
