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
       $users=DB::table('users')->paginate(4);
       //exmaple of pagenation
                //    ->limit(3) rename in laravel limit - take
                //    ->offset(3) rename in laravel limit - skip
                    // ->take(3)
                    // ->skip(3)
                    //Show Random Values 
                    // ->inRandomOrder()
                    // ->orderBy()
                //    ->get();
                
                //
        //   return $users;
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
    
//  1 Insert User Information into database 
    public function addUser(Request $req){
       $user= DB::table('users')->insert(
        [
            'name'  => $req->name,
            'email' => $req->email,
            'age'   =>  $req->age,
            'city'  => $req->city,
        ]
    
    );
    
        if($user){
            return redirect()->route('home');
        }else{
            return "Data Not Inserted";
        }
    }

    
//  2. Update User Information into database 
 public function updatePage(string $id){
       
            //  $user=DB::table('users')->where('id' ,$id)->get();
             $user=DB::table('users')->find($id);
             return view('updatepage',['data'=>$user]);
       
    }



     public function updateUser(Request $req, string $id){
       $user= DB::table('users')
                ->where('id',$id)
                ->update([
                 'name'=>$req->name,
                 'email' =>$req->email,
                 'age' =>$req->age,
                 'city' =>$req->city
                ]);
        if($user){
                     return redirect()->route('home');
                }else{
                 echo "Data is not updated successfully";
                }
            }
//  3 Delete User Information into database 
    public function deleteUser(Request $req, string $id){
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
