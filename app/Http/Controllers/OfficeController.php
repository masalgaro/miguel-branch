<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\View\View;

class OfficeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['offices'] = Office::with(['phones', 'invoices'])->get();

        return view('office.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $viewData['office'] = Office::with(['phones', 'invoices'])->findOrFail($id);

        return view('office.show')->with('viewData', $viewData);
    }
}
