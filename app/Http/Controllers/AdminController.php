<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
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

    public function changeFeatured(Request $request)
    {
        $input = Input::all();
        $project_id = $input['project_id'];
        $featured_pos = $input['featured_pos'];
        $current_project = Project::where('featured_pos', $featured_pos);
        $new_project = Project::findOrFail($project_id);
        if ($new_project->featured_pos !== 0) {
            $current_project->update(['featured_pos' => $new_project->featured_pos]);
        }
        $new_project->update($input);
        $new_project->save();
        return redirect('/admin');
    }
}
