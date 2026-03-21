<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(Request $request): View
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

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(int $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data', []);

        if (! isset($cartProductData[$id])) { // If the product has not been added
            $cartProductData[$id] = 1;
        }

        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function update(int $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data', []);
        $quantity = $request->input('quantity');

        $cartProductData[$id] = $quantity;

        $request->session()->put('cart_product_data', $cartProductData);

        return redirect()->route('cart.index');
    }

    public function remove(int $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data', []);
        unset($cartProductData[$id]);
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function removeAll(Request $request): RedirectResponse
    {
        $request->session()->forget('cart_product_data');

        return back();
    }

    public function show(Request $request): View
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

        return view('cart.show')->with('viewData', $viewData);
    }
}
