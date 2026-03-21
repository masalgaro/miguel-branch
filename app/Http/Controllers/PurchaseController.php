<?php

namespace App\Http\Controllers;

use App\Utils\ManagePurchase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(Request $request): RedirectResponse
    {
        $managePurchaseUtil = new ManagePurchase;

        return $managePurchaseUtil->managePurchase($request);
    }
}
