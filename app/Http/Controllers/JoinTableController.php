<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JoinTableController extends Controller
{
    public function showCityAndUser(){
        $users=DB::table('users')
                 ->select('users.*','cities.city_name')
                  ->join('cities', 'users.city','=','cities.id')
                  ->get();
        // return $users;

        return view('tableTwoJoin', ['data' => $users]);

    }
}
