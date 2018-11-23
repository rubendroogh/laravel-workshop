<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class ProjectController extends Controller
{
    public function index(){
    	$projects = Project::all();
    	return view('projects', ['projects' => $projects]);
    }
    
    public function read($id){
    	$project = Project::findOrFail($id);
    	return view('project', ['project' => $project]);
    }

    public function create_project_form(){

    }

    public function create(){
        
    }

    public function update_project_form(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
