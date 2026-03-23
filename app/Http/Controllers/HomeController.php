<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Phone;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $seed = (int) date('Ymd');
        mt_srand($seed);

        $phoneIds = Phone::pluck('id')->toArray();
        shuffle($phoneIds);
        $recommend = array_slice($phoneIds, 0, 3);

        $viewData['recommendations'] = Phone::with(['office'])->whereIn('id', $recommend)->get();

        return view('home.index')->with('viewData', $viewData);
    }
}
