<?php

namespace App\Http\Controllers;



use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
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

    public function show(string $id): View 
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
        $data = $request->validated();

        Office::create($data);

        return redirect()->route('office.index');
    }

    public function destroy(string $id): RedirectResponse
    {
        Office::destroy($id);

        return redirect()->route('office.index'); 
    }

    public function edit(string $id): View
    {
        $viewData = [];
        $office = Office::findOrFail($id);
        $viewData['office'] = $office;

        return view('office.edit')->with('viewData', $viewData);
    }

    public function update(StoreOfficeRequest $request, string $id): RedirectResponse
    {
        $office = Office::findOrFail($id);
        $office->update($request->validated());

        return redirect()->route('office.show', $office->getId());
    }




    
    

}
