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

        $viewData['offices'] = Office::with(['phones', 'invoices'])->get();

        return view('office.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];
        $office = Office::with(['phones', 'invoices'])->findOrFail($id);

        $viewData['office'] = $office;

        return view('office.show')->with('viewData', $viewData);
    }
}