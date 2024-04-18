<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // get user from model
        $users=User::latest()->get();
        // dd($users);
        return view('users',compact('users'));

        // $usersquery=DB::table('users')
        //         ->select(
        //             'name',
        //             'email as emailnya',
        //             'created_at as tglDibuat'
        //         )
        //         // ->where('name','=','Frederick Hessel')
        //         // ->where('remember_token','=','3VVLmv3ZDn')
        //         // ->wherebetween('id',[5,8])
        //         ->wheredate('created_at','2024-04-03')
        //         ->get();
        // dd($usersquery);

        // $users = User::all();
        // $user = $users->find(1);
        // dd($user);


    }

    public function manytomany()
    {
        // get user from model
        // $users=User::latest()->get();

        // dd($users);
        // return view('usersm',compact('users'));



        // get users from model
        $users=User::with('roles')->latest()->get();

        $usersquery=DB::table('users')
                    ->select(
                        'users.id as id_users',
                        'users.name as name_users',
                        'roles.name as name_roles'
                    )
                    ->leftjoin('user_role','user_role.user_id','=','users.id')
                    ->leftjoin('roles','roles.id','=','user_role.role_id')
                    ->get();
        dd($usersquery);
        dd($users->toArray());
        return view('usersm',compact('users'));
    }
}
