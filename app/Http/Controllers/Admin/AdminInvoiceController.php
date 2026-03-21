<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Office;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminInvoiceController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['invoices'] = Invoice::with(['user', 'office'])->get();

        return view('admin.home.index')->with('viewData', $viewData);
    }


    public function show(int $id): View
    {
        $viewData = [];
        $invoice = Invoice::with(['user', 'office', 'invoiceLines'])->findOrFail($id);

        $viewData['invoice'] = $invoice;

        return view('admin.invoice.show')->with('viewData', $viewData);
    }


    public function create(): View
    {
        $viewData = [];

        $viewData['users'] = User::all();
        $viewData['offices'] = Office::all();

        return view('admin.invoice.create')->with('viewData', $viewData);
    }


    public function save(StoreInvoiceRequest $request): RedirectResponse
    {
        $validatedInvoiceData = $request->validated();

        Invoice::create($validatedInvoiceData);

        return redirect()->route('admin.invoice.index');
    }


    public function edit(int $id): View
    {
        $viewData = [];

        $invoice = Invoice::with(['user', 'office'])->findOrFail($id);

        $viewData['invoice'] = $invoice;
        $viewData['users'] = User::all();
        $viewData['offices'] = Office::all();

        return view('admin.invoice.edit')->with('viewData', $viewData);
    }


    public function update(StoreInvoiceRequest $request, int $id): RedirectResponse
    {
        $invoice = Invoice::with(['user', 'office'])->findOrFail($id);
        $validatedInvoiceData = $request->validated();

        $invoice->update($validatedInvoiceData);

        return redirect()->route('admin.invoice.show', $invoice->getId());
    }


    public function destroy(int $id): RedirectResponse
    {
        Invoice::destroy($id);

        return redirect()->route('admin.invoice.index');
    }
}