<?php

namespace App\Http\Controllers;

use App\Models\regions;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    private $tittle = "Regions";
    private $viewRoute = "LayoutAdminLTE.regions.";


    public function index(Request $requets)
    {
        $regions = regions::paginate(10);
        return view($this->viewRoute.'main')
        ->with('tittle', $this->tittle)
        ->with('regions',$regions);
    }
    public function store(Request $request)
    {
        $now = Carbon::now();
        $activo = "";

        if($request['status'] == "on"){
            $activo = "A";
        }
        else{
            $activo = "I";
        }

        $regions = new regions();

        $regions->description = $request['description'];
        $regions->status = $activo;
        $regions->created_at = $now;
        $regions->save();

        return  redirect()->route('regions')
        ->with('success', 'Region created successfully');
    }
    public function destroy($id_reg)
    {
        $regions = regions::where('id_reg',$id_reg)->first();

        dump($regions);
    }
}
