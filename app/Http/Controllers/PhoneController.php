<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use App\Interfaces\ImageStorage;
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

    public function edit(string $id): View
    {
        $viewData = [];
        $phone = Phone::findOrFail($id);
        $viewData['phone'] = $phone;

        return view('phone.edit')->with('viewData', $viewData);
    }

    public function update(StorePhoneRequest $request, int $id): RedirectResponse
    {
        $phone = Phone::findOrFail($id);
        $phone->update($request->validated());

        return redirect()->route('phone.show', $phone->getId());
    }

    public function save(StorePhoneRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $storeInterface = app(ImageStorage::class);

        $data['image'] = $storeInterface->store($request);

        Phone::create($data);

        return redirect()->route('phone.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        Phone::destroy($id);
        return redirect()->route('phone.index'); 
    }

    
    

}
