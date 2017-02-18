<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require app_path().'/Helpers/helpers.php';
class IndexController extends Controller
{

    public function index()
    {

        return view('index');
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
