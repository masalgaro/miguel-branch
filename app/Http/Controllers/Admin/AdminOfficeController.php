<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfficeRequest;
use App\Models\Office;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminOfficeController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $viewData['offices'] = Office::with(['phones', 'invoices'])->get();

        return view('admin.office.index')->with('viewData', $viewData);
    }


    public function show(int $id): View
    {
        $viewData = [];
        $office = Office::with(['phones', 'invoices'])->findOrFail($id);

        $viewData['office'] = $office;

        return view('admin.office.show')->with('viewData', $viewData);
    }


    public function create(): View
    {
        $viewData = [];

        return view('admin.office.create')->with('viewData', $viewData);
    }


    public function save(StoreOfficeRequest $request): RedirectResponse
    {
        $validatedOfficeData = $request->validated();

        Office::create($validatedOfficeData);

        return redirect()->route('admin.office.index');
    }


    public function edit(int $id): View
    {
        $viewData = [];

        $office = Office::findOrFail($id);

        $viewData['office'] = $office;

        return view('admin.office.edit')->with('viewData', $viewData);
    }


    public function update(StoreOfficeRequest $request, int $id): RedirectResponse
    {
        $office = Office::findOrFail($id);

        $validatedOfficeData = $request->validated();

        $office->update($validatedOfficeData);

        return redirect()->route('admin.office.show', $office->getId());
    }


    public function destroy(int $id): RedirectResponse
    {
        $office = Office::findOrFail($id);

        $office->delete();

        return redirect()->route('admin.office.index');
    }
}