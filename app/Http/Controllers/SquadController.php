<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Squad;

class SquadController extends Controller
{
    public function show ($id)
    {
        $squad = Squad::find($id);

        return view ('squads.show', ['squad' => $squad]);
    }

    public function index ()
    {
        $squads = Squad::latest()->get();

        return view ('squads.index', ['squads' => $squads]);
    }

    public function create ()
    {
        return view('squads.create');
    }

    public function store ()
    {
        $squad = new Squad($this->validateArticle());// This will save the new article to correct user_id owner. // auth()->id()

        $squad->name = request('name');
        $squad->age = request('age');
        $squad->nationality = request('nationality');
        $squad->position = request('position');
        $squad->height = request('height');
        $squad->jersey = request('jersey');
        $squad->goals = request('goals');
        $squad->assists = request('assists');
        $squad->social = request('social');
        $squad->save();




        return redirect ('/squads');
    }

    public function edit ($id)
    {
        $squad = Squad::find($id);
        return view ('squads.edit', compact('squad')); //compact: php option
    }

    public function update ($id)
    {
        $squad = Squad::find($id);

        $squad->name = request('name');
        $squad->age = request('age');
        $squad->nationality = request('nationality');
        $squad->position = request('position');
        $squad->height = request('height');
        $squad->jersey = request('jersey');
        $squad->goals = request('goals');
        $squad->assists = request('assists');
        $squad->social = request('social');
        $squad->save();

        return redirect('/squads/' . $squad->id);


    }


    protected function validateArticle ()  //This is the validation function referral
    {
        return request()->validate([
            'name' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'position' => 'required',
            'height' => 'required',
            'jersey' => 'required',
            'goals' => 'required',
            'assists' => 'required',
            'social' => 'required'
        ]);
    }




}
