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
        JobOpening::validate($request);

        $created_at = date("Y-m-d H:i:s");
        $jobOpening = new JobOpening();
        AdminJobOpeningsController::setCommonFields($jobOpening, $request);
        $jobOpening->setCreatedAt($created_at);
        $jobOpening->setUpdatedAt($created_at);

        $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
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

        AdminJobOpeningsController::setCommonFields($jobOpening, $request);
        $jobOpening->setUpdatedAt(date("Y-m-d H:i:s"));

        $jobOpening->save();

        return redirect()->route('admin.job_openings.index');
    }

    public function delete($id)
    {
        $jobOpening = JobOpening::findOrFail($id);
        $jobOpening->setDeletedAt(date("Y-m-d H:i:s"));

        $jobOpening->save();

        return back();
    }

    private function setCommonFields($jobOpening, $request)
    {
        $jobOpening->setCountry($request->input('country'));
        $jobOpening->setCity($request->input('city'));
        $jobOpening->setIndustry($request->input('industry'));
        $jobOpening->setLanguageRequired($request->input('language_required'));
        $jobOpening->setJobTitle($request->input('job_title'));
        $jobOpening->setJobDescription($request->input('job_description'));
        $jobOpening->setRequirements($request->input('requirements'));
        $jobOpening->setSalary($request->input('salary'));
        $jobOpening->setStartDate($request->input('start_date'));
    }
}