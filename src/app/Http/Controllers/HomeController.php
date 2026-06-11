<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'profile' => Profile::first(),
            'projects' => Project::latest()->get(),
            'technologies' => Technology::all(),
            'educations' => Education::latest()->get(),
            'experiences' => Experience::latest()->get(),
            'certifications' => Certification::latest()->get(),
        ]);
    }
}