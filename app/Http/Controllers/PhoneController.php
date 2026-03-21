<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use App\Interfaces\ImageStorage;
use App\Models\Office;
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

    public function show(int $id): View
    {
        $viewData = [];
        $phone = Phone::findOrFail($id);

        $viewData['phone'] = $phone;

        return view('phone.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['offices'] = Office::all();

        return view('phone.create')->with('viewData', $viewData);
    }

    public function edit(int $id): View
    {
        $viewData = [];
        $phone = Phone::findOrFail($id);

        $viewData['phone'] = $phone;
        $viewData['offices'] = Office::all();

        return view('phone.edit')->with('viewData', $viewData);
    }

    public function update(StorePhoneRequest $request, int $id): RedirectResponse
    {
        $phone = Phone::findOrFail($id);

        $validatedPhoneData = $request->validated();

        $storeInterface = app(ImageStorage::class);

        if ($request->hasFile('image')) {
            $validatedPhoneData['image'] = $storeInterface->store($request);
        }

        $phone->update($validatedPhoneData);

        return redirect()->route('phone.show', $phone->getId());
    }

    public function save(StorePhoneRequest $request): RedirectResponse
    {
        $validatedPhoneData = $request->validated();

        $storeInterface = app(ImageStorage::class);

        if ($request->hasFile('image')) {
            $validatedPhoneData['image'] = $storeInterface->store($request);
        }

        Phone::create($validatedPhoneData);

        return redirect()->route('phone.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        Phone::destroy($id);

        return redirect()->route('phone.index');
    }
}
