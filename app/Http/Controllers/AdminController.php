<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class AdminController extends Controller
{
    public function render()
    {
        $projects = Project::all();

        return view('admin.home', [
            'projects' => $projects
        ]);
    }
}
