<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\View\View;

class PhoneController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $viewData['phones'] = Phone::with(['office'])->get();

        return view('phone.index')->with('viewData', $viewData);
    }

    public function show(int $id): View
    {
        $viewData = [];

        $phone = Phone::with(['office'])->findOrFail($id);

        $viewData['phone'] = $phone;

        return view('phone.show')->with('viewData', $viewData);
    }
}
