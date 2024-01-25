<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\SkillModele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create() 
    {
        $skills = SkillModele::all();
        return view('projects.create', compact('skills'));
    }

    public function store(StoreProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');

            Project::create([
                'skill_modeles_id' => $request->skill_modeles_id,
                'name' => $request->name,
                'project_url' => $request-> project_url,
                'image' => $image
            ]);
    
            return to_route('projects.index')->with('success', 'Project successful gemaakt.');
        }

        return back();
    }

    public function edit(Project $project)
    {
        $skills = SkillModele::all();
        return view('projects.edit', compact('project', 'skills'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $image = $project->image;

        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }

        $project->update([
            'skill_modeles_id' => $request->skill_modeles_id,
            'name' => $request->name,
            'project_url' => $request->project_url,
            'image' => $image
        ]);
        return to_route('projects.index')->with('success', 'Project successful geupdate');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        return back()->with('danger', 'Project successful verwijdert');
    }
}
