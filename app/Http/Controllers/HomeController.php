<?php

namespace App\Http\Controllers;
use App\Interfaces\Vehicle;
use App\Abstracts\VehicleAbs;
use App\Traits\VehicleTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class HomeController extends VehicleAbs implements Vehicle
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, VehicleTrait;


    //this is Interface method
    public function capcity(){

        $test = $this->returnValue();

        return view('interface',[
            'data' => $test
        ]);
    }

    //this is Abstract Method
    public function display(){
        return view('abstract');
    }

    //Trait in use section load in this class.

}
