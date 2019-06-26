<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getIndex()
    {
        return view("page.main-page");
    }

    public function getProductType()
    {
        return view("page.product-type");
    }
}
