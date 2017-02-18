<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
require app_path().'/Helpers/helpers.php';

class TourController extends Controller
{

    public function index()
    {
        return view('tour');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
        
        return view('tour/detail');
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
