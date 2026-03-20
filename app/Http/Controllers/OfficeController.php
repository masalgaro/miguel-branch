<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfficeRequest;
use App\Models\Office;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OfficeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['offices'] = Office::all();

        return view('office.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $office = Office::findOrFail($id);
        $viewData['office'] = $office;

        return view('office.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('office.create')->with('viewData', $viewData);
    }

    public function save(StoreOfficeRequest $request): RedirectResponse
    {
        $validatedOfficeData = $request->validated();

        Office::create($validatedOfficeData);

        return redirect()->route('office.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        Office::destroy($id);

        return redirect()->route('office.index');
    }

    public function edit(int $id): View
    {
        $viewData = [];
        $office = Office::findOrFail($id);
        $viewData['office'] = $office;

        return view('office.edit')->with('viewData', $viewData);
    }

    public function update(StoreOfficeRequest $request, int $id): RedirectResponse
    {
        $office = Office::findOrFail($id);
        
        $office->update($request->validated());

        return redirect()->route('office.show', $office->getId());
    }
}
