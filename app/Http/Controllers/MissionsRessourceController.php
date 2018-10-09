<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mission;

class MissionsRessourceController extends Controller
{

    public function index()
    {
        $missions = mission::all();

        return $missions->toJson();

        return $missions->toJson(JSON_PRETTY_PRINT);
    }

    public function show($id)
    {
        $mission= mission::find($id);

        return $mission->toJson();

        return $mission->toJson(JSON_PRETTY_PRINT);
    }
}
