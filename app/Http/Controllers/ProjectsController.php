<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return $projects;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        if (Project::first()) {
            $project_id = Project::first()->id;
            ++$project_id;
        } else {
            $project_id = 1;
        }
        $project->project_name = $request->project_name;
        $project->project_desc = $request->project_desc;
        $project->project_catagory = $request->project_catagory;
        $project->project_info = $request->project_info;
        $project->project_slug = rtrim(preg_replace('/[^a-z0-9]+/i', '-', strtolower(strip_tags($request->project_name))), "-");
        if ($request->light_img == "on") {
            $project->light_img = true;
        }
        if ($request->hasFile('cover_img')) {
            $cover_img = $request->file('cover_img');
            $file_ext = $cover_img->guessExtension();
            $fileName = $project_id . "-cover." . $file_ext;
            $cover_img->move('upload', $fileName);
        }
        if ($request->hasFile('all_img')) {
            $files = $request->file('all_img');
            $file_count = 0;
            foreach ($files as $ind_file) {
                $file_count++;
                $file_ext = $ind_file->guessExtension();
                $fileName = $project_id . "-" . $file_count . "." . $file_ext;
                $ind_file->move('upload', $fileName);
            }
        }

        $project->photo_count = $file_count;
        $project->save();

        return redirect('/portfolio/'.$project->project_slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
