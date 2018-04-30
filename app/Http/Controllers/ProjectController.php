<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    // la mejor fomra es hacer la paginacion de poco a poco
    public function index(){
        $proyectos = Project::all();
        return view('proyectos.index', compact('proyectos'));
    }
}
