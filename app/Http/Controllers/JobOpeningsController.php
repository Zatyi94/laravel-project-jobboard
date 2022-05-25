<?php

namespace App\Http\Controllers;

use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningsController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Job Openings";
        $viewData["subtitle"] = "List of job openings";
        $viewData["job_openings"] = JobOpening::all();

        return view('job_openings.index')->with("viewData", $viewData);
    }

    public function detail($id)
    {
        $viewData = [];
        $job_opening = JobOpening::findOrFail($id);
        $viewData["title"] = $job_opening["name"] . " - Job Openings";
        $viewData["subtitle"] = $job_opening->getJobTitle() . " - Job Opening Detail";
        $viewData["job_opening"] = $job_opening;

        return view('job_openings.detail')->with("viewData", $viewData);
    }
}