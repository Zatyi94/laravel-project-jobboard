@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["job_opening"]->getJobTitle() }}
                </h5>
                <p class="card-text"><b>Country:</b> {{ $viewData["job_opening"]->getCountry() }}</p>
                <p class="card-text"><b>City:</b> {{ $viewData["job_opening"]->getCity() }}</p>
                <p class="card-text"><b>Industry:</b> {{ $viewData["job_opening"]->getIndustry() }}</p>
                <p class="card-text"><b>Language required:</b> {{ $viewData["job_opening"]->getLanguageRequired() }}</p>
                <p class="card-text"><b>Job description:</b> {{ $viewData["job_opening"]->getJobDescription() }}</p>
                <p class="card-text"><b>Requirements:</b> {{ $viewData["job_opening"]->getRequirements() }}</p>
                <p class="card-text"><b>Salary:</b>{{ $viewData["job_opening"]->getSalary() }}</p>
                <p class="card-text"><b>Start date:</b> {{ $viewData["job_opening"]->getStartDate() }}</p>
                <button type="button" class="btn btn-primary">Apply</button>

            </div>
        </div>
    </div>
</div>
@endsection
