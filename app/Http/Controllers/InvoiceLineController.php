<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceLineRequest;
use App\Models\InvoiceLine;
use App\Models\Phone;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InvoiceLineController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['invoiceLines'] = InvoiceLine::with(['phone'])->get();

        return view('invoiceLine.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $invoiceLine = InvoiceLine::with(['phone'])->findOrFail($id);
        $viewData['invoiceLine'] = $invoiceLine;

        return view('invoiceLine.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['phones'] = Phone::all();

        return view('invoiceLine.create')->with('viewData', $viewData);
    }

    public function save(StoreInvoiceLineRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        InvoiceLine::create($validatedData);

        return redirect()->route('invoiceLine.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        InvoiceLine::destroy($id);

        return redirect()->route('invoiceLine.index');
    }

    public function edit(int $id): View
    {
        $viewData = [];
        $invoiceLine = InvoiceLine::findOrFail($id);

        $viewData['invoiceLine'] = $invoiceLine;
        $viewData['phones'] = Phone::all();

        return view('invoiceLine.edit')->with('viewData', $viewData);
    }

    public function update(StoreInvoiceLineRequest $request, int $id): RedirectResponse
    {
        $invoiceLine = InvoiceLine::findOrFail($id);

        $invoiceLine->update($request->validated());

        return redirect()->route('invoiceLine.show', $invoiceLine->getId());
    }
}
