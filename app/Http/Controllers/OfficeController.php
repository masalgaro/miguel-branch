<?php

namespace App\Http\Controllers;



use App\Models\Office;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OfficeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['offices'] = Office::all();

        return view('office.index')->with('viewData', $viewData);
    }

    public function show(string $id): View 
    {
        $viewData = []; 
        $office = Office::findOrFail($id); 
        $viewData['office'] = $office; 
        
        return view('office.show')->with('viewData', $viewData); 

    }
    


    
    

}
