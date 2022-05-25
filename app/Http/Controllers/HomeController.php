<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Job Board";

        return view('home.index')->with("viewData", $viewData);
    }


    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Job Board";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Zatykó Nóra";

        return view('home.about')->with("viewData", $viewData);
    }
}