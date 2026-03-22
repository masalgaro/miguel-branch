<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
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
        $viewData['invoice'] = Invoice::with(['user', 'office', 'invoiceLines'])->findOrFail($id);

        return view('invoice.show')->with('viewData', $viewData);
    }
}
