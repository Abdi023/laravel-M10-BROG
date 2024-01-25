<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\SkillModele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index() {
        $skills = SkillModele::all();

        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }


    public function store(StoreSkillRequest $request)  
    {
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');

            SkillModele::create([
                'name' => $request->name,
                'image' => $image
            ]);

            return to_route('skills.index')->with('success', 'Skill successful gemaakt');
        }

        return back();
    }
    
    public function edit(SkillModele $skill) 
    {
        return view('skills.edit', compact('skill'));    
    }

    public function update(Request $request, SkillModele $skill)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['nullable', 'image']
        ]);

        $image = $skill->image;

        if ($request->hasFile('image')) {
            // Delete the existing image if it exists
            if ($image) {
                Storage::delete($image);
            }

            // Store the new image
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);

        return view('skills.edit', compact('skill'))->with('success', 'Skill successful geupdate');    
    }

    public function destroy(SkillModele $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();
        
        return back()->with('danger', 'Skill successful verwijdert');
    }
}
