<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view("index");
    }
    function product() {
        return view("productDetail");
    }
}
