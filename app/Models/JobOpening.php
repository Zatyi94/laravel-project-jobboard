<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOpening extends Model
{
    use SoftDeletes;


    public static function validate($request)
    {
        $request->validate([
            "country" => "required",
            "city" => "required",
            "industry" => "required",
            "language_required" => "required",
            "job_title" => "required",
            "job_description" => "required",
            "requirements" => "required",
            "salary" => "required",
            "start_date" => "required",
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getCountry()
    {
        return $this->attributes['country'];
    }

    public function setCountry($country)
    {
        $this->attributes['country'] = $country;
    }

    public function getCity()
    {
        return $this->attributes['city'];
    }

    public function setCity($city)
    {
        $this->attributes['city'] = $city;
    }

    public function getIndustry()
    {
        return $this->attributes['industry'];
    }

    public function setIndustry($industry)
    {
        $this->attributes['industry'] = $industry;
    }

    public function getLanguageRequired()
    {
        return $this->attributes['language_required'];
    }

    public function setLanguageRequired($language_required)
    {
        $this->attributes['language_required'] = $language_required;
    }


    public function getJobTitle()
    {
        return $this->attributes['job_title'];
    }

    public function setJobTitle($job_title)
    {
        $this->attributes['job_title'] = $job_title;
    }

    public function getJobDescription()
    {
        return $this->attributes['job_description'];
    }

    public function setJobDescription($job_description)
    {
        $this->attributes['job_description'] = $job_description;
    }

    public function getRequirements()
    {
        return $this->attributes['requirements'];
    }

    public function setRequirements($requirements)
    {
        $this->attributes['requirements'] = $requirements;
    }

    public function getSalary()
    {
        return $this->attributes['salary'];
    }

    public function setSalary($salary)
    {
        $this->attributes['salary'] = $salary;
    }

    public function getStartDate()
    {
        return $this->attributes['start_date'];
    }

    public function setStartDate($start_date)
    {
        $this->attributes['start_date'] = $start_date;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }

    public function getDeletedAt()
    {
        return $this->attributes['deleted_at'];
    }

    public function setDeletedAt($deleted_at)
    {
        $this->attributes['deleted_at'] = $deleted_at;
    }
}