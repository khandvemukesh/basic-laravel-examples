<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function showUsers(){
        // Show Only Selected value and change the name columns use Of Select method
        // $users=DB::table('users')
        //            ->select('name','email as user_email')
        //            ->get();
        // return $users;
        
        //How to Avoid Duplicasce Use Of Distinct method and pluck
        // $users=DB::table('users')
        //           ->pluck('name');
                   //->select('city')
                   //->distinct()
                   //->get();
        // return $users;

       // how Search Record using where clause  and like clause
       $users=DB::table('users')
                //    ->limit(3) rename in laravel limit - take
                //    ->offset(3) rename in laravel limit - skip
                    // ->take(3)
                    // ->skip(3)
                    //Show Random Values 
                    // ->inRandomOrder()
                    // ->orderBy()
                   ->get();
        //  return $users;
       return view('userAllData',['data'=>$users]);
    }
    public function showUserSingleRecord(string $id){
       
             $user=DB::table('users')->where('id' ,$id)->get();
             
             return view('userSingleData',['data'=>$user]);
       
    }
        // foreach($users as $user){
        //     echo $user->name .'<br/>';
        // }
        
        //Stop All The File Execution When file is Runnung only dd() method
        // dd($users);
        //Not Stop All The File Execution When file is Runnung All methods
        // dump($users);
        
    public function addUser(){
       $user= DB::table('users')->upsert(
        [
            'name'  => 'rajesh parte',
            'email' => 'rajesh@gmail.com',
            'age'   =>  30,
            'city'  => 'betul',
        ],['email'],['city','age']
    
    );
    
        if($user){
            echo "Data Record Inserted";
        }else{
            echo "Data Not Inserted";
        }
    }
     public function updateUser(){
       $user= DB::table('users')
                       ->where('id',3)
                       ->update([
                        'name'=>'John',
                        'email' =>'John@gmail.com'
                       ]);
                       if($user){
                        echo "Data is updated successfully";
                       }else{
                        echo "Data is not updated successfully";
                       }
                    }
    public function deleteUser(string $id){
       $user = DB::table('users')
       ->where('id',$id)
       ->delete();
       if($user){
       return redirect()->route('home');
       }else{
        echo "User not found";
       }
    }
}
