<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('category.food-beverage');
    }

    public function beautyHealth() {
        return view('category.beauty-health');
    }
}
