<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class FrontendController extends Controller
{
    public function renderPortfolio()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('portfolio', [
            'projects' => $projects
        ]);
    }
}
