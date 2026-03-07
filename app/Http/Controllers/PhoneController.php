<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use App\Models\Phone;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PhoneController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['phones'] = Phone::all();

        return view('phone.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $phone = Phone::findOrFail($id);
        $viewData['phone'] = $phone;

        return view('phone.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('phone.create')->with('viewData', $viewData);
    }

    public function save(StorePhoneRequest $request): RedirectResponse
    {
        Phone::create($request->only([
            'name',
            'memory',
            'ram',
            'battery',
            'brand',
            'quantity',
        ]));

        return redirect()->route('phone.index');
    }
}
