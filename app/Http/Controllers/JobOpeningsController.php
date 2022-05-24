<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobOpeningsController extends Controller
{
    public static $job_openings = [
        ["id" => "1", "name" => "TV", "description" => "Best TV", "image" => "game.png", "price" => "1000"],
        ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "image" => "safe.png", "price" => "999"],
        ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "image" => "submarine.png", "price" => "30"],
        ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "image" => "game.png", "price" => "100"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Job Openings";
        $viewData["subtitle"] = "List of job openings";
        $viewData["job_openings"] = JobOpeningsController::$job_openings;

        return view('job_openings.index')->with("viewData", $viewData);
    }

    public function detail($id)
    {
        $viewData = [];
        $job_opening = JobOpeningsController::$job_openings[$id - 1];
        $viewData["title"] = $job_opening["name"] . " - Job Openings";
        $viewData["subtitle"] = $job_opening["name"] . " - Job Opening Detail";
        $viewData["job_opening"] = $job_opening;

        return view('job_openings.detail')->with("viewData", $viewData);
    }
}