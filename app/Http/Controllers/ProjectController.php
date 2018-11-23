<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Project;

class ProjectController extends Controller
{
    public function index(){

    	return view('projects');
    }

    public function get_all_projects() {
        return Project::all();
    }
    
    public function read($id){
    	$project = Project::findOrFail($id);
    	return view('project', ['project' => $project]);
    }

    public function create_project_form(){

    }

    public function create(Request $request){
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => 1,
            'slug' => str_slug($request->title, '-'),
        ]);

        return $project->id;
    }


    public function update_project_form(){
        
    }

    public function update(){
        
    }

    public function delete(Request $request){
        Project::find($request->id)->delete();
    }
}
