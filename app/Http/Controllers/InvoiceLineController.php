<?php

namespace App\Http\Controllers;

use App\Models\InvoiceLine;
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
        $viewData['invoiceLine'] = InvoiceLine::with(['phone', 'invoice'])->findOrFail($id);

        return view('invoiceLine.show')->with('viewData', $viewData);
    }
}
