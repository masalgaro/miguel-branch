<?php

namespace App\Utils;

use App\Models\Phone;
use Illuminate\Http\Request;

class ConstructCartProductData
{
    public function ConstructCartProductData(Request $request): array
    {
        $cartProductData = $request->session()->get('cart_product_data', []);
        $cartIds = array_keys($cartProductData);

        $viewData = [];
        $cartProducts = Phone::whereIn('id', $cartIds)->get();
        $viewData['cartProducts'] = $cartProducts;
        $viewData['cartProductData'] = $cartProductData;

        $total = 0;
        foreach ($cartProducts as $phone) {
            $quantity = $cartProductData[$phone->getId()] ?? 0;
            $total += $phone->getPrice() * $quantity;
        }
        $viewData['total'] = $total;

        $viewData['savingsAccounts'] = auth()->user()->getSavingsAccounts();

        return $viewData;
    }
}
