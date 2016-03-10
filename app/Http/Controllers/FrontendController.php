<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class FrontendController extends Controller
{
    public function renderHome()
    {
        $first_featured = Project::where('featured_pos', 1)->first();
        $second_featured = Project::where('featured_pos', 2)->first();
        $third_featured = Project::where('featured_pos', 3)->first();
        $fourth_featured = Project::where('featured_pos', 4)->first();
        $fifth_featured = Project::where('featured_pos', 5)->first();
        return view('home', [
            'first_featured' => $first_featured,
            'second_featured' => $second_featured,
            'third_featured' => $third_featured,
            'fourth_featured' => $fourth_featured,
            'fifth_featured' => $fifth_featured
        ]);
    }

    public function renderPortfolio()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('portfolio', [
            'projects' => $projects
        ]);
    }

    public function renderLoginWrap()
    {
        return view('login');
    }
}
