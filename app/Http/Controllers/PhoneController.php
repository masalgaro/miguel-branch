<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class PhoneController extends Controller
{
    

    public function index(): View
    {
        $viewData = [];
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    // public function show(string $id) : View
    // {
    //     $viewData = [];
    //     $product = ProductController::$products[$id-1];
    //     $viewData["title"] = $product["name"]." - Online Store";
    //     $viewData["subtitle"] =  $product["name"]." - Product information";
    //     $viewData["product"] = $product;
    //     return view('product.show')->with("viewData", $viewData);
    // }
}