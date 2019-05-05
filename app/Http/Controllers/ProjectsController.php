<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

use Illuminate\Support\Facades\Auth;
use \App\routes\web;

class ProjectsController extends Controller
{
    //
  protected function redirectTo()
{
    return '/home';
}



    public function InsertProject(Request $request){	


$NewProject = new Project;


$NewProject->naziv=$request->naziv;
$NewProject->opis=$request->input('opis');
$NewProject->obavljeni_poslovi=$request->input('poslovi');
$NewProject->datum_početka=$request->input('start');
$NewProject->datum_završetka=$request->input('end');
$NewProject->id_voditelja=Auth::id();
$NewProject->save();

return view('welcome');	

    }


  public function edit(Request $changerequest){


$authID= Auth::id();
$selectedProject = new Project;
$selectedProject= \App\Project::find( $changerequest->id);


$selectedProject->naziv=$changerequest->naziv;
$selectedProject->opis=$changerequest->opis;
$selectedProject->obavljeni_poslovi=$changerequest->poslovi;
$selectedProject->datum_početka=$changerequest->start;
$selectedProject->datum_završetka=$changerequest->end;
$selectedProject->id_voditelja=$changerequest->id_voditelja;


$selectedProject->save();
  	

if($authID==$changerequest->id_voditelja){

$RadiNa = \App\RadiNa::create(['id_projekta' =>  $changerequest->id , 'id_radnika' => $changerequest->human]);}


  	return view('welcome');	
  }



}
