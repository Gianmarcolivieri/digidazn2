<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $teams = Team::orderBy('position','ASC')->get();
        return view('tableA.index')->with('teams',$teams);   // tableA.index è il nome dato nel web 




    }

    public function edit(team $team)
    {
        return view('tableA.edit')->with('team',$team); //teams/edit/1
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team) //Richiesta con il POST tramite EDIT con il form, 1
    {
        $data = $request->validate([
            // 'logo'=>'image|mimes:jpeg,png,jpg|max:2048',
            'position' => 'required|min:1|max:20',
            'point' => 'required|min:1|max:114',
            'win' => 'required|min:1|max:38',
            'draw' => 'required|min:1|max:38',
            'lose' => 'required|min:1|max:38',
          ]);

          $team->update($data);

        //   if($request->logo) {         	
        //       $name = uniqid().$request->logo->extension();           	
        //       if(File::exists(public_path('images/teams' . $name)))              
        //             $request->logo->move(public_path('images'), $name);             
        //             $team->logo = $name;     	
        //    }
    
            

        return redirect()->route('tableA.index')
        ->with('primary', 'Squadra con lo stemma: ' .$team->position. ' è stato aggiornata correttamente!');
    }
}
