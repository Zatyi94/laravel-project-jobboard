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
        //  Finish validation in model and set

        JobOpening::validate($request);

        $jobOpening = new JobOpening();
        $jobOpening->setCountry($request->input('country'));
        // $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
    }

    public function delete($id)
    {
        JobOpening::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Job Opening - Job Board";
        $viewData["job_opening"] = JobOpening::findOrFail($id);
        return view('admin.job_openings.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        JobOpening::validate($request);

        $jobOpening = JobOpening::findOrFail($id);
        $jobOpening->setCountry($request->input('country'));

        // $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
    }
}