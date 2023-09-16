<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnionTableController extends Controller
{
     public function showUnionAndTwo(){

        $lectures=DB::table('lectures')
                    ->select('name','email','city_name')
                    ->join('cities','lectures.city', '=','cities.id');
       $users=DB::table('users')
                      ->union($lectures)
                      ->select('name','email','city_name')
                      ->join('cities','users.city', '=','cities.id')
                      ->get();
        // return $users;

         return view('tableTwoUnion', ['data' => $users]);

    }
}
