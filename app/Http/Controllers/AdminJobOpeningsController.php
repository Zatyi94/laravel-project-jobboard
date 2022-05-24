<?php

namespace App\Http\Controllers;

use App\Models\JobOpening;
use Illuminate\Http\Request;

class AdminJobOpeningsController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Job Openings - Job Board";
        $viewData["job_openings"] = JobOpening::all();

        return view('admin.job_openings.index')->with("viewData", $viewData);
    }

    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Job Openings - Create New";

        return view('admin.job_openings.create')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        // var_dump('Form: ', $request->input('country'));

        $request->validate([
            "country" => "required|max:255",
            "job_description" => "required",
        ]);

        $jobOpening = new JobOpening();
        $jobOpening->setCountry($request->input('country'));
        // $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
    }
}