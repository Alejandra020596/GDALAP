<?php

namespace App\Http\Controllers;

use App\Models\communes;
use App\Models\customers;
use App\Models\regions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{

    private $tittle = "Customers";
    private $viewRoute = "LayoutAdminLTE.customers.";


    public function index(Request $requets)
    {
        $regions = regions::all();
        $communes = communes::all();

        $customers = DB::table('customers')
        ->join('regions','customers.id_reg','=','regions.id_reg')
        ->join('communes','customers.id_com','=','communes.id_com')
        ->select('customers.dni','customers.id_reg','customers.id_com','customers.email','customers.name','customers.last_name','customers.address',
        'customers.date_reg','customers.status','regions.description as region','communes.description as commune')
        ->paginate(15);


        return view($this->viewRoute.'main')
        ->with('regions', $regions)
        ->with('communes', $communes)
        ->with('customers', $customers)
        ->with('tittle', $this->tittle);
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

        $customers = new customers();

        $customers->dni = $request['dni'];
        $customers->id_reg = $request['id_reg'];
        $customers->id_com = $request['id_com'];
        $customers->email = $request['email'];
        $customers->name = $request['name'];
        $customers->last_name = $request['last_name'];
        $customers->address = $request['address'];
        $customers->date_reg = $now;
        $customers->status = $activo;
        $customers->created_at = $now;
        $customers->save();

        return  redirect()->route('customers')
        ->with('success', 'Customers created successfully');

    }
}
