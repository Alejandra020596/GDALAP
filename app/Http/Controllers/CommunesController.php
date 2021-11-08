<?php

namespace App\Http\Controllers;

use App\Models\communes;
use App\Models\regions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunesController extends Controller
{
    //Communes

    private $tittle = "Communes";
    private $viewRoute = "LayoutAdminLTE.communes.";


    public function index(Request $requets)
    {
        $regions = regions::all();

        $communes = DB::table('communes')
        ->join('regions','communes.id_reg','=','regions.id_reg')
        ->select('communes.description','communes.status','communes.id_reg as idreg','regions.description as region',)
        ->paginate(15);

        return view($this->viewRoute.'main')
        ->with('tittle', $this->tittle)
        ->with('regions',$regions)
        ->with('communes',$communes);
    }

    public function store (Request $request)
    {
        $now = Carbon::now();
        $activo = "";

        if($request['status'] == "on"){
            $activo = "A";
        }
        else{
            $activo = "I";
        }

        $communes = new communes();

        $communes->id_reg = $request['id_reg'];
        $communes->description = $request['description'];
        $communes->status = $activo;
        $communes->created_at = $now;
        $communes->save();

        return  redirect()->route('communes')
        ->with('success', 'Communes created successfully');
    }
}
