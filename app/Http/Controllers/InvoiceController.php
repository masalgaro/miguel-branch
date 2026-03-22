<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Models\Invoice;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['invoices'] = Invoice::with(['user', 'office'])->get();

        return view('invoice.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $invoice = Invoice::with(['user', 'office', 'invoiceLines'])->findOrFail($id);

        $viewData['invoice'] = $invoice;

        return view('invoice.show')->with('viewData', $viewData);
    }
}
