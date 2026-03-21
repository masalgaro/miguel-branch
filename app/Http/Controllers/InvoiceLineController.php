<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceLineRequest;
use App\Models\InvoiceLine;
use App\Models\Phone;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InvoiceLineController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['invoiceLines'] = InvoiceLine::with(['phone', 'invoice'])->get();

        return view('invoiceLine.index')->with('viewData', $viewData);
    }


    public function show(int $id): View
    {
        $viewData = [];

        $invoiceLine = InvoiceLine::with(['phone', 'invoice'])->findOrFail($id);

        $viewData['invoiceLine'] = $invoiceLine;

        return view('invoiceLine.show')->with('viewData', $viewData);
    }


    public function create(): View
    {
        $viewData = [];

        $viewData['phones'] = Phone::all();
        $viewData['invoices'] = Invoice::all(); 

        return view('invoiceLine.create')->with('viewData', $viewData);
    }


    public function save(StoreInvoiceLineRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        InvoiceLine::create($validatedData);

        return redirect()->route('invoiceLine.index');
    }
}