<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->query('search');
        $viewData = [];

        $viewData['phones'] = Phone::with(['office'])->get();
        $viewData['search'] = $search;

        return view('phone.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];

        $viewData['phone'] = Phone::with(['office'])->findOrFail($id);

        return view('phone.show')->with('viewData', $viewData);
    }
}
