<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CarController extends Controller
{

    public function index()
    {

        // dd($car);
        return  view('car');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        return view('car_show');
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
